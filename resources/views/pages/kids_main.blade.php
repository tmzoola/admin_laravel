
<!DOCTYPE html>
<html lang="en">
@include('layouts.kids.head')
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="c1 active"><a href="#">Home</a></li>
                <li class="c2"><a href="{{route('courses')}}">Courses</a></li>
                <li class="c3"><a href="#">About</a></li>
                <li class="c6 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Blog Details</a></li>
                        <li><a href="#">Element</a></li>
                    </ul>
                </li>
                <li class="c7"><a href="">Contact</a></li>
                <li class="c1"><a href="{{route('user_profile')}}">My page</a></li>

            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="grey-box-icon b1">
                <h4>Online Courses</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                    eset nec lacus elit dor broma.</p>
                <p><a href="#"><em>Read More</em></a></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="grey-box-icon b2">
                <h4>Meet our Staff</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                    eset nec lacus elit dor broma.</p>
                <p><a href="#"><em>Read More</em></a></p>
            </div>
        </div>
</div>
<section class="news-box top-margin">
    <div class="container">
        <h2><span>New Courses</span></h2>
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src="kids/images/news2.jpg" alt=""></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><h5>Developer</h5></p>
                                    <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="container">
    <div class="row">
        <div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div>
            <p><span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui.</span></p>
            <p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p><p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
            <a href="#" title="read more" class="btn-inline " target="_self">read more</a> </div>


        <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Courses</h2></div>
            <div class="list styled custom-list">
                <ul>
                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Mathematics and Computer Science</a></li>
                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mathematics and Philosophy</a></li>
                    <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Philosophy and Modern Languages</a></li>
                    <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<footer id="footer">

    <div class="container">
        <div class="row">
            <div class="footerbottom">
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Course Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li><a href="#">
                                        List of Technology
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Business
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Photography
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Language
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Products Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li> <a href="#">
                                        Individual Plans  </a>
                                </li>
                                <li><a href="#">
                                        Business Plans
                                    </a>
                                </li>
                                <li><a href="#">
                                        Free Trial
                                    </a>
                                </li>
                                <li><a href="#">
                                        Academic
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Browse by Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li><a href="#">
                                        All Courses
                                    </a>
                                </li>
                                <li> <a href="#">
                                        All Instructors
                                    </a>
                                </li>
                                <li><a href="#">
                                        All Members
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        All Groups
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

@include('layouts.kids.scripts')

</body>
</html>
