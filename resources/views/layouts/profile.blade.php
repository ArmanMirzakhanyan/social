<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/color.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="theme-layout">

    @section('nav')
        <div class="responsive-header">
            <div class="mh-head first Sticky">
         <span class="mh-btns-left">
            <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
         </span>
                <span class="mh-text">
            <a href="newsfeed.html" title=""><img src="/images/logo2.png" alt=""></a>
         </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
        </div><!-- responsive header -->
        <div class="topbar stick">
            <div class="logo">
                <a title="" href="/"><img src="/images/logo.png" alt=""></a>
            </div>
            <div class="top-area">
                <ul class="setting-area">
                    <li>
                        <a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
                        <div class="searched">
                            <form method="post" class="form-search">
                                <input type="text" placeholder="Search Friend">
                                <button data-ripple><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-4.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-5.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-4.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="/images/resources/thumb-5.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                </ul>
                @auth
                    <div class="user-img">
                        {{ Auth::user()->name }}
                        <img src="/images/resources/admin.jpg" alt="">
                        <span class="status f-online"></span>
                        <div class="user-setting">
                            <a href="{{route('profile')}}" title=""><i class="ti-user"></i> view profile</a>
                            <a href="{{route('editprofile')}}" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                            <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                            <a href="{{ route('logout') }}" title=""  onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div><!-- topbar -->
    @show
    <section>
        <div class="feature-photo">
            <figure><img src="/images/resources/timeline-1.jpg" alt=""></figure>
            <div class="add-btn">
                <a href="#" title="" data-ripple="">Add Friend</a>
            </div>
            <form class="edit-phto">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photo
                    <input type="file"/>
                </label>
            </form>
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="/images/resources/user-avatar.jpg" alt="">
                                <form class="edit-phto">
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <input type="file"/>
                                    </label>
                                </form>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                    <h5>Janice Griffith</h5>
                                    <span>Group Admin</span>
                                </li>
                                <li>
                                    <a class="active" href="{{route('profile')}}" title="" data-ripple="">time line</a>
                                    <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                    <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                    <a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area -->

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3">

                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Edit info</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-info-alt"></i>
                                                <a title="" href="{{route('editprofile')}}">Basic info</a>
                                            </li>
                                            <li>
                                                <i class="ti-lock"></i>
                                                <a title="" href="edit-password.html">change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div><!-- sidebar -->
                            @yield('profile')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget">
                        <div class="foot-logo">
                            <div class="logo">
                                <a href="index-2.html" title=""><img src="/images/logo.png" alt=""></a>
                            </div>
                            <p>
                                The trio took this simple idea and built it into the world’s leading carpooling platform.
                            </p>
                        </div>
                        <ul class="location">
                            <li>
                                <i class="ti-map-alt"></i>
                                <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+1-56-346 345</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>follow</h4></div>
                        <ul class="list-style">
                            <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                            <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                            <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                            <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                            <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>Navigate</h4></div>
                        <ul class="list-style">
                            <li><a href="about.html" title="">about us</a></li>
                            <li><a href="contact.html" title="">contact us</a></li>
                            <li><a href="terms.html" title="">terms & Conditions</a></li>
                            <li><a href="#" title="">RSS syndication</a></li>
                            <li><a href="sitemap.html" title="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>useful links</h4></div>
                        <ul class="list-style">
                            <li><a href="#" title="">leasing</a></li>
                            <li><a href="#" title="">submit route</a></li>
                            <li><a href="#" title="">how does it work?</a></li>
                            <li><a href="#" title="">agent listings</a></li>
                            <li><a href="#" title="">view All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>download apps</h4></div>
                        <ul class="colla-apps">
                            <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                            <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                            <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                    <i><img src="/images/credit-cards.png" alt=""></i>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1"/>
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->
</div>
<script>
    $('.date').datepicker({
        format: 'mm-dd-yyyy'
    });
</script>
{{--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/map-init.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>



</body>
</html>
