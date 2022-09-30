<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @csrf

    <!--====== Title ======-->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('/static/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/default.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('/static/css/style.css') }}">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('/static/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/UserStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/DevStyle.css') }}">
    @yield('stylesheets')

    <style>
    </style>
    @yield('style')

    <!--====== Jquery js ======-->
    <script data-cfasync="false" src="{{ asset('/static/js/email-decode.min.js') }}"></script><script src="{{ asset('/static/js/jquery-3.6.0.min.js') }}"></script>
    <!--====== Popper js ======-->
    <script src="{{ asset('/static/js/popper.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('/static/js/bootstrap.min.js') }}"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('/static/js/slick.min.js') }}"></script>
    <!--====== Magnific js ======-->
    <script src="{{ asset('/static/js/jquery.magnific-popup.min.js') }}"></script>
    <!--====== Isotope js ======-->
    <script src="{{ asset('/static/js/isotope.min.js') }}"></script>
    <!--====== Imagesloaded js ======-->
    <script src="{{ asset('/static/js/imagesloaded.min.js') }}"></script>
    <!--====== Counterup js ======-->
    <script src="{{ asset('/static/js/jquery.counterup.min.js') }}"></script>
    <!--====== Waypoints js ======-->
    <script src="{{ asset('/static/js/jquery.waypoints.js') }}"></script>
    <!--====== Number js ======-->
    <script src="{{ asset('/static/js/jquery.nice-number.min.js') }}"></script>
    <!--====== Nice-select js ======-->
    <script src="{{ asset('/static/js/jquery.nice-select.min.js') }}"></script>
    <!--====== jquery UI js ======-->
    <script src="{{ asset('/static/js/jquery-ui.min.js') }}"></script>
    <!--====== Donutty js ======-->
    <script src="{{ asset('/static/js/donutty-jquery.min.js') }}"></script>
    <!--====== WOW js ======-->
    <script src="{{ asset('/static/js/wow.min.js') }}"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('/static/js/theme.js') }}"></script>
    @yield('scripts')
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->
    <!--====== Search From ======-->
    <div class="modal fade" id="search-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="text" class="form_control" placeholder="Search here...">
                        <button class="search_btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====== Search From ======-->
    <!--====== Start Header Section ======-->
    <header class="theme-header">
        <!-- header top -->
        <div class="header-top-bar header-top-bar-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="top-left">
                            <ul>
                                <li><span><i class="far fa-map-marker-alt"></i>点击收藏</span></li>
                                <li><span><i class="far fa-phone"></i>Mobile:100-0000-0000</span></li>
                                <li><span><i class="far fa-envelope"></i><a href="#"><span >master@web.com</span></a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-right d-flex align-items-center">
                            @if (Auth::user())
                                <span class="phone"><i class="far fa-sign-in"></i><a href="{{ route('logout') }}">Logout</a></span>
                            @else
                            <span class="phone"><i class="far fa-sign-in"></i><a href="{{ route('view_signin') }}">登录会员</a></span>
                            <span class="phone"><i class="far fa-sign-in"></i><a href="{{ route('view_signup') }}">注册会员</a></span>
                            <span class="phone"><i class="far fa-sign-in"></i><a href="#">查找密码</a></span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header Navigation -->
        <div class="header-navigation">
            <div class="container-fluid">
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="{{ route('view_home') }}" class="brand-logo"><img src="{{ asset('/static/picture/logo-1.png') }}" alt="Site Logo"></a>
                    </div>
                    <div class="nav-menu">
                        <!-- Navbar Close -->
                        <div class="navbar-close"><i class="far fa-times"></i></div>
                        <!-- Nav Search -->
                        <div class="nav-search">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email" required="">
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Main Menu -->
                        @auth()
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item has-children"><a href="#">使用指南</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">物流指南</a></li>
                                        <li><a href="#">代购指南</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">代理发货</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('delivery') }}">发货申请</a></li>
                                        <li><a href="{{ route('stockpro') }}">库存申请</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">代购申请</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('buy') }}">代购申请</a></li>
                                        <li><a href="#">管理发布商品</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">客服中心</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">公司公告</a></li>
                                        <li><a href="#">常见问题</a></li>
                                        <li><a href="#">清关查询</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">会员主页</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('mypage') }}">我的主页</a></li>
                                        <li><a href="{{ route('deposit_use') }}">支付管理</a></li>
                                        <li><a href="{{ route('deposit_req') }}">充值管理</a></li>
                                        <li><a href="#">积分管理</a></li>
                                        <li><a href="#">优惠券</a></li>
                                        <li><a href="#">1:1咨询</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">公司介绍</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">使用向导</a></li>
                                        <li><a href="#">个人信息</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        @endauth
                    </div>
                    <div class="header-right-nav">
                        <ul>
                            <li class="lang-dropdown">
                                <select class="wide">
                                    <option value="01">中国语</option>
                                </select>
                            </li>
                            <li class="navbar-toggle-btn">
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== End Header Section ======-->

    @yield('content')

    <!--====== back-to-top ======-->
    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
</body>
</html>
