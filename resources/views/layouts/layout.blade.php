<!DOCTYPE html>
<html lang="en" class="app">
<script language="JavaScript">
    top.window.moveTo(0, 0);
    //判断是否为IE浏览器  
    if (document.all) {
        top.window.resizeTo(screen.availWidth, screen.availHeight);
    }
    //判断是否为Netscape浏览器(document.layers是Netscape 4.x专有的属性，由于  
    //document.layers在Netscape6.0以后已经取消，此方法只适用于6.0之前的浏览器)  
    else if (document.layers || document.getElementById) {
        if (top.window.outerHeight < screen.availHeight ||
            top.window.outerWidth < screen.availWidth) {
            top.window.outerHeight = screen.availHeight;
            top.window.outerWidth = screen.availWidth;
        }
    }
</script>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{asset('js/layout/jPlayer/jplayer.flat.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/simple-line-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/layout/app.css')}}" type="text/css" /> @yield('link')
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>

<body class="">

    <section class="vbox">
        <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
            <div class="navbar-header aside nav-xs bg-info dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="icon-list"></i>
                </a>
                <a href="/index" class="navbar-brand text-lt">
                    <i class="icon-drop"></i>

                    <span class="hidden-nav-xs m-l-sm">OnePenaut</span>
                </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                    <i class="icon-settings"></i>
                </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
                        <i class="fa fa-indent text"></i>
                        <i class="fa fa-dedent text-active"></i>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
                        <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
                    </div>
                </div>
            </form>
            <div class="navbar-right ">
                <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                    <li class="hidden-xs">
                        <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="badge badge-sm up bg-danger count">2</span>
                        </a>
                        <section class="dropdown-menu aside-xl animated fadeInUp">
                            <section class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    <strong>You have <span class="count">2</span> notifications</strong>
                                </div>
                                <div class="list-group list-group-alt">
                                    <a href="#" class="media list-group-item">
                                        <span class="pull-left thumb-sm">
                      <img src="{{asset('images/layout/a0.png')}}" alt="..." class="img-circle">
                    </span>
                                        <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                    </a>
                                    <a href="#" class="media list-group-item">
                                        <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                                    </a>
                                </div>
                                <div class="panel-footer text-sm">
                                    <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                                </div>
                            </section>
                        </section>
                    </li>
                    @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
                            <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
             
               

                            @if (Auth::user()->avatar=='')
                            <img src="{{asset('images/layout/default_avatar.jpg')}}" height="10%" width="10%"/>
                              @else
                              <img src="{{route('getentry', Auth::user()->email.'.'.'jpg')}}" height="10%" width="10%" />
                              @endif

                      
               
              </span> {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <li>
                                <span class="arrow top"></span>
                                <a href="/editprofile">编辑</a>
                            </li>
                            <li>
                                <a href="/profile">个人资料</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge bg-danger pull-right">3</span> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="docs.html">Help</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif



                </ul>
            </div>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black dk aside nav-xs hidden-print" id="nav">
                    <section class="vbox">
                        <section class="w-f-md scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav bg clearfix">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                            Discover
                                        </li>
                                        <li>
                                            <a href="/index">
                                                <i class="icon-home icon text-success"></i>
                                                <span class="font-bold">主页</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/profile">
                                                <i class="icon-user icon text-info"></i>
                                                <span class="font-bold">个人中心</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/course">
                                                <i class="icon-list icon text-danger"></i>

                                                <span class="font-bold">课程中心</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/pay">
                                                <i class="icon-basket-loaded icon  text-info-dker"></i>
                                                <span class="font-bold">服务购买</span>
                                            </a>
                                        </li>

                                    </ul>


                                    <!-- / nav -->
                            </div>
                        </section>


                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="vbox">

                        @yield('content')

                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section>
    <script src="{{asset('js/layout/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/layout/bootstrap.js')}}"></script>
    <!-- App -->
    <script src="{{asset('js/layout/app.js')}}"></script>
    <script src="{{asset('js/layout/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/layout/app.plugin.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/layout/jPlayer/jquery.jplayer.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/layout/jPlayer/add-on/jplayer.playlist.min.js')}}"></script>

    @yield('script')
</body>

</html>