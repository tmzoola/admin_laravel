
<!doctype html>
<html class="no-js" lang="zxx">
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
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active" ><a href="/">Home</a></li>
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
                                                <li class="button-header"><a href="{{ route('user_profile') }}" class="btn btn3">My page</a></li>
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Courses</h1>
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
                                    <a href="{{route('course_content')}}" class="d-flex">
                                        <p>My courses</p>
                                        <p>(1)</p>
                                    </a>
                                </li>
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

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>
@include('layouts.links.footer')

@include('layouts.links.script_links')
</body>
</html>
