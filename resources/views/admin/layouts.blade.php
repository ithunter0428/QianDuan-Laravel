<!-- saved from url=(0051)/admin/main.html -->
<html class="no-js translated-ltr" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>世强物流管理系统</title>
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_/main_files/AdmReset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_/main_files/AdmCommon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_/main_files/AdmBoard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_/main_files/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_/main_files/translateelement.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_/main_files/jquery.qtip.min.css') }}">

    @yield('stylesheets')

    <style>
        #button-logout {
            background-color: white;
            font-size: 16px;
            padding: 5px 10px;
            margin-top: 5px;
            float: right;
            width: 50px;
            text-align: center;
        }
    </style>
    @yield('style')

    <script type="text/javascript" src="{{ asset('/admin_/main_files/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_/main_files/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_/main_files/Common.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_/main_files/jquery.qtip.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_/main_files/Order_L.js') }}"></script>
    <script>
		function fnTimeLoop() {
			$.ajax({ url: "/Front/SessionEmpty.asp" ,
				method: 'GET',
				dataType : 'html',
				success: function(data) {
				},
				error: function(e) {
				}
			});
		}

		var sTimes = setInterval(fnTimeLoop, 5*60*1000);
	</script>
    <script>
        setInterval(function(){
            $("#TextQna").toggle();
        }, 250);

        setInterval(function(){
            $("#TextOrderQna").toggle();
        }, 250);

        setInterval(function(){
            $("#TextPayment").toggle();
        }, 250);

        setInterval(function(){
            $("#TextSms").toggle();
        }, 250);
    </script>
    <script>
        $(function () {
            $('.toggleBtn').click(function () {
                $('.toggleMnu').toggle();
            });
        });

        //
        function fnIntra( ){

            var ClntCd = $(".IntraPop").find('a').attr('ClntCd');
            var ClntNm = $(".IntraPop").find('a').attr('ClntNm');
            fnPopWinCT('http://intra.areumsoft.co.kr/Client/Login.asp?ClientCode=' + ClntCd + '&ClientName=' + encodeURI(ClntNm), '系统管理', 1400, 950, 'Y');

        }
    </script>
	@yield('scripts')
</head>

