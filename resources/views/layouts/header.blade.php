<header>
    <!-- Desktop Menu -->
    <nav class="navbar navbar-fixed-top site-nav hidden-xs">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site__nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    mr<span>trippi</span>
                </a>
            </div> <!--Branding Logo Ends-->
            <div class="collapse navbar-collapse" id="site__nav">
                <ul class="nav navbar-nav navbar-left">
                    @guest
                    <li><a href="{{ url('/') }}"> | Travel Questions Answered</a></li>
                    @else
                        <li class="desktop-menu"><a href="#">Browse <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="level-one sub-nav">
                                <li class="sub-child"><a href="">Accessories </a>
                                    <ul class="level-second sub-nav">
                                        <li class="sub-child"><a href="">Accessories</a> </li>
                                        <li><a href="">Clothes</a></li>
                                        <li><a href="">Cosmetics</a></li>
                                        <li><a href="">Entertainment</a></li>
                                        <li><a href="">Kids/Maternity</a></li>
                                        <li><a href="">Shoes</a></li>
                                    </ul>
                                    <ul class="level-second level-second-next sub-nav">
                                        <li class="sub-child"><a href="">Accessories</a> </li>
                                        <li><a href="">Clothes</a></li>
                                        <li><a href="">Cosmetics</a></li>
                                        <li><a href="">Entertainment</a></li>
                                        <li><a href="">Kids/Maternity</a></li>
                                        <li><a href="">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Clothes</a></li>
                                <li><a href="">Cosmetics</a></li>
                                <li><a href="">Entertainment</a></li>
                                <li><a href="">Kids/Maternity</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                    @endif
                </ul>
                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/register') }}" class="signin-toggle">Signup</a></li>
                    <li><a href="{{ url('/login') }}" class="signin-toggle">Login</a></li>
                </ul>
                @else
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#" class="search-toggle"><img src="images/icon-search.png" alt="search"></a></li>
                        <li><a href="#" class="notification-bubble messages" id="headMessages"><span class="badge">12</span><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="notification-bubble" id="headNotification"><span class="badge">42</span><i class="fa fa-bell" aria-hidden="true"></i></a></li>

                        <li><a href="#" class="signin-toggle user-profile-link"><span class="user-img">
                              <img src="images/profile-pic-img-01.png" alt="profile">
                            </span> <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="search-toggle"><button class="btn btn-sell">Ask Question</button></a></li>

                    </ul>
                    <div class="singup-wraper pull-right clearfix signin-wrapper">
                        <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <ul class="profile_dropdown">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#" class="logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                @endif
                <!--Notification-->
                <div class="header__notification-wrapper" id="notification">
                    <h4>Notifications</h4>
                    <ul>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/asif.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                    <p class="text-center">
                        <a href="notifications.html">See All Notification</a>
                    </p>
                </div>
                <!--Notification Messages-->
                <div class="header__notification-wrapper messages" id="msg-notification">
                    <h4>Messages</h4>
                    <ul>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/asif.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3 sideBar-avatar">
                                        <div class="avatar-icon">
                                            <img src="images/profile-pic-img-01.png" alt="user-pic">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        Amina Likes Jimmy’s Item. <span>24 mins ago</span>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                    <p class="text-center">
                        <a href="notifications.html">See All Notification</a>
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

        <section class="hidden">
            <div class="row">
                <div class="col-md-12">
                    <div class="signup-steps text-center">
                        <div class="step1 steps">
                            <div class="active"></div>
                        </div>
                        <div class="step2 steps">
                            <div class="active"></div>
                        </div>
                        <div class="step3 steps">
                            <div class="active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </nav>
    <!-- Mobile Menu Start-->
    <nav class="navbar navbar-fixed-top site-nav hidden-lg">
        <div class="container-fluid">
            <div class="navbar-header mobile hidden-md">
                <div class="row">
                    <div class="col-xs-3 col-md-3">
                        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#site__nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-xs-7 col-md-7 text-center">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo" class="">
                            <img src="images/logo-active.png" alt="logo" class="navbar-brand__mobile">
                        </a>
                    </div>
                    <div class="col-xs-2 col-md-2">
                        <a href="" class="search pull-right">
                            <img src="images/icon-search.png" alt="search">
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Browse Categories  -->
    <div class="broswe-categories hidden-lg hidden-md">
        <nav class="nav" role="navigation">
            <h5 class="browse_toggle">Browse
                <span class="fa fa-angle-down"></span></h5>
            <ul class="nav__list" style="display:none;">
                <!-- Accessories -->
                <li>
                    <input id="group-1" type="checkbox" hidden />
                    <label for="group-1">
                        <span class="fa fa-angle-right"></span>
                        Accessories
                    </label>
                    <ul class="group-list">
                        <li><a href="#">Bags and Purse</a></li>
                        <li><a href="">Belts</a></li>
                        <li><a href="">Cell Phones</a></li>
                        <li><a href="">Hats</a></li>
                        <li><a href="">Jewellery</a></li>
                        <li><a href="">Misc</a></li>
                        <li><a href="">Scarves</a></li>
                        <li><a href="">Sunglasses</a></li>
                        <li><a href="">Watches</a></li>
                    </ul>
                </li>
                <!-- Cloths -->
                <li>
                    <input id="group-2" type="checkbox" hidden />
                    <label for="group-2"><span class="fa fa-angle-right"></span> Cloths</label>
                    <ul class="group-list">
                        <li>
                        <li><a href="#">1st level item</a></li>
                        <li><a href="#">1st level item</a></li>
                        <input id="sub-group-2" type="checkbox" hidden />
                        <label for="sub-group-2"><span class="fa fa-angle-right"></span> Second level</label>
                        <ul class="sub-group-list">
                            <li><a href="#">2nd level nav item</a></li>
                            <li><a href="#">2nd level nav item</a></li>
                            <li>
                                <input id="sub-sub-group-2" type="checkbox" hidden />
                                <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span> Third level</label>
                                <ul class="sub-sub-group-list">
                                    <li><a href="#">3rd level nav item</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <!-- Cosmetics -->
                <li>
                    <input id="group-3" type="checkbox" hidden />
                    <label for="group-3"><span class="fa fa-angle-right"></span> Cosmetics</label>
                    <ul class="group-list">
                        <li>
                        <li><a href="#">1st level item</a></li>
                        <li><a href="#">1st level item</a></li>
                        <input id="sub-group-3" type="checkbox" hidden />
                        <label for="sub-group-3"><span class="fa fa-angle-right"></span> Second level</label>
                        <ul class="sub-group-list">
                            <li><a href="#">2nd level nav item</a></li>
                            <li><a href="#">2nd level nav item</a></li>
                            <li><a href="#">2nd level nav item</a></li>
                            <li>
                                <input id="sub-sub-group-3" type="checkbox" hidden />
                                <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span> Third level</label>
                                <ul class="sub-sub-group-list">
                                    <li><a href="#">3rd level nav item</a></li>
                                    <li><a href="#">3rd level nav item</a></li>
                                    <li><a href="#">3rd level nav item</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <!-- Entertainment -->
                <li>
                    <input id="group-4" type="checkbox" hidden />
                    <label for="group-4"><span class="fa fa-angle-right"></span> Entertainment</label>
                    <ul class="group-list">
                        <li>
                        <li><a href="#">1st level item</a></li>
                        <input id="sub-group-4" type="checkbox" hidden />
                        <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
                        <ul class="sub-group-list">
                            <li><a href="#">2nd level nav item</a></li>
                            <li><a href="#">2nd level nav item</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <!-- kids -->
                <li>
                    <input id="group-4" type="checkbox" hidden />
                    <label for="group-4"><span class="fa fa-angle-right"></span> Kids/Maternity</label>
                    <ul class="group-list">
                        <li>
                        <li><a href="#">1st level item</a></li>
                        <input id="sub-group-4" type="checkbox" hidden />
                        <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
                        <ul class="sub-group-list">
                            <li><a href="#">2nd level nav item</a></li>
                            <li><a href="#">2nd level nav item</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <!-- Shoes -->
                <li>
                    <input id="group-5" type="checkbox" hidden />
                    <label for="group-5"><span class="fa fa-angle-right"></span> Shoes</label>
                    <ul class="group-list">
                        <li><a href="#">Borjan</a></li>
                        <li><a href="#">Fayva</a></li>
                        <li><a href="#">Shoe Plannet</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- main-menu -->
    <div class="main-menu-mobile">
        <button class="btn btn-danger">Sell Now</button>
        <nav class="navigation">
            <ul class="mainmenu">
                <li><a href="">About</a>
                    <ul class="submenu">
                        <li><a href="">Learn How it Work</a></li>
                        <li><a href="">Infoboard</a></li>
                        <li><a href="">Safety & Refunds</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Terms</a></li>
                    </ul>
                </li>
                <li><a href="">Community</a>
                    <ul class="submenu">
                        <li><a href="">Fourms</a></li>
                        <li><a href="">Members</a></li>
                    </ul>
                </li>
                <li class="logout"><a href="">Logout</a></li>
            </ul>
        </nav>
    </div>
    <!-- Mobile Menu Ends-->

</header>