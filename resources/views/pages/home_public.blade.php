<!doctype html>
<html class="no-js" >
@include('layouts.links.css_links')

<body>

<div class="header-area header-transparent bg-darker" >
    <div class="main-header ">
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="#"><img src="" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active" ><a href="">Home</a></li>
                                        <li><a href="">Courses</a></li>
                                        <li><a href="">About</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="">Blog</a></li>
                                                <li><a href="">Blog Details</a></li>
                                                <li><a href="">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Contact</a></li>
                                        @auth()
                                            @can('manage-users')
                                                <li class="button-header margin-left "><a href="{{ url('/admin') }}" class="btn btn3">Admin</a></li>
                                                <li class="button-header"><a href="{{route('user_profile')}}" class="btn btn3">My page</a></li>
                                            @endcan
                                        @endauth
                                        @guest()
                                            <li class="button-header margin-left "><a href="{{ route('register') }}" class="btn btn3">Join</a></li>
                                            <li class="button-header"><a href="{{ route('login') }}" class="btn btn3">Log In</a></li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <!--? slider Area Start-->
    <section class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">incourse.uz is unique online <br> learning platform</h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                                @guest()
                                    <a href="{{ route('register')}}" class="btn btn3"  data-delay="0.7s">Join for Free</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Our latest courses</h2>
                    </div>
                </div>
            </div>
            <div class="courses-actives">
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>Mentors Name</p>
                            <h3><a href="#">Course Name</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">

                                <div class="price">
                                    <span>$1</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>Mentors Name</p>
                            <h3><a href="#">Course Name</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">

                                <div class="price">
                                    <span>$1</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>Mentors Name</p>
                            <h3><a href="#">Course Name</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">

                                <div class="price">
                                    <span>$1</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>Mentors Name</p>
                            <h3><a href="#">Course Name</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">

                                <div class="price">
                                    <span>$1</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="about-area1 fix pt-10">
        <div class="support-wrapper align-items-center">
            <div class="left-content1">

                <div class="section-tittle section-tittle2 mb-55">
                    <div class="front-text">
                        <h2 class="">Learn new skills online with top educators</h2>
                        <p>The automated process all your website tasks. Discover tools and
                            techniques to engage effectively with vulnerable children and young
                            people.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Techniques to engage effectively with vulnerable children and young people.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world  learning together.</p>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                    </div>
                </div>
            </div>
            <div class="right-content1">
                <!-- img -->
                <div class="right-img">
                    <img src="assets/img/gallery/about.png" alt="">

                    <div class="video-icon" >
                        <a class="popup-video btn-icon bg-info" href="https://www.youtube.com/watch?v=linlz7-Pnvw"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="topic-area section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Explore top subjects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic3.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic4.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic5.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic6.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic7.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="assets/img/gallery/topic8.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Programing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mt-20">
                        <a href="courses.html" class="border-btn">View More Subjects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top subjects End -->
    <!--? About Area-3 Start -->
    <section class="about-area3 fix">
        <div class="support-wrapper align-items-center">
            <div class="right-content3">
                <!-- img -->
                <div class="right-img">
                    <img src="images/blog/blog-sidebar-image01.jpg" alt="">
                </div>
            </div>
            <div class="left-content3">
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-20">
                    <div class="front-text">
                        <h2 class="">Learner outcomes on courses you will take</h2>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Techniques to engage effectively with vulnerable children and young people.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world
                            learning together.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="assets/img/icon/right-icon.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world learning together.
                            Online learning is as easy and natural.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Team -->
    <section class="team-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Community experts</h2>
                    </div>
                </div>
            </div>
            <div class="team-active">
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{asset('images/murodjon.jpg')}}" class="img-thumbnail">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Murodjon</a></h5>
                        <p>Founder and CEO of InCouse.uz</p>
                    </div>
                </div>

                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{asset('images/murodjon.jpg')}}" class="img-thumbnail">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Murodjon</a></h5>
                        <p>Founder and CEO of InCouse.uz</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{asset('images/murodjon.jpg')}}" class="img-thumbnail">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Murodjon</a></h5>
                        <p>Founder and CEO of InCouse.uz</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{asset('images/murodjon.jpg')}}" class="img-thumbnail">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Murodjon</a></h5>
                        <p>Founder and CEO of InCouse.uz</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{asset('images/murodjon.jpg')}}" class="img-thumbnail">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Murodjon</a></h5>
                        <p>Founder and CEO of InCouse.uz</p>
                    </div>
                </div>
                {{--                <div class="single-cat text-center">--}}
                {{--                    <div class="cat-icon">--}}
                {{--                        <img src="" alt="">--}}
                {{--                    </div>--}}
                {{--                    <div class="cat-cap">--}}
                {{--                        <h5><a href="#">Mr. Uttom</a></h5>--}}
                {{--                        <p>The automated process all your website tasks.</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="single-cat text-center">--}}
                {{--                    <div class="cat-icon">--}}
                {{--                        <img src="" alt="">--}}
                {{--                    </div>--}}
                {{--                    <div class="cat-cap">--}}
                {{--                        <h5><a href="#">Mr. Shakil</a></h5>--}}
                {{--                        <p>The automated process all your website tasks.</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="single-cat text-center">--}}
                {{--                    <div class="cat-icon">--}}
                {{--                        <img src="" alt="">--}}
                {{--                    </div>--}}
                {{--                    <div class="cat-cap">--}}
                {{--                        <h5><a href="#">Mr. Arafat</a></h5>--}}
                {{--                        <p>The automated process all your website tasks.</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="single-cat text-center">--}}
                {{--                    <div class="cat-icon">--}}
                {{--                        <img src="" alt="">--}}
                {{--                    </div>--}}
                {{--                    <div class="cat-cap">--}}
                {{--                        <h5><a href="#">Mr. saiful</a></h5>--}}
                {{--                        <p>The automated process all your website tasks.</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>

</main>

@include('layouts.links.footer')
@include('layouts.links.script_links')

</body>
</html>

















