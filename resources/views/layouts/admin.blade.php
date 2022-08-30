<!-- saved from url=(0051)/admin/main.html -->
<html class="no-js translated-ltr" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>世强物流管理系统</title>
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmReset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmCommon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmBoard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/translateelement.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/jquery.qtip.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/DataTables/datatables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/jQueryModal/jquery.modal.min.css') }}" />
    @yield('globalStyles')

    <style>
    </style>
    @yield('pageStyles')

    <script type="text/javascript" src="{{ asset('/admin_files/layout/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_files/layout/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_files/layout/Common.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_files/layout/jquery.qtip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/plugin/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/plugin/jQueryModal/jquery.modal.min.js') }}"></script>
    @yield('globalScripts')

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
	@yield('pageScripts')
</head>

<body style="">
<div id="wrap">
	<div id="header">
		<div class="">
			<div id="top">
				<h1><a href="{{ route("admin.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">物流系统</font></font></a></h1>
				<div class="toggleBtn toggle-btn"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div id="userbox">
					<ul>
						<li><i class="icon-feather-arrow-down-right" aria-hidden="true"></i><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员登录</font></font></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询：</font></font><a href="n-2.html"><strong class="Box"><span id="TextQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询：</font></font><a href="m3.html"><strong class="Box"><span id="TextOrderQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折付款：</font></font><a href="m1.html"><strong class="Box"><span id="TextPayment" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1个</font></font></span></strong></a></li>
						<li><i class="icon-feather-mail" aria-hidden="true"></i><a href="sns1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信剩余积分：</font></font><strong class="Box2"><span id="TextSms" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11P</font></font></span></strong></a></li>
						<li><i class="icon-feather-settings" aria-hidden="true"></i>
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Member/MyAdm_W.asp?sKind=M&amp;sMemCode=412&#39;, &#39;MyAdm_W&#39;, 700, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑信息</font></font></a>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;|&nbsp;</font></font>
                            <a href="{{ route('logout') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登出</font></font></a>
						</li>
					</ul>
				</div>
				<div class="language">
					<select name="sLangCd" onChange="fnLanChange(this.value);">
						<option value="CN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CHINESE</font></font></option>
					</select>
				</div>
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
                    <!-- 综合管理 / Comphrehensive Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/main") ? 'select' : '' }}">
                        <a href="{{ route("admin.main.home") }}" target="_self"><i class="icon-feather-archive" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/main/order") ? 'select2' : ''}}"><a href="{{ route("admin.main.order.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有订单</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/main/payment") ? 'select2' : ''}}"><a href="{{ route("admin.main.payment.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付确认</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/main/no_data") ? 'select2' : ''}}"><a href="{{ route("admin.main.no_data.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/main/order_chat") ? 'select2' : ''}}"><a href="{{ route("admin.main.order_chat.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单咨询</font></font></a></li>
                        </ul>
                    </li>

                    <!-- 会员管理 / Member Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/member") ? 'select' : '' }}">
                        <a href="{{ route("admin.member.home") }}" target="_self"><i class="icon-feather-user" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/member/list") ? 'select2' : ''}}"><a href="{{ route("admin.member.list.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/member/out_list") ? 'select2' : ''}}"><a href="{{ route("admin.member.out_list.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退出会员</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/member/deposit_req") ? 'select2' : ''}}"><a href="{{ route("admin.member.deposit_req.home") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款申请详情</font></font></a></li>
                            <li class=""><a href="{{ route("admin.member.view_deposit_use") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款使用记录</font></font></a></li>
                            <li class=""><a href="{{ route("admin.member.view_deposit_without_passbook") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折自动支票</font></font></a></li>
                            <li class=""><a href="{{ route("admin.member.view_notification_message") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></a></li>
                            <li class=""><a href="{{ route("admin.member.view_reg") }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册管理</font></font></a></li>
                        </ul>
                    </li>

                    <!-- 公告管理 / Announcement Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/announcement") ? 'select' : '' }}">
                        <a href="{{ route('admin.announcement.home') }}" target="_self"><i class="icon-feather-list" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/setting") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.setting.home') }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告设置</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/consultation") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.consultation.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/announcement") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.announcement.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/service_inquire") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.service_inquire.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务咨询/建议</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/event") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.event.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/comment") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.comment.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/announcement/faq") ? 'select2' : ''}}"><a href="{{ route('admin.announcement.faq.home') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题 (FAQ)</font></font></a></li>
                        </ul>
                    </li>

                    <!-- 管理主页 / Admin Home -->
                    <li class="{{ strrpos(Request::url(), "/admin/management") ? 'select' : '' }}">
                        <a href="{{ route('admin.management.home') }}" target="_self"><i class="icon-feather-monitor" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理主页</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/management/banner") ? 'select2' : ''}}"><a href="{{ route('admin.management.banner.home') }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅管理</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/recom_pro") ? 'select2' : ''}}"><a href="{{ route('admin.management.recom_pro.home') }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推荐产品管理</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/departure") ? 'select2' : ''}}"><a href="{{ route('admin.management.departure.home') }}" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发时间管理</font></font></a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/shop_site") ? 'select2' : ''}}"><a href="{{ route('admin.management.shop_site.home') }}" target="_self">信息管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/event") ? 'select2' : ''}}"><a href="{{ route('admin.management.event.home') }}" target="_self">EVENT管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/popup") ? 'select2' : ''}}"><a href="{{ route('admin.management.popup.home') }}" target="_self">弹窗管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/page") ? 'select2' : ''}}"><a href="{{ route('admin.management.page.home') }}" target="_self">页面管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/management/mail_form") ? 'select2' : ''}}"><a href="{{ route('admin.management.mail_form.home') }}" target="_self">邮件设置</a></li>
                        </ul>
                    </li>

                    <!-- 优惠券管理 / Coupon Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/coupon") ? 'select' : '' }}">
                        <a href="{{ route('admin.coupon.home') }}" target="_self"><i class="icon-feather-tag" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/coupon/list") ? 'select2' : ''}}"><a href="{{ route('admin.coupon.list.home') }}" target="_self">优惠券明细</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/coupon/event") ? 'select2' : ''}}"><a href="{{ route('admin.coupon.event.home') }}" target="_self">EVENT优惠券</a></li>
                        </ul>
                    </li>

                    <!-- 短信管理 / SMS Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/sms") ? 'select' : '' }}">
                        <a href="{{ route('admin.sms.home') }}" target="_self"><i class="icon-feather-mail" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/sms/text") ? 'select2' : ''}}"><a href="{{ route('admin.sms.text.home') }}"> SMS 发送</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/sms/send") ? 'select2' : ''}}"><a href="{{ route('admin.sms.send.home') }}" target="_self">发送管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/sms/set_etc") ? 'select2' : ''}}"><a href="{{ route('admin.sms.set_etc.home') }}" target="_self">提示管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/sms/cont") ? 'select2' : ''}}"><a href="{{ route('admin.sms.cont.home') }}" target="_self">SNS内容管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/sms/point") ? 'select2' : ''}}"><a href="{{ route('admin.sms.point.home') }}" target="_self">积分明细</a></li>
                        </ul>
                    </li>

                    <!-- 环境设置 / Environment Settings -->
                    <li class="{{ strrpos(Request::url(), "/admin/environment") ? 'select' : '' }}">
                        <a href="{{ route('admin.environment.home') }}" target="_self"><i class="icon-feather-settings" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/environment/mem_grade") ? 'select2' : ''}}"><a href="{{ route('admin.environment.mem_grade.home') }}" target="_self">会员等级管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/center") ? 'select2' : ''}}"><a href="{{ route('admin.environment.center.home') }}" target="_self">地址管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/dlv_free") ? 'select2' : ''}}"><a href="{{ route('admin.environment.dlv_free.home') }}" target="_self">运费管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/bank_acc") ? 'select2' : ''}}"><a href="{{ route('admin.environment.bank_acc.home') }}" target="_self">汇款账号管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/exg_rt") ? 'select2' : ''}}"><a href="{{ route('admin.environment.exg_rt.home') }}" target="_self">关闭税利率</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/app_exg_rt") ? 'select2' : ''}}"><a href="{{ route('admin.environment.app_exg_rt.home') }}" target="_self">适用利率</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/add_svc") ? 'select2' : ''}}"><a href="{{ route('admin.environment.add_svc.home') }}" target="_self">附加税管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/island_fee") ? 'select2' : ''}}"><a href="{{ route('admin.environment.island_fee.home') }}" target="_self">线路管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/ctms_item") ? 'select2' : ''}}"><a href="{{ route('admin.environment.ctms_item.home') }}" target="_self">品类管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/environment/ivc_band_wh") ? 'select2' : ''}}"><a href="{{ route('admin.environment.ivc_band_wh.home') }}" target="_self">货运管理</a></li>
                        </ul>
                    </li>

                    <!-- 机架管理 / Rack Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/rack") ? 'select' : '' }}">
                        <a href="{{ route('admin.rack.home') }}" target="_self"><i class="icon-feather-inbox" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/rack/management") ? 'select2' : ''}}"><a href="{{ route('admin.rack.management.home') }}" target="_self">RACK管理</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/rack/use") ? 'select2' : ''}}"><a href="{{ route('admin.rack.use.home') }}" target="_self">RACK使用</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/rack/log") ? 'select2' : ''}}"><a href="{{ route('admin.rack.log.home') }}" target="_self">RACK信息</a></li>
                        </ul>
                    </li>

                    <!-- 统计管理 / Statistics Management -->
                    <li class="{{ strrpos(Request::url(), "/admin/statistics") ? 'select' : '' }}">
                        <a href="{{ route('admin.statistics.home') }}" target="_self"><i class="icon-feather-pie-chart" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理</font></font></a>
                        <ul class="deth2">
                            <li class="{{ strrpos(Request::url(), "/admin/statistics/order") ? 'select2' : '' }}"><a href="{{ route('admin.statistics.order.home') }}" target="_self">订单统计</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/statistics/member") ? 'select2' : '' }}"><a href="{{ route('admin.statistics.member.home') }}" target="_self">按按会员统计</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/statistics/employee") ? 'select2' : '' }}"><a href="{{ route('admin.statistics.employee.home') }}" target="_self">操作员统计</a></li>
                            <li class="{{ strrpos(Request::url(), "/admin/statistics/log") ? 'select2' : '' }}"><a href="{{ route('admin.statistics.log.home') }}" target="_self">操作员日志</a></li>
                        </ul>
                    </li>
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
            {{-- <td><img src="{{ asset('/admin_files/layout/logo_02.png') }}" ></td> --}}
            <td><img src="{{ asset('/admin_files/layout/logo_01.png') }}" ></td>
        </tr>
    </table>
</div>
</body>
