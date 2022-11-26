<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabTrack | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css" integrity="sha512-hj9rznBPdFg9A4fACbJcp4ttzdinMDtPrtZ3gBD11DiY3O1xJfn0r1U5so/J0zwfGOzq9teIaH5rFmjFAFw8SA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @laravelPWA
    <!-- Web Application Manifest -->
    <link rel="manifest" href="{{url('/build/assets/manifest.json')}}">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">
    
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">
    
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">
    
    <link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    
    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">
    
    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>
    <!-- <script src="src/app.js"></script> -->
    <script>
        const btnFinishClicked = () => {
            // e.preventDefault();
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#btnFinish').submit();
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        }
    </script>
</head>
<body>
    @include('sweetalert::alert')
    @include('components.navbar')
    <div class="container">
        @if ($message = Session::get('stored'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        @if (count($habitData) == 0)
        <div class="row">
            <div class="text-center mt-4">
                <h1 class="text-secondary fs-1">Selamat Datang</h1>
                <a href="#" class="btn btn-primary border-0"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Buat Kebiasaan Baru
                </a>
            </div>
            @else
            <div class="mb-3 d-flex justify-content-between">
                <label for=""></label>
                <a href="#" class="btn btn-primary border-0"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Tambah Kebiasaan
                </a>
            </div>
            <div class="row">
                @foreach ($habitData as $h)
                <div class="col-md-12 col-lg-6 mb-4">
                    <div class="card">
                        <span class=""></span>
                        <div class="card-body bg-light border-start border-5 {{$h->priority == 0 ? 'border-danger' : 'border-success'}}">
                            <h4 id="habitLabel"> </h4>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="text-dark">{{$h->title}}</h3>
                                </div>
                                <div>
                                    <a href="/habit/delete/{{$h->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus ?');">
                                        <i class="fas fa-times fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <form action="{{route('habitTrack.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="habit_id" value="{{$h->id}}">
                                <button type="submit" class="btn btn-success border-0" id="btnFinish" onclick="return confirm('Apakah anda sudah menyelesaikan tugasnya hari ini ?, pastikan anda tidak mensubmit 2x dalam satu hari');">
                                    <i class="fas fa-check"></i> 
                                    Tuntaskan
                                </button>
                                <a href="/track/{{$h->id}}" class="btn btn-info border-0" id="btnTrack">
                                    <i class="fas fa-tasks"></i> 
                                    Track Record
                                </a>
                                <a href="/track/{{$h->id}}" class="btn btn-warning border-0" id="btnEdit">
                                    <i class="fas fa-edit"></i> 
                                    Edit
                                </a>
                                {{-- <a href="/notif" class="btn btn-primary">Test</a> --}}
                            </form>
                            <p class="text-secondary bg-primary">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kebiasaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('habit.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="title">Kebiasaan Baru</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="modal-body">
                        <label for="title">Level Prioritas</label>
                        <select name="priority" class="form-control">
                            <option value="0">Penting</option>
                            <option value="1">Normal</option>
                        </select>
                        <span class="small text-secondary">* Prioritas penting akan ditandai dengan border merah, dan yang normal ditandai dengan border hijau</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btn" class="btn btn-primary" onclick="createNewHabitData()">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    {{-- Footer --}}
    {{-- <footer class="bg-dark text-center text-lg-start text-light">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright &copy; 2022 - Created with <i class="fas fa-heart"></i> 
            by <a href="https://instagram.com/abiyyucakra03" class="text-decoration-none">Abiyyu</a>
        </div>
        <!-- Copyright -->
    </footer> --}}
</body>
</html>