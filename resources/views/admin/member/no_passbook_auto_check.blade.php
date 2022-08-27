
<!-- saved from url=(0076)http://ds2.areumsoft.co.kr/Admin/DpstCfm/DpstCfm_L.asp?gMnu1=102&gMnu2=10206 -->
<html class="no-js translated-ltr" lang="zh-CN"><!--<![endif]--><!--[if IE 6]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie6" lang="ko-KR"> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="ko-KR"> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9 ie8" lang="ko-KR"> <![endif]--><!--[if IE 9]> <html class="no-js lt-ie10 ie9" lang="ko-KR"> <![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

 	<title>世强物流管理系统</title>
	
	
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="./mem5_files/AdmReset.css">
	<link rel="stylesheet" type="text/css" href="./mem5_files/AdmCommon.css">
	<link rel="stylesheet" type="text/css" href="./mem5_files/AdmBoard.css">
	<link rel="stylesheet" type="text/css" href="./mem5_files/jquery-ui.css">
	<script type="text/javascript" src="./mem5_files/jquery.js.下载"></script>
	<script type="text/javascript" src="./mem5_files/jquery-ui.min.js.下载"></script>
	<script type="text/javascript" src="./mem5_files/Common.js.下载"></script>
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


</script><link type="text/css" rel="stylesheet" charset="UTF-8" href="./mem5_files/translateelement.css"></head>



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

				
				<li class="select2"><a href="mem5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折自动支票</font></font></a></li>

				
				<li class=""><a href="mem6.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></a></li>

				
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

				
				<li class=""><a href="set5.html" target="_self">관세청고시환율</a></li>

				
				<li class=""><a href="set6.html" target="_self">适用환율</a></li>

				
				<li class=""><a href="set7.html" target="_self">增值服务관리</a></li>

				
				<li class=""><a href="set8.html" target="_self">线路管理</a></li>

				
				<li class=""><a href="set9.html" target="_self"> 类目管理</a></li>

				
				<li class=""><a href="set10.html" target="_self">运单管理</a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="rack1.html" target="_self"><i class="icon-feather-inbox" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="rack1.html" target="_self">RACK管理</a></li>

				
				<li class=""><a href="rack2.html" target="_self">RACK使用管理</a></li>

				
				<li class=""><a href="rack3.html" target="_self">RACK日志</a></li>

				</ul></li>

			<!-- 대메뉴 -->
			<li class=""><a href="od1.html" target="_self"><i class="icon-feather-pie-chart" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理</font></font></a>
			<ul class="deth2">

		
				<li class=""><a href="od1.html" target="_self">订单统计</a></li>

				
				<li class=""><a href="od2.html" target="_self">按会员统计</a></li>

				
				<li class=""><a href="od3.html" target="_self">操作员统计</a></li>

				
				<li class=""><a href="od4.html" target="_self">操作员日志</a></li>

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

<script type="text/javascript" src="./mem5_files/DpstCfm_L.js.下载"></script>

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折自动支票</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 无存折自动查询</font></font></h4>
		</div>

		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- 좌측 레이어 -->
			<div style="width:55%;float:left;">

				<div class="search-board"> 

					<form name="frmSearch" id="frmSearch" method="get">
						<input type="hidden" name="gMnu1" id="gMnu1" value="102">
						<input type="hidden" name="gMnu2" id="gMnu2" value="10206">
						<input type="hidden" name="sGo" id="sGo" value="1">

					<table cellspacing="1">
					<tbody><tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">开始日期 ~ 结束日期</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成与否</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">储户</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格</font></font></th>
						<th></th>
					</tr>
					<tr>
						<td>
							<select name="sPageSize" id="sPageSize">
								<option value="10" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
<option value="35"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></option>
<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
<option value="45"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></option>
<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>

							</select>
						</td>
						<td>
							<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="2022-05-27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~ 
							</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="2022-05-27">
						</td>
						<td>
							<select name="sDpstStateCd">
								<option value="" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部的</font></font></option>
							
								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></option>
							
								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成</font></font></option>
							
								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人工处理</font></font></option>
							
								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">抓住</font></font></option>
							
								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消</font></font></option>
							
							</select>
						</td>
						<td>
							<select name="sCfmYn">
								<option value="" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部的</font></font></option>
								<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">不完整</font></font></option>
								<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成</font></font></option>
							</select>
						</td>
						<td>
							<input type="text" name="sAccNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
						</td>
						<td>
							<input type="text" name="sAccNm" maxlength="20" class="iptBox1 EnterKey" style="width:120px;" value="">
						</td>
						<td>
							<input type="text" name="sDpstAmt" maxlength="15" class="iptBox1 EnterKey" style="width:80px;" value="">
						</td>
						
						<td>
							<div class="">
								<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
								<span class="whGrnBtn ty2"><button type="button" class="txt" onClick="fnExcelDown();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下载 Excel</font></font></button></span> 
							</div>
						</td> 
					</tr>
					</tbody></table>

					</form>
					<!-- End 검색 폼 -->

				</div>


				<div class="notice-board">

					<table border="1">
					<colgroup>
					<col width="8%">
					<col width="10%">
					<col width="15%">
					<col width="12%">
					<col width="12%">
					<col width="9%">
					<col width="9%">
					<col width="15%">
					<col width="*">
					</colgroup>
					<tbody><tr> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款日期</font></font></th> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">储户</font></font></th>  
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格</font></font></th>  
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成与否</font></font></th> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理日期</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th> 
					</tr>
					<tr><td colspan="9" class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE。</font></font></td></tr>  
					</tbody></table>
				</div>

				<div class="pagDv">
					<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
					</div>
				</div>


			</div>


			<div id="dvSearch" style="width:44%;float:right;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
				※ 右：无存折的存款清单及存款申请
			</font></font></div>

			<p style="clear:both;"></p>


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


</div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./mem5_files/translate_24dp.png" width="20" height="20" alt="Google 翻译"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">原文</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">提供更好的翻译建议</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>