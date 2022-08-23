@extends('layouts.master')

@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="hero-wrapper-one hero-slider-one">
            <div class="single-slider bg_cover" style="background-image: url({{ asset('/static/image/hero-slider-1_1.jpg') }});">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <span class="sub-title text-underline" data-animation="fadeInDown" data-delay=".3s">世强物流代购运输管理系统</span>
                                <h1 data-animation="fadeInDown" data-delay=".5s">方便、快捷、安全</h1>
                                <h1 data-animation="fadeInDown" data-delay=".5s">方便、快捷、安全</h1>
                                <ul class="button" data-animation="fadeInDown" data-delay=".7s">
                                    <li><a href="mypage.html" class="main-btn btn-red-dark">会员管理</a></li>
                                    <li><a href="buy_W.htm" class="main-btn btn-white">代购申请</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--====== End Hero Section ======-->

    <!--====== Start About Section ======-->
    <section class="fancy-about fancy-about-one pt-130 position-relative pb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-img-box mb-50 wow fadeInLeft">
                        <img src="{{ asset('/static/picture/about-1.jpg') }}" alt="About image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-wrapper mb-50 wow fadeInRight">
                        <div class="section-title mb-20">
                            <span class="sub-title red-dark text-underline">世强物流</span>
                            <h2 class="text-transform">代理货物运输、代购服务</h2>
                        </div>
                        <p>其他更多内容填写地方</p>
                        <a href="mypage.html" class="main-btn">更多内容</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->

    <!--====== Start Footer ======-->
    <footer class="footer-area footer-default black-bg footer-map">
        <div class="container">
            <div class="footer-widget pt-165 pb-35">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget about-widget mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="logo mb-35">
                                <a href="index1.html"><img src="{{ asset('/static/picture/logo-2.png') }}" alt="Theme Logo"></a>
                            </div>
                            <div class="about-content">
                                <h4 class="text-underline">我们的联系方式</h4>
                                <ul>
                                    <li><i class="far fa-envelope"></i><span><a href="email-protection.html#abc3c4dfc7c2c5ceebccc6cac2c785c8c4c6"><span class="__cf_email__" data-cfemail="8ae2e5fee6e3e4efcaede7ebe3e6a4e9e5e7">[email&#160;protected]</span></a></span></li>
                                    <li><i class="far fa-map-marker-alt"></i><span>详细地址</span></li>
                                    <li><i class="far fa-phone"></i><span><a href="tel:100-0000-0000">Mobile: 100-0000-0000</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".3s">
                            <h4 class="widget-title text-underline">使用指南</h4>
                            <ul class="footer-nav list-style-dot">
                                <li><a href="#">物流指南</a></li>
                                <li><a href="#">代购指南</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="widget-title text-underline">代理发货</h4>
                            <ul class="footer-nav list-style-dot">
                                <li><a href="Delivery_W.htm">发货申请</a></li>
                                <li><a href="StockPro_W.htm">库存申请</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".5s">
                            <h4 class="widget-title text-underline">代购申请</h4>
                            <ul class="footer-nav list-style-dot">
                                <li><a href="buy_W.htm">代购申请</a></li>
                                <li><a href="#">管理发货商品</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-8">
                        <div class="text">
                            <p>Copyright &copy; 世强物流</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== End Footer ======-->
@endsection