<body style="">
    <div id="wrap">
	<div id="header">
		<div class="">
			<div id="top">
				<h1><a href="{{ route("view_admin_home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">物流系统</font></font></a></h1>
				<div class="toggleBtn toggle-btn"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div id="userbox">
					<ul>
						<li><i class="icon-feather-arrow-down-right" aria-hidden="true"></i><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员登录</font></font></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询：</font></font><a href="n-2.html"><strong class="Box"><span id="TextQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询：</font></font><a href="m3.html"><strong class="Box"><span id="TextOrderQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折付款：</font></font><a href="m1.html"><strong class="Box"><span id="TextPayment" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1个</font></font></span></strong></a></li>
						<li><i class="icon-feather-mail" aria-hidden="true"></i><a href="sns1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信剩余积分：</font></font><strong class="Box2"><span id="TextSms" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11P</font></font></span></strong></a></li>
						<li><i class="icon-feather-settings" aria-hidden="true"></i>
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Member/MyAdm_W.asp?sKind=M&amp;sMemCode=412&#39;, &#39;MyAdm_W&#39;, 700, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑信息</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;|&nbsp;
							</font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登出</font></font></a>
						</li>
					</ul>
				</div>
				<div class="language">
					<select name="sLangCd" onChange="fnLanChange(this.value);">
						<option value="CN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CHINESE</font></font></option>
					</select>
				</div>
                <a id="button-logout" href="{{ route('logout') }}">Logout</a>
				<div class="fr">

					<!--div class="box5">
						<ul>

							<li><a href="">订单</a><a class="sysmessage-de">111</a></li>
						</ul>
					</div-->
				</div>

				<span class="clearFix">&nbsp;</span>
			</div>

            <div class="gnb toggleMnu">
                <ul id="menu">
                        <!--  -->
                        <li class="select"><a href="{{ route("view_admin_home") }}" target="_self"><i class="icon-feather-archive" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合管理</font></font></a>
                        <ul class="deth2">


                            <li class="select2"><a href="{{ route("view_admin_home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有订单</font></font></a></li>


                            <li class=""><a href="m1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付确认</font></font></a></li>


                            <li class=""><a href="m2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE</font></font></a></li>


                            <li class=""><a href="m3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单咨询</font></font></a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route("view_admin_mem1") }}" target="_self"><i class="icon-feather-user" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="{{ route("view_admin_mem1") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></a></li>


                            <li class=""><a href="mem2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退出会员</font></font></a></li>


                            <li class=""><a href="mem3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款申请详情</font></font></a></li>


                            <li class=""><a href="mem4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款使用记录</font></font></a></li>


                            <li class=""><a href="mem5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折自动支票</font></font></a></li>


                            <li class=""><a href="mem6.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></a></li>


                            <li class=""><a href="mem7.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册管理</font></font></a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_n1') }}" target="_self"><i class="icon-feather-list" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告管理</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="n-1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告设置</font></font></a></li>


                                <li class=""><a href="n-2.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询</font></font></a></li>

                                <li class=""><a href="n-3.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></a></li>

                                <li class=""><a href="n-4.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务咨询/建议</font></font></a></li>

                                <li class=""><a href="n-5.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT</font></font></a></li>

                                <li class=""><a href="n-6.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论</font></font></a></li>

                                <li class=""><a href="n-7.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题 (FAQ)</font></font></a></li>
                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_mp1') }}" target="_self"><i class="icon-feather-monitor" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理主页</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="mp1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅管理</font></font></a></li>


                            <li class=""><a href="mp2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推荐产品管理</font></font></a></li>


                            <li class=""><a href="mp3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发时间管理</font></font></a></li>


                            <li class=""><a href="mp4.html" target="_self">信息管理</a></li>


                            <li class=""><a href="mp5.html" target="_self">EVENT管理</a></li>


                            <li class=""><a href="mp6.html" target="_self">弹窗管理</a></li>


                            <li class=""><a href="mp7.html" target="_self">页面管理</a></li>


                            <li class=""><a href="mp8.html" target="_self">邮件设置</a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_cop') }}" target="_self"><i class="icon-feather-tag" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券管理</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="cop.html" target="_self">优惠券明细</a></li>


                            <li class=""><a href="cop1.html" target="_self">EVENT优惠券</a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_sns1') }}" target="_self"><i class="icon-feather-mail" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理</font></font></a>
                        <ul class="deth2">


                            <li>
                                <a href="sns.html"> SMS 发送</a>
                            </li>

                            <li class=""><a href="sns1.html" target="_self">发送管理</a></li>


                            <li class=""><a href="sns2.html" target="_self">提示管理</a></li>


                            <li class=""><a href="sns3.html" target="_self">SNS内容管理</a></li>


                            <li class=""><a href="sns4.html" target="_self">积分明细</a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_set1') }}" target="_self"><i class="icon-feather-settings" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="set1.html" target="_self">会员等级管理</a></li>


                            <li class=""><a href="set2.html" target="_self">地址管理</a></li>


                            <li class=""><a href="set3.html" target="_self">运费管理</a></li>


                            <li class=""><a href="set4.html" target="_self">汇款账号管理</a></li>


                            <li class=""><a href="set5.html" target="_self">关闭税利率</a></li>


                            <li class=""><a href="set6.html" target="_self">适用利率</a></li>


                            <li class=""><a href="set7.html" target="_self">附加税管理</a></li>


                            <li class=""><a href="set8.html" target="_self">线路管理</a></li>


                            <li class=""><a href="set9.html" target="_self">品类管理</a></li>


                            <li class=""><a href="set10.html" target="_self">货运管理</a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_rack1') }}" target="_self"><i class="icon-feather-inbox" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="rack1.html" target="_self">RACK管理</a></li>


                            <li class=""><a href="rack2.html" target="_self">RACK使用</a></li>


                            <li class=""><a href="rack3.html" target="_self">RACK信息</a></li>

                            </ul></li>

                        <!--  -->
                        <li class=""><a href="{{ route('view_admin_od1') }}" target="_self"><i class="icon-feather-pie-chart" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理</font></font></a>
                        <ul class="deth2">


                            <li class=""><a href="od1.html" target="_self">订单统计</a></li>


                            <li class=""><a href="od2.html" target="_self">按按会员统计</a></li>


                            <li class=""><a href="od3.html" target="_self">操作员统计</a></li>


                            <li class=""><a href="od4.html" target="_self">操作员日志</a></li>

                            </ul></li>





                </ul>

            </div>
			<span class="clearFix">&nbsp;</span>
		</div>
	</div>

	<!-- body content start-->
	@yield('content')

    <!-- body content end-->
<br>
<table width="51%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="main/logo_02.png" ></td>
  </tr>
</table>


