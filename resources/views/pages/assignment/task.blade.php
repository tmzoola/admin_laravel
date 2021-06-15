<!DOCTYPE html>
<html lang="en-US" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="brand-color">INCOURSE </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('new_design/assets/img/logo.png')}}">
    <link rel="manifest" href="{{asset('new_design/assets/img/favicons/manifest.json')}}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{asset('new_design/assets/css/theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('new_design/assets/css/custom.css')}}" rel="stylesheet"/>
</head>
<body>
<main class="main " id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><span class="text-1000 fs-2 ms-2 fw-medium brand-color">INCOURSE</span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                    <li class="nav-item"><a class="nav-link  active" aria-current="page" href="/courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About US</a></li>
                </ul>
                <form class="d-flex py-3 py-lg-0">
                    @auth()
                        @can('manage-users')
                            <button class="btn btn-brand-outline rounded-pill order-0" type="submit"><a href="{{ url('/admin') }}" style="color: black;" >Admin</a></button>
                        @endcan
                        <button class="btn btn-brand-outline rounded-pill order-0" type="submit"><a href="{{ route('user_profile') }}" style="color: black;" >My page</a></button>
                    @endauth
                    @guest()
                        <button class="btn btn-brand-outline rounded-pill order-0" type="submit"><a href="{{ route('login') }}" style="color: black;" >Login</a></button>
                    @endguest
                </form>
            </div>
        </div>
    </nav>
    <div class="container bg-img-1 px-2">
        <section>
            <h1 class="text-center brand-color-blue py-4 pb-6 border-bottom-green w-75 mx-auto" >Assignment <br>
                @if(isset($assignment))
                    <div>Completion Period Expires in <span id="time">60:00</span> minutes!</div>
                @endif

            </h1>

                @if(isset($assignment))
                <div class="row  py-4 ">
                    <h1>{{$assignment->title}}</h1>

                    <p>{{$assignment->content}}</p>
                    <input class="form-control" type="file" style="width: 500px" id="formFileMultiple" />
                </div>


                @else
                    <h1 class="text-center">Assingment Has not been created yet</h1>
                @endif


        </section>
    </div>
</main>
<script src="{{asset('new_design/vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{asset('new_design/vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('new_design/vendors/is/is.min.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset('new_design/assets/js/theme.js')}}"></script>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
</body>
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 60 * 60,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };
</script>
</html>
