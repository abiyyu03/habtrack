<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Habit, HabitTrack, User};
use App\Services\FCMService;
use Alert;

class HabitController extends Controller
{
    function index()
    {
        $habitData = Habit::orderBy('priority')->get();
        $habitTrackData = HabitTrack::get();
        return view('habit',compact('habitData','habitTrackData'));
    }

    function store(Request $request)
    {
        $habitData = new Habit();
        $habitData->title = $request->title;
        $habitData->priority = $request->priority;
        $habitData->user_id = Auth()->user()->id;
        $habitData->habit_status = 'on_going';
        $habitData->save();

        return redirect('/habit')->with('stored','Data successfully created');
    }

    function destroy($id)
    {
        $habitData = Habit::find($id);
        $habitData->delete();

        $habitTrackData = HabitTrack::where('habit_id',$habitData->id)->get();
        foreach ($habitTrackData as $ht) {
            $habitTrack = HabitTrack::find($ht->id);
            $habitTrack->delete();
        } 

        Alert::success('Berhasil','Data berhasil dihapus !');
        return redirect('/habit');
    }

    function winStreak($habit_id)
    {
        $habitTrackData = HabitTrack::select('date')->where('habit_id',$habit_id)->get();
    }

    public function sendNotification(Request $request)

    {

        $firebaseToken = User::whereNotNull('fcm_token')->pluck('fcm_token')->all();
            
        $SERVER_API_KEY = config('fcm.token');

    

        $data = [

            "registration_ids" => $firebaseToken, 
            "notification" => [ 
                "title" => 'test', 
                "body" => 'test',   
            ] 
        ];

        $dataString = json_encode($data);

      

        $headers = [

            'Authorization: key=' . $SERVER_API_KEY,

            'Content-Type: application/json',

        ];

      

        $ch = curl_init();

        

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

                 

        $response = curl_exec($ch);
        dd($response);
    

        return back()->with('success', 'Notification send successfully.');

    }

}
    // function sendNotification()
    // {
    //     $user = User::find(Auth()->user()->id);
    //     FCMService::send(
    //         $user->fcm_token,[
    //             'title' => 'Test',
    //             'body' => 'test'
    //         ]
    //     );
    // }
