<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{HabitTrack,Habit};
use Alert;

class HabitTrackController extends Controller
{
    function index($habit_id)
    {
        $getTitleHabitData = Habit::find($habit_id);
        $habitTrackData = HabitTrack::with('habit')->where('habit_id',$habit_id)->get();
        return view('track',compact('habitTrackData','getTitleHabitData'));
    }

    function store(Request $request)
    {
        $habitTrackData = new HabitTrack();
        $habitTrackData->habit_id = $request->habit_id;
        $habitTrackData->date = \Carbon\Carbon::today();
        $habitTrackData->time = \Carbon\Carbon::now()->toTimeString();
        $habitTrackData->status = 'done';
        $habitTrackData->save();

        $habitTrackData = HabitTrack::where('habit_id','=',$request->habit_id)->get();
        $habitTrackData2 = HabitTrack::where('habit_id','=',$request->habit_id)->first();
        Alert::success('Yeayyy','Kamu sudah '.count($habitTrackData).' kali '.$habitTrackData2->habit->title.', SEMANGAT!!');
        return redirect('/habit');//->with('success','sudah '.$habitTrackData.' kali, mantap! lanjutkan !');
    }

    function getDate($habit_id)
    {
        $habitTrackData = HabitTrack::with('habit')->where('habit_id',$habit_id)->get();
        return response()->json($habitTrackData);
    }
}
