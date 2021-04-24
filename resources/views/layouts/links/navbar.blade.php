<div class="header-area header-transparent bg-darker" >
    <div class="main-header ">
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="#"><img src="" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active" ><a href="/">Home</a></li>
                                        <li><a href="{{route('courses')}}">Courses</a></li>
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
                </div>
            </div>
        </div>
    </div>
</div>
