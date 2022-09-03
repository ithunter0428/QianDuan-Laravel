
<!-- saved from url=(0072)http://ds2.areumsoft.co/Admin/Member/Note_L.asp?gMnu1=102&gMnu2=10207 -->
<html class="no-js translated-ltr" lang="zh-CN"><!--<![endif]--><!--[if IE 6]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie6" lang="ko-KR"> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="ko-KR"> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9 ie8" lang="ko-KR"> <![endif]--><!--[if IE 9]> <html class="no-js lt-ie10 ie9" lang="ko-KR"> <![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

 	<title>世强物流管理系统</title>
	
	
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="./mem6_files/AdmReset.css">
	<link rel="stylesheet" type="text/css" href="./mem6_files/AdmCommon.css">
	<link rel="stylesheet" type="text/css" href="./mem6_files/AdmBoard.css">
	<link rel="stylesheet" type="text/css" href="./mem6_files/jquery-ui.css">
	<script type="text/javascript" src="./mem6_files/jquery.js.下载"></script>
	<script type="text/javascript" src="./mem6_files/jquery-ui.min.js.下载"></script>
	<script type="text/javascript" src="./mem6_files/Common.js.下载"></script>
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


</script><link type="text/css" rel="stylesheet" charset="UTF-8" href="./mem6_files/translateelement.css"></head>



<body style=""><div id="wrap">

	<div id="header">
		<div class="">
			<div id="top">
				<h1><!--a href="/admin/index.asp"--><a href="main.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">物流系统</font></font></a></h1>
				<div class="toggleBtn toggle-btn"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div id="userbox">
					<ul>
						<li><i class="icon-feather-arrow-down-right" aria-hidden="true"></i><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员登录</font></font></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询：</font></font><a href="n-2.html"><strong class="Box"><span id="TextQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询：</font></font><a href="m3.html"><strong class="Box"><span id="TextOrderQna" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38 件</font></font></span></strong></a></li>
						<li><i class="icon-feather-help-circle" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折付款：</font></font><a href="m1.html"><strong class="Box"><span id="TextPayment" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1个</font></font></span></strong></a></li>
						<li><i class="icon-feather-mail" aria-hidden="true"></i><a href="point.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信剩余积分：</font></font><strong class="Box2"><span id="TextSms" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11P</font></font></span></strong></a></li>
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
				<!--div class="expandBtn"  id="btn-fullscreen"><i class="fa fa-expand" aria-hidden="true"></i></div-->
				<div class="fr">

					<!--진행상황-->
					<!--div class="box5">
						<ul>

							<li><a href="">订单전체</a><a class="sysmessage-de">111</a></li>
						</ul>
					</div-->
					<!--//진행상황-->

				</div>
				
				<span class="clearFix">&nbsp;</span> 
			</div> 


			


<div class="gnb toggleMnu">

	<ul id="menu">
	

			<!-- 대메뉴 -->
			<li class=""><a href="main.html" target="_self"><i class="icon-feather-archive" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合机构管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="main.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有订单</font></font></a></li>

				
				<li class=""><a href="m1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款确认</font></font></a></li>

				
				<li class=""><a href="m2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE</font></font></a></li>

				
				<li class=""><a href="m3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class="select"><a href="mem1.html" target="_self"><i class="icon-feather-user" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="mem1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></a></li>

				
				<li class=""><a href="mem2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退出会员</font></font></a></li>

				
				<li class=""><a href="mem3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款申请详情</font></font></a></li>

				
				<li class=""><a href="mem4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款使用记录</font></font></a></li>

				
				<li class=""><a href="mem5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折自动支票</font></font></a></li>

				
				<li class="select2"><a href="mem6.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></a></li>

				
				<li class=""><a href="mem7.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册管理</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="n-1.html" target="_self"><i class="icon-feather-list" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="n-1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告设置</font></font></a></li>

				
					<li class=""><a href="n-2.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询</font></font></a></li>
				
					<li class=""><a href="n-3.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></a></li>
				
					<li class=""><a href="n-4.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务查询/建议</font></font></a></li>
				
					<li class=""><a href="n-5.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT</font></font></a></li>
				
					<li class=""><a href="n-6.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论</font></font></a></li>
				
					<li class=""><a href="n-7.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题 (FAQ)</font></font></a></li>
				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="mp1.html" target="_self"><i class="icon-feather-monitor" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理主页</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="mp1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅管理</font></font></a></li>

				
				<li class=""><a href="mp1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推荐产品管理</font></font></a></li>

				
				<li class=""><a href="mp3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发时间管理</font></font></a></li>

				
				<li class=""><a href="mp4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物信息管理</font></font></a></li>

				
				<li class=""><a href="mp5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT管理</font></font></a></li>

				
				<li class=""><a href="mp6.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">弹窗管理</font></font></a></li>

				
				<li class=""><a href="mp7.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页面管理</font></font></a></li>

				
				<li class=""><a href="mp8.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮件表格管理</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="cop.html" target="_self"><i class="icon-feather-tag" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="cop.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券列表</font></font></a></li>

				
				<li class=""><a href="cop1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动优惠券</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="sns1.html" target="_self"><i class="icon-feather-mail" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理</font></font></a>
			<ul class="deth2">

		
				<li>
					<a href="sns.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送短信</font></font></a>
				</li>
			
				<li class=""><a href="sns2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送提示明细</font></font></a></li>

				
				<li class=""><a href="sns2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SMS管理</font></font></a></li>

				
				<li class=""><a href="sns3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信文本管理</font></font></a></li>

				
				<li class=""><a href="sns4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">积分明细</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="set1.html" target="_self"><i class="icon-feather-settings" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="set1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级管理</font></font></a></li>

				
				<li class=""><a href="set2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域管理</font></font></a></li>

				
				<li class=""><a href="set3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费</font></font></a></li>

				
				<li class=""><a href="set4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款账户管理</font></font></a></li>

				
				<li class=""><a href="set5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关汇率</font></font></a></li>

				
				<li class=""><a href="set6.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">适用汇率</font></font></a></li>

				
				<li class=""><a href="set7.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务管理</font></font></a></li>

				
				<li class=""><a href="set8.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">试点费用管理</font></font></a></li>

				
				<li class=""><a href="set9.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">物品管理</font></font></a></li>

				
				<li class=""><a href="set10.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单带宽管理</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="rack1.html" target="_self"><i class="icon-feather-inbox" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="rack1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></a></li>

				
				<li class=""><a href="rack2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架使用管理</font></font></a></li>

				
				<li class=""><a href="rack3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架信息日志</font></font></a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="od1.html" target="_self"><i class="icon-feather-pie-chart" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="od1.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单统计</font></font></a></li>

				
				<li class=""><a href="od2.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">按会员统计</font></font></a></li>

				
				<li class=""><a href="od3.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">按员工统计</font></font></a></li>

				
				<li class=""><a href="od4.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理日志</font></font></a></li>

				</ul></li>

	 
	
	

	</ul>

</div>

<script>
	$(function () {
		$('.toggleBtn').click(function () {
			$('.toggleMnu').toggle();
		});
	});

	// 인트라
	function fnIntra( ){
		
		var ClntCd = $(".IntraPop").find('a').attr('ClntCd');
		var ClntNm = $(".IntraPop").find('a').attr('ClntNm');
		fnPopWinCT('http://intra.areumsoft.co.kr/Client/Login.asp?ClientCode=' + ClntCd + '&ClientName=' + encodeURI(ClntNm), '系统管理', 1400, 950, 'Y');
	
	}
</script>


			<span class="clearFix">&nbsp;</span>
		</div>
	</div>




	<!-- body content start-->
	<div class="body-content left-M-0">
		<div class="conBox">

<script type="text/javascript" src="./mem6_files/Note_L.js.下载"></script>
<link rel="stylesheet" type="text/css" href="./mem6_files/jquery.qtip.min.css">
<script type="text/javascript" src="./mem6_files/jquery.qtip.min.js.下载"></script>

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 通知消息</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
		
			<div class="search-board"> 

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10207">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读与不读</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize" id="sPageSize">
							<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
<option value="20" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
<option value="35"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></option>
<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
<option value="45"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></option>
<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./mem6_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~ 
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./mem6_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<select name="sReadYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读取</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未读</font></font></option>
						</select>
					</td>
					<td>
						<input type="text" name="sOrderNo" id="sOrderNo" maxlength="15" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sSbj" id="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<input type="text" name="sCont" id="sCont" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Member/Note_W.asp&#39;, &#39;Note_W&#39;, 1200, 600);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送通知消息</font></font></button></span>
						</div>
					</td> 
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10207">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="15%">
				<col width="6%">
				<col width="*">
				<col width="12%">
				<col width="9%">
				<col width="9%">
				</colgroup>
				<tbody><tr> 
					<th class="alLeft padL1"><label><input type="checkbox" name="ckNOTE_SEQ_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckNOTE_SEQ_ALL&#39;, &#39;ckNOTE_SEQ&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发件人</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读取</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送日期</font></font></th>
				</tr>
				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="552"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">552</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500003</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;552&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22500003</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:20</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="551"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">551</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html?sOrderNo=22200017" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;551&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22200017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:19</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="550"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">550</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500042</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;550&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22500042</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:18</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="549"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">549</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;549&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:18</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="548"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">548</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;548&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22300009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="547"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">547</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400028</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;547&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22400028</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="546"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">546</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20400033</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;546&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：20400033</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-14 10:52
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12 20:02</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="545"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">545</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500008</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;545&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22500008</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-14 10:53
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-07 11:43</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="544"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">544</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;544&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22200017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:49
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 01:08</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="543"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">543</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300006</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;543&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">额外费用 - 订单号：22300006</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:49
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:39</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="542"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">542</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="10"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200006</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;542&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22200006</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:17</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="541"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">541</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="11"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;541&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:11</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="540"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">540</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="12"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400024</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;540&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用 - 订单号：22400024</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28 21:56</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="539"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">539</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="13"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400023</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;539&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400023</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:54</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="538"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">538</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="14"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;538&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:18</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="537"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">537</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="15"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20900007</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;537&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：20900007</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 10:53</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="536"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">536</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="16"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400020</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;536&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400020</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-27 09:36
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 09:19</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="535"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">535</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="17"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400020</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;535&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400020</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-27 09:36
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 09:17</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="534"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">534</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="18"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400019</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;534&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400019</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-26 15:31
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25 21:15</font></font></span></td>
				</tr>

				

				<tr> 
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="533"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">533</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="19"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400019</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;533&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400019</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25 21:15</font></font></span></td>
				</tr>

				  
				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="Status-change">		 
					<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnNoteDel_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>  
				</div> 
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 5);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 6);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 7);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 8);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 9);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 10);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 26);" title="最后的"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">515</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 第</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页/ 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span>
				</div>
			</div>

			

		</div>


	</div>

</div>


		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>

	

    <!-- body content end-->

<!--2script type="text/javascript" src="/Library/Js/full_screen.js"></script-->


