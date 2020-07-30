<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ URL::to('home') }}">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Let's Date" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-accounts"></i>
                    Users
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ URL::to('home') }}"> <i class="zmdi zmdi-label-heart"></i>Matches</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('home') }}"> <i class="zmdi zmdi-star"></i>Popular</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-calendar"></i>Dating Plans</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ URL::to('send') }}"> <i class="zmdi zmdi-mail-send"></i>Sent</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('receive') }}"> <i class="zmdi zmdi-inbox"></i>Inbox</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('gifts') }}">
                        <i class="zmdi zmdi-card-giftcard"></i>Gifts</a>
                </li>
                 <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-folder-outline"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ URL::to('') }}"> <i class="zmdi zmdi-collection-image"></i>Photos</a>
                        </li>
                        <li>
                            <a href="{{url('bookshow/'.Auth::user()->id)}}"> <i class="zmdi zmdi-bookmark"></i>Bookmarks</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('') }}"> <i class="zmdi zmdi-info"></i>Info</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ URL::to('home') }}">
            <img src="{{ asset('images/icon/logo.png') }}" alt="Let's Date" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-accounts"></i>Users</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ URL::to('home') }}"> <i class="zmdi zmdi-label-heart"></i>Matches</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('home') }}"> <i class="zmdi zmdi-star"></i>Popular</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-calendar"></i>Dating Plans</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ URL::to('send') }}"> <i class="zmdi zmdi-mail-send"></i>Sent</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('receive') }}"> <i class="zmdi zmdi-inbox"></i>Inbox</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('gifts') }}">
                        <i class="zmdi zmdi-card-giftcard"></i>Gifts</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="zmdi zmdi-folder-outline"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">  
                        <li>
                            <a href="{{ URL::to('') }}"> <i class="zmdi zmdi-collection-image"></i>Photos</a>
                        </li>
                        <li>
                            <a href="{{url('bookshow/'.Auth::user()->id)}}"> <i class="zmdi zmdi-bookmark"></i>Bookmarks</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('') }}"> <i class="zmdi zmdi-info"></i>Info</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <div class="input-group">
                            <input type="text" id="" name="" placeholder="User ID" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-info">
                                    <i class="zmdi zmdi-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">2</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image">
                                            <img src="{{ asset('images/icon/avatar-01.jpg')}}" class="img img-circle" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo.</p>
                                            <span class="time">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image">
                                            <img src="{{ asset('images/icon/avatar-01.jpg')}}" 
                                           class="img img-circle" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You have to date.</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">View all messages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ asset('images/icon/ic_account_circle.png')}}" alt="Profile Setting" />
                                </div>
                                <div class="content">
                                    @if (Auth::guest())
                                        <a class="js-acc-btn" href="#">Guest</a>
                                    @else
                                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>     
                                    @endif
                                </div>

                                <div class="account-dropdown js-dropdown">
                                    @if (Auth::guest())
                                    <div class="account-dropdown__footer">
                                        <a href="{{ URL::to('login') }}"> <i class="zmdi zmdi-lock-open"></i>Login</a>
                                        <a href="{{ URL::to('register') }}"> <i class="zmdi zmdi-sign-in"></i>Register</a>
                                    </div>
                                    @else
                                    <div class="info clearfix">
                                        <h5 class="name">
                                            <a href="{{ URL::to('home') }}">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="mail">{{ Auth::user()->email }}</span>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ URL::to('profile/'.Auth::user()->id) }}">
                                                <i class="zmdi zmdi-account"></i>Profile</a>
                                        </div>
                                        <div class="account-dropdown__item has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="zmdi zmdi-edit"></i>Edit
                                            </a>
                                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                <li>
                                                    <a href="{{url('aboutme/'.Auth::user()->id)}}"><i class="zmdi zmdi-flag"></i>About Me</a>
                                                    <a href="{{ URL::to('#') }}">
                                                        <i class="zmdi zmdi-label-heart"></i>About Matches
                                                    </a>
                                                    <a href="{{ URL::to('#') }}">
                                                        <i class="zmdi zmdi-more"></i>More About Me
                                                    </a>
                                                </li>
                                            </ul>         
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ URL::to('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-lock"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ URL::to('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->