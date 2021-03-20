<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>InCourse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>


<!--? Preloader Start -->
{{--<div id="preloader-active">--}}
{{--    <div class="preloader d-flex align-items-center justify-content-center">--}}
{{--        <div class="preloader-inner position-relative">--}}
{{--            <div class="preloader-circle"></div>--}}
{{--            <div class="preloader-img pere-text">--}}
{{--                <img src="{{asset('assets/img/logo/loder.png')}}" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
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
                    <div class="col-xl-10 col-lg-10">
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
                                            @endcan
                                            <li class="button-header"><a href="{{ url('/logout_new') }}" class="btn btn3">Log out</a></li>
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
<!-- Header End -->
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2 bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">News in our platform</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('assets/img/blog/single_blog_2.png')}}" alt="">
                                <a href="#" class="blog_item_date bg-info">
                                    <h3>21</h3>
                                    <p>Mar</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="">
                                    <h2 class="blog-head" style="color: #2d2d2d;">Amazing news in this page</h2>
                                </a>
                                <p>asdasdsadasdsadsadsaaaaaaaaaa asdsadsadsadsa  sadasdsadasdsad asdasdasda\
                                asdasdasdsadasdas sadasdsadsadas</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Lifestyle</a></li>
                                </ul>
                            </div>
                        </article>
{{--                        <article class="blog_item">--}}
{{--                            <div class="blog_item_img">--}}
{{--                                <img class="card-img rounded-0" src="{{asset('assets/img/blog/single_blog_3.png')}}" alt="">--}}
{{--                                <a href="#" class="blog_item_date">--}}
{{--                                    <h3>15</h3>--}}
{{--                                    <p>Jan</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_details">--}}
{{--                                <a class="d-inline-block" href="">--}}
{{--                                    <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>--}}
{{--                                </a>--}}
{{--                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that--}}
{{--                                    he earth it first without heaven in place seed it second morning saying.</p>--}}
{{--                                <ul class="blog-info-link">--}}
{{--                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article class="blog_item">--}}
{{--                            <div class="blog_item_img">--}}
{{--                                <img class="card-img rounded-0" src="{{asset('assets/img/blog/single_blog_4.png')}}" alt="">--}}
{{--                                <a href="#" class="blog_item_date">--}}
{{--                                    <h3>15</h3>--}}
{{--                                    <p>Jan</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_details">--}}
{{--                                <a class="d-inline-block" href="">--}}
{{--                                    <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>--}}
{{--                                </a>--}}
{{--                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that--}}
{{--                                    he earth it first without heaven in place seed it second morning saying.</p>--}}
{{--                                <ul class="blog-info-link">--}}
{{--                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article class="blog_item">--}}
{{--                            <div class="blog_item_img">--}}
{{--                                <img class="card-img rounded-0" src="{{asset('assets/img/blog/single_blog_5.png')}}" alt="">--}}
{{--                                <a href="#" class="blog_item_date">--}}
{{--                                    <h3>15</h3>--}}
{{--                                    <p>Jan</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_details">--}}
{{--                                <a class="d-inline-block" href="">--}}
{{--                                    <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>--}}
{{--                                </a>--}}
{{--                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that--}}
{{--                                    he earth it first without heaven in place seed it second morning saying.</p>--}}
{{--                                <ul class="blog-info-link">--}}
{{--                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </article>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar ">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Programming courses</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Business courses</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Science</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>School</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Kids</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                            <div class="media post_item">
                                <img src="{{asset('assets/img/post/post_1.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="">
                                        <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                    </a>
                                    <p>March 21, 2021</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Seach favourite</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">marketing</a>
                                </li>
                                <li>
                                    <a href="#">python</a>
                                </li>
                                <li>
                                    <a href="#">math</a>
                                </li>
                                <li>
                                    <a href="#">photography</a>
                                </li>
                                <li>
                                    <a href="#">lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">java</a>
                                </li>
                            </ul>
                        </aside>

{{--                        <aside class="single_sidebar_widget instagram_feeds">--}}
{{--                            <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>--}}
{{--                            <ul class="instagram_row flex-wrap">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_5.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_6.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_7.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_8.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_9.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="{{asset('assets/img/post/post_10.png')}}" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}
{{--                        <aside class="single_sidebar_widget newsletter_widget">--}}
{{--                            <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>--}}
{{--                            <form action="#">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"--}}
{{--                                           onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>--}}
{{--                                </div>--}}
{{--                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"--}}
{{--                                        type="submit">Subscribe</button>--}}
{{--                            </form>--}}
{{--                        </aside>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>
<footer>
    <div class="footer-wrappper footer-bg bg-info">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->

                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>The automated process starts as soon as your clothes go into the machine.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" class="bg-info" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/animated.headline.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
