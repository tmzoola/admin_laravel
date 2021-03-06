<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title class="brand-color">INCOURSE </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <!--    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('new_design/assets/img/logo.png')}}">
    <link rel="manifest" href="{{asset('new_design/assets/img/favicons/manifest.json')}}">
    <!--    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">-->
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
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
            <h1 class="text-center brand-color-blue py-4 pb-6 border-bottom-green w-75 mx-auto" > Courses </h1>

            <div class="row d-flex flex-wrap mt-5 justify-content-center mx-1 ">
                @foreach($data as $row)
                <div class="col-12  col-md-5s  col-lg-5  mt-auto p-3 pt-lg-5 m-4 m-md-3 shadow-box">


                    <div class="d-flex flex-nowrap justify-content-between align-items-end ">
                        <h2 class="px-2">{{$row->name}}</h2>


                        <img class="w-25" src="{{asset('new_design/assets/img/illustrations/a-2.png')}}" alt="">
                    </div>
                    <hr class="w-100 border-bottom-green">

                    <div class="d-flex flex-nowrap justify-content-between align-items-center  ">

                        <p class="fs-1 m-0">Davomiyligi <br><span
                                class="brand-color-2 fw-semi-bold fs-2"> 2 ta modul </span></p>
                        <a href="/course_names/{{$row->id}}" class="btn btn-brand-outline fs-1">
                           More
                        </a>

                    </div>


                </div>
                @endforeach
            </div>


        </section>


    </div>


</main>


<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('new_design/vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{asset('new_design/vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('new_design/vendors/is/is.min.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset('new_design/assets/js/theme.js')}}"></script>


<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      rel="stylesheet">
</body>

</html>
