@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/main/Order_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
    <div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有订单</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单管理 &gt; 所有订单</font></font></h4>
		</div>

		<!-- B: 订单 -->
		<div class="stat-board3">


			<div class="step_box">
				<h3><i class="icon-feather-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购代理</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">采购报价
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						11
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						6
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						46
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买完成
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2
						</font></font></span></a>
					</li>

					</ul>
				</div>


			<div class="step_box">
				<h3><i class="icon-feather-truck"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">临时保存
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						78
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">接待申请
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						49
						</font></font></span></a>
					</li>

					</ul>
				</div>


			<div class="step_box">
				<h3><i class="icon-feather-log-out"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">进出</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库中
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						31
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						6
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						31
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待发货
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						23
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付完成
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						83
						</font></font></span></a>
					</li>

					</ul>
				</div>


			<div class="step_box">
				<h3><i class="icon-feather-x-circle"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">错误</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库错误
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						29
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">忽略错误
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						0
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保留出库
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						4
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消申请
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						55
						</font></font></span></a>
					</li>

					</ul>
				</div>


			<div class="step_box">
				<h3><i class="icon-feather-refresh-cw"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货管理</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货申请
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						15
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						0
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						11
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成退货
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						5
						</font></font></span></a>
					</li>

					</ul>
				</div>


			<div class="step_box">
				<h3><i class="icon-feather-package"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存管理</font></font></h3>
				<ul>



					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总库存
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						60
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请求库存
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						16
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						13
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可以使用
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						28
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">缺货
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						3
						</font></font></span></a>
					</li>


					<li class="">
						<a href="{{ route("admin.main.home") }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存发货明细
						</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						71
						</font></font></span></a>
					</li>
	</ul></div>
</div>

		<div class="inBtnBox">
			<!--a href="javascript:" class="fl toggle_open toggleB"><i class="fa fa-chevron-down" aria-hidden="true"></i> open</a-->
			<div class="fl">
				<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnOrdSkan();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">磨损扫描</font></font></button></span>
			</div>
			<div class="fr">
				<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnLabelPrt_S();" title="收据标签打印"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收据标签打印</font></font></button></span>

			<!---->


			</div>
		</div>

		<!-- E: 订单 -->


		<div class="box-container corners02"><!-- Begin -->


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" value="101">
				<input type="hidden" name="gMnu2" value="10101">
				<input type="hidden" name="sGo" value="1">

			<div class="search-board">
				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单状态</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发货方式</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存状况</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">接收者</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品编号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">店铺订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">接收者</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize">
							<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
<option value="20" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
<option value="60"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60</font></font></option>
<option value="70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">70</font></font></option>
<option value="80"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">80</font></font></option>
<option value="90"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90</font></font></option>
<option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>

						</select>
					</td>
					<td>
						<select name="sSendCenterSeq" class="wh80">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]威海</font></font></option>

								<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]青岛</font></font></option>

								<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国] 广州</font></font></option>

						</select>
					</td>
					<td>
						<select name="sStateSeq" class="wh100">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<optgroup label="[代理购买]">
								<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">采购报价</font></font></option>

								<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款</font></font></option>

								<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></option>

								<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买完成</font></font></option>
							</optgroup><optgroup label="[代理货运]">
								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">临时保存</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">接待申请</font></font></option>
							</optgroup><optgroup label="[入/出库] ">
								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库中</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款</font></font></option>

								<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></option>

								<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待发货</font></font></option>

								<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付完成</font></font></option>
							</optgroup><optgroup label="[错误]">
								<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库错误</font></font></option>

								<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">忽略错误</font></font></option>

								<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保留出库</font></font></option>

								<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消申请</font></font></option>
							</optgroup><optgroup label="[退货管理]">
								<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货申请</font></font></option>

								<option value="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款</font></font></option>

								<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></option>

								<option value="21"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成退货</font></font></option>
							</optgroup><optgroup label="[库存管理]">
								<option value="27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总库存</font></font></option>

								<option value="22"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请求库存</font></font></option>

								<option value="23"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></option>

								<option value="24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可以使用</font></font></option>

								<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">缺货</font></font></option>

								<option value="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存发货明细</font></font></option>

						</optgroup></select>
					</td>
					<td>
						<select name="sReqDvsCd" class="wh80">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购代理</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></option>

						</select>
					</td>
					<td>
						<select name="sDlvrWayCd" class="wh80">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航空公司</font></font></option>

						</select>
					</td>
					<td>
						<select name="sSvcDvsCd" class="wh80">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">自动付款</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人工支付</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:70px;" value="2021-11-26"><img src="./main_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:70px;" value="2022-05-26"><img src="./main_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<select name="sWareStateCd" class="wh80">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预计会入库者</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">部分到达</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey wh80" value="">
					</td>
					<td>
						<input type="text" name="sPostNo" id="sPostNo" maxlength="15" class="iptBox1 EnterKey wh80" value="">
					</td>
					<td>
						<input type="text" name="sConsNmKr" id="sConsNmKr" maxlength="40" class="iptBox1 EnterKey wh80" value="">
					</td>
					<td>
						<input type="text" name="sProNo" id="sProNo" maxlength="10" class="iptBox1 EnterKey wh80" value="">
					</td>
					<td>
						<input type="text" name="sTrkNo" id="sTrkNo" maxlength="40" class="iptBox1 EnterKey wh120" value="">
					</td>
					<td>
						<input type="text" name="sShopOrderNo" id="sShopOrderNo" maxlength="40" class="iptBox1 EnterKey wh100" value="">
					</td>
					<td>
						<input type="text" name="sOrderNo" id="sOrderNo" maxlength="8" class="iptBox1 EnterKey wh80" value="">
					</td>
					<td>
						<input type="text" name="sIvcNo" id="sIvcNo" maxlength="40" class="iptBox1 EnterKey wh130" value="">
					</td>
					<td>
						<select name="sCmtsDvsCd">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人的</font></font></option>
							<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商人</font></font></option>
						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<!--span class="whGraBtn_bg ty2"><button type="button" class="txt" OnClick="fnSearch('frmSearch', '1');">엑셀다운로드</button></span-->
						</div>
					</td>
				</tr>
				</tbody></table>
				<!-- End -->
			</div>

			</form>



			<div class="notice-board">

				<form name="frmList" id="frmList">

				<table border="1">
				<colgroup>
                    <col width="6%">
					<col width="6%">
                    <col width="7%">
                    <col width="5%">
                    <col width="4%">
                    <col width="6%">
                    <col width="8%">
                    <col width="8%">
                    <col width="7%">
                    <col width="6%">
                    <col width="10%">
				</colgroup>
				<tbody><tr>
					<th><label><input type="checkbox" name="ckORDER_NO_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckORDER_NO_ALL&#39;, &#39;ckORDER_NO&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用分类</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输方式</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交货状态</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员姓名</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收件人</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">以前的订单号</font></font></th>
					<th><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收到</font><font style="vertical-align: inherit;">的曲目数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总量</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">_</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款金额（重量）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号 发货</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存状态</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">进度状态</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>


				<tr>
					<!-- 订单号 -->
					<td class="alCenter vm_top listBtn" rowspan="2">
						<label class=""><input type="checkbox" name="ckORDER_NO" value="22200017"> <span class="bold shOrderNo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200017</font></font></span>
						</label><br>
						<span class="whChaBtn_bg Mtop">
							<button type="button" class="txt BtnProView" orderno="22200017" title="查看产品"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</span>

						<p style="margin-top:8px;">
							<span class="whBlackBtn">
								<button type="button" class="txt" ><a href="m4.html" target="_self">详细订单</button>
							</span>
							<span class="whGrnBtn">
								<button type="button" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单日志</font></font></button>
							</span>
						</p>
					</td>

					<!--  -->
					<td class="alCenter">
						<span class="grey1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州/空运</font></font></span><br>
						<span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人工支付</font></font></span>
					</td>

					<!--  -->
					<td class="alCenter">
						<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28) Arum</font></font></span></a><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">解决方案</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（个人/不一致）
					</font></font></td>

					<!-- 订单号 -->
					<td class="alCenter">

					</td>

					<!-- /入库수 -->
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 </font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
					</td>

					<!--  -->
					<td class="alRight">
						<span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / </font></font><span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥153.00</font></font></span><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

							($22.34)

					</font></font></td>

					<!--  -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Payment/OrderCharge_S.asp?sOrderNo=22200017&amp;sChargeSeq=504&#39;, &#39;OrderCharge_S&#39;, 700, 450);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用（已付款）￦89,004</font></font></span></a>

					</td>

					<!--  -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnKrDlvrSearch(&#39;&#39;);"><span class="bold shIvcNo"></span></a><br>
						<span class="grey1"></span>

							<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装数量：1
					</font></font></td>

					<!-- 入库/订单 -->
					<td class="alCenter">
						<span id="vwSTATE_NM_22200017" style="color:#3366ff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></span>
					</td>

					<!-- -->
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-02-23 15:11 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-26 12:19
					</font></font></td>

					<!--  -->
					<td rowspan="2" class="vm_top listBtn">

						<!-- 复制订单 -->


							<span class="whGrnBtn">
								<button type="button" class="txt" onClick="fnOrderCopy_M(&#39;22200017&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">复制订单</font></font></button>
							</span>



						<!-- 分发/集中 : -->

							<span class="whGraBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderBundle_W.asp?sOrderNo=22200017&#39;, &#39;OrderBundle_W&#39;, 1200, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">捆</font></font></button>
							</span>



						<!-- -->


						<!--span class="whGraBtn">
							<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Member/Note_W.asp?sOrderNo=22200017&sMemCode=41', 'Note_W', 1200, 600);">쪽지</button>
						</span-->
						<span class="whGraBtn">
							<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderChatPop_S.asp?sOrderNo=22200017&amp;sChatSeq=0&#39;, &#39;OrderChatPop_S&#39;, 1000, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询</font></font></button>
						</span>


							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnProTotalCan(&#39;22200017&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全额退款</font></font></button>
							</span>

							<span class="whVoBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderCharge_W.asp?sOrderNo=22200017&amp;sChargeCd=1&#39;, &#39;OrderCharge_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费</font></font></button>
							</span>


						<!--  -->

							<span class="whGraBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/IvcNo_W.asp?sOrderNo=22200017&#39;, &#39;IvcNo_W&#39;, 400, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单确认</font></font></button>
							</span>


						<!--
						-->


						<!-- 分发运单号 -->
						<!-- 2022.03.30 : ->

								<span class="whGraBtn">
									<button type="button" class="txt" onClick="fnOrderIvcAuto_I(&#39;II&#39;, &#39;22200017&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单签发</font></font></button>
								</span>


						<!--

						-->

						<!-- 2021.04.01 : : 通关浏览 -->

							<!--span class="whGrnBtn">
								<button type="button" class="txt" OnClick="alert();"></button>
							</span-->


						<p style="margin-top:5px;">
							<select name="O_STATE_SEQ" orgstateseq="4" class="vm" onChange="fnOrderStateOne_M($(this), &#39;22200017&#39;);">
								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库完成</font></font></option>

									<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[传入/传出] 进行中</font></font></option>

									<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[错误] 错误到达</font></font></option>

									<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[错误] 待发货</font></font></option>

							</select>
						</p>



					</td>
				</tr>
				<tr>
					<td colspan="9" class="listBtn">
						<ul class="tInBox">
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:
								</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一般检查</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">精密检查</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">鞋盒去除</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收据和标签去除</font></font></span>

							</li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">: 这是 系统 测试订单。</font></font></li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">：
								</font></font><input type="text" name="H_M1" maxlength="100" class="red1 bBox" value="" style="display:none;">
								<input type="text" name="ADM_MEMO_22200017" maxlength="100" class="red1 bBox" value="测试内容">
								<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnMngMemo_M(&#39;22200017&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button></span>
							</li>
						</ul>
						<div id="vwPro_22200017" class="order-pro"></div>
					</td>
					<!--td>
						<span class="bold">
						 <select name="BoxCnt22200017" id="BoxCnt22200017" onchange="fnBoxCnt('22200017');">
								<option value="1" selected>1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
							  </select>
							</span>
					</td-->
				</tr>
				<tr><td colspan="11" class="line"></td></tr>



				<tr>
					<!-- 订单号 -->
					<td class="alCenter vm_top listBtn" rowspan="2">
						<label class=""><input type="checkbox" name="ckORDER_NO" value="22400028"> <span class="bold shOrderNo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400028</font></font></span>
						</label><br>
						<span class="whChaBtn_bg Mtop">
							<button type="button" class="txt BtnProView" orderno="22400028" title="查看产品"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</span>

						<p style="margin-top:8px;">
							<span class="whBlackBtn">
								<button type="button" class="txt" ><a href="m4.html" target="_self">详细订单</button>
							</span>
							<span class="whGrnBtn">
								<button type="button" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单日志</font></font></button>
							</span>
						</p>
					</td>

					<!-- -->
					<td class="alCenter">
						<span class="grey1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">/</font></font></span><br>
						<span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人工支付运费</font></font></span>
					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（SP28）</font></font></span></a><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">红沙</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（操作员/）
					</font></font></td>

					<!-- 订单号 -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderPre_S.asp?sPreSeq=272&amp;sOrderNo=21900006&#39;, &#39;OrderPre_S&#39;, 1400, 650);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21900006 </font></font></a>
						<br><a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderPre_S.asp?sPreSeq=271&amp;sOrderNo=22400026&#39;, &#39;OrderPre_S&#39;, 1400, 650);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400026</font></font></a>

					</td>

					<!-- 入库수 -->
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 </font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span>
					</td>

					<!-- -->
					<td class="alRight">
						<span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2562</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / </font></font><span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥6,331.00</font></font></span><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

							($924.23)

					</font></font></td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Payment/OrderCharge_S.asp?sOrderNo=22400028&amp;sChargeSeq=537&#39;, &#39;OrderCharge_S&#39;, 700, 450);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费（已付款）￦53,702</font></font></span></a>
							<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">适用重量：1.00kg（实际重量：0.30kg）
					</font></font></td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnKrDlvrSearch(&#39;928400065&#39;);"><span class="bold shIvcNo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400065</font></font></span></a><br>
						<span class="grey1"></span>

							<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装数量：1
					</font></font></td>

					<!-- 入库/订单 -->
					<td class="alCenter">
						<span id="vwSTATE_NM_22400028" style="color:#3366ff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交货完成</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>
					</td>

					<!-- -->
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-29 00:35 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-26 12:18
					</font></font></td>

					<!-- -->
					<td rowspan="2" class="vm_top listBtn">

						<!-- 复制订单 -->


							<span class="whGrnBtn">
								<button type="button" class="txt" onClick="fnOrderCopy_M(&#39;22400028&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">复制订单</font></font></button>
							</span>



						<!-- 分发/集中 :  -->


						<!--  -->


						<!--span class="whGraBtn">
							<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Member/Note_W.asp?sOrderNo=22400028&sMemCode=41', 'Note_W', 1200, 600);">쪽지</button>
						</span-->
						<span class="whGraBtn">
							<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderChatPop_S.asp?sOrderNo=22400028&amp;sChatSeq=0&#39;, &#39;OrderChatPop_S&#39;, 1000, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询</font></font></button>
						</span>



						<!--  -->

							<span class="whGraBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/IvcNo_W.asp?sOrderNo=22400028&#39;, &#39;IvcNo_W&#39;, 400, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单确认</font></font></button>
							</span>


						<!-- -->


						<!-- 分发运单号 -->
						<!-- 2022.03.30 -->

								<span class="whGraBtn">
									<button type="button" class="txt" onClick="fnOrderIvcAuto_I(&#39;IH&#39;, &#39;22400028&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单补发</font></font></button>
								</span>


						<!--

							<span class="whGraBtn">
								<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Acting/IvcNoPrt_S.asp?sOrderNo=22400028', 'IvcNoPrt_S', 850, 500);">운송장출력</button>
							</span>

						-->

						<!-- 2021.04.01 : : 通关浏览 -->

							<span class="whBlackBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Front/Acting/CtmsCheckNoLogin_S.asp?sIvcNo=928400065&#39;, &#39;CtmsCheck_S&#39;, 1000, 600);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关查询</font></font></button>
							</span>


						<p style="margin-top:5px;">
							<select name="O_STATE_SEQ" orgstateseq="6" class="vm" onChange="fnOrderStateOne_M($(this), &#39;22400028&#39;);">
								<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></option>

									<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[进货/出货] 等待发货</font></font></option>

									<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[进货/出货] 发货完成</font></font></option>

							</select>
						</p>



					</td>
				</tr>
				<tr>
					<td colspan="9" class="listBtn">
						<ul class="tInBox">
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:
								</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一般检验</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">精密检验</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">制盒</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装辅料</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">鞋盒拆卸</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服装盒拆卸</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收据和标签去除</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公司清关</font></font></span>

							</li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">： &nbsp;</font></font></li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">：
								</font></font><input type="text" name="H_M1" maxlength="100" class="red1 bBox" value="" style="display:none;">
								<input type="text" name="ADM_MEMO_22400028" maxlength="100" class="red1 bBox" value="">
								<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnMngMemo_M(&#39;22400028&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button></span>
							</li>
						</ul>
						<div id="vwPro_22400028" class="order-pro"></div>
					</td>
					<!--td>
						<span class="bold">
						<select name="BoxCnt22400028" id="BoxCnt22400028" onchange="fnBoxCnt('22400028');">
								<option value="1" selected>1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
							  </select>
							</span>
					</td-->
				</tr>
				<tr><td colspan="11" class="line"></td></tr>



				<tr>
					<!-- 订单号 -->
					<td class="alCenter vm_top listBtn" rowspan="2">
						<label class=""><input type="checkbox" name="ckORDER_NO" value="22500042"> <span class="bold shOrderNo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500042</font></font></span>
						</label><br>
						<span class="whChaBtn_bg Mtop">
							<button type="button" class="txt BtnProView" orderno="22500042" title="查看产品"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</span>

						<p style="margin-top:8px;">
							<span class="whBlackBtn">
								<button type="button" class="txt" ><a href="m4.html" target="_self">详细订单</button>
							</span>
							<span class="whGrnBtn">
								<button type="button" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单日志</font></font></button>
							</span>
						</p>
					</td>

					<!-- -->
					<td class="alCenter">
						<span class="grey1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州/空运</font></font></span><br>
						<span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人工支付</font></font></span>
					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28) Arum</font></font></span></a><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">解决方案</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（个人/不一致）
					</font></font></td>

					<!-- 订单号 -->
					<td class="alCenter">

					</td>

					<!-- 入库 -->
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 </font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span>
					</td>

					<!-- -->
					<td class="alRight">
						<span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / </font></font><span class="bold red1 ft_13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥408.00</font></font></span><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

							($59.56)

					</font></font></td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Payment/OrderCharge_S.asp?sOrderNo=22500042&amp;sChargeSeq=540&#39;, &#39;OrderCharge_S&#39;, 700, 450);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用（未存入）￦89,108</font></font></span></a>

					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnKrDlvrSearch(&#39;&#39;);"><span class="bold shIvcNo"></span></a><br>
						<span class="grey1"></span>

							<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装数量：1
					</font></font></td>

					<!-- 入库/订单 -->
					<td class="alCenter">
						<span id="vwSTATE_NM_22500042" style="color:#aaaaaa;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待</font></font></span><br>
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款</font></font></span>
					</td>

					<!--  -->
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-18 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						16:09 2022-05-26 12:18
					</font></font></td>

					<!-- -->
					<td rowspan="2" class="vm_top listBtn">

						<!-- 复制订单 -->


							<span class="whGrnBtn">
								<button type="button" class="txt" onClick="fnOrderCopy_M(&#39;22500042&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">复制订单</font></font></button>
							</span>



						<!-- 分发/集中 : -->


						<!-- -->


						<!--span class="whGraBtn">
							<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Member/Note_W.asp?sOrderNo=22500042&sMemCode=41', 'Note_W', 1200, 600);">쪽지</button>
						</span-->
						<span class="whGraBtn">
							<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderChatPop_S.asp?sOrderNo=22500042&amp;sChatSeq=0&#39;, &#39;OrderChatPop_S&#39;, 1000, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单查询</font></font></button>
						</span>


							<span class="whVoBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderCharge_W.asp?sOrderNo=22500042&amp;sChargeCd=2&#39;, &#39;OrderCharge_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></button>
							</span>


						<!-- -->

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnCharge_D(&#39;540&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用重置</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnPaymentBank_I(&#39;22500042&#39;, &#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用存折处理</font></font></button>
							</span>


						<!-- -->


						<!-- 分发运单号  -->
						<!-- 2022.03.30 : -->


						<!-- -->

						<!-- 2021.04.01 : : 通关浏览 -->


						<p style="margin-top:5px;">
							<select name="O_STATE_SEQ" orgstateseq="15" class="vm" onChange="fnOrderStateOne_M($(this), &#39;22500042&#39;);">
								<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等待付款</font></font></option>

									<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[错误] 取消申请</font></font></option>

							</select>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="9" class="listBtn">
						<ul class="tInBox">
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:
								</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一般检查</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">精密检查</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">鞋盒去除</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								,</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收据和标签去除</font></font></span>

							</li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">: 这是 系统 测试订单。</font></font></li>
							<li><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员备注</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">：
								</font></font><input type="text" name="H_M1" maxlength="100" class="red1 bBox" value="" style="display:none;">
								<input type="text" name="ADM_MEMO_22500042" maxlength="100" class="red1 bBox" value="">
								<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnMngMemo_M(&#39;22500042&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button></span>
							</li>
						</ul>
						<div id="vwPro_22500042" class="order-pro"></div>
					</td>
					<!--td>
						<span class="bold">
						<select name="BoxCnt22500042" id="BoxCnt22500042" onchange="fnBoxCnt('22500042');">
								<option value="1" selected>1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
							  </select>
							</span>
					</td-->
				</tr>
				<tr><td colspan="11" class="line"></td></tr>



				<tr>



				<tr>
					<!-- 订单号 -->
					<td class="alCenter vm_top listBtn" rowspan="2">
						<label class=""><input type="checkbox" name="ckORDER_NO" value="22300009"> <span class="bold shOrderNo">22300009</span>
						</label><br>
						<span class="whChaBtn_bg Mtop">
							<button type="button" class="txt BtnProView" orderno="22300009" title="详细订单"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</span>

						<p style="margin-top:8px;">
							<span class="whBlackBtn">
								<button type="button" class="txt" ><a href="m4.html" target="_self">详细订单</button>
							</span>
							<span class="whGrnBtn">
								<button type="button" class="txt" >订单日志</button>
							</span>
						</p>
					</td>

					<!-- -->
					<td class="alCenter">
						<span class="grey1 bold">代理货运</span><br>
						<span class="bold">威海 / 海运</span><br>
						<span class="bold red1">手动支付</span>
					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="5"><span class="bold">测试 (SP28)</span></a><br>
						<span class="bold">测试ID名称2</span> (公司/)
					</td>

					<!-- 订单号 -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderPre_S.asp?sPreSeq=251&amp;sOrderNo=21900006&#39;, &#39;OrderPre_S&#39;, 1400, 650);">21900006</a>

					</td>

					<!-- /入库 -->
					<td class="alCenter">
						<span class="bold">1</span><br>
						<span class="bold">1</span>
					</td>

					<!--  -->
					<td class="alRight">
						<span class="bold red1 ft_13">1</span> / <span class="bold red1 ft_13">￥120.00</span><br>

							(＄17.52)

					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Payment/OrderCharge_S.asp?sOrderNo=22300009&amp;sChargeSeq=538&#39;, &#39;OrderCharge_S&#39;, 700, 450);"><span class="bold">国际 发货费用 (完成支付) ￦26,500</span></a>
							<br>重量 : 1.00kg( 实际重量 : 0.20kg)
					</td>

					<!-- -->
					<td class="alCenter">
						<a href="javascript:" onClick="fnKrDlvrSearch(&#39;928400021&#39;);"><span class="bold shIvcNo">928400021</span></a><br>
						<span class="grey1"></span>

							<br>包装数量: 1
					</td>

					<!-- 入库/订单 -->
					<td class="alCenter">
						<span id="vwSTATE_NM_22300009" style="color:#3366ff;">完成入库</span><br>
						<span class="bold">完成支付</span>
					</td>

					<!-- -->
					<td class="alCenter">
						2022-03-17 16:41<br>
						2022-05-26 12:10
					</td>

					<!-- -->
					<td rowspan="2" class="vm_top listBtn">

						<!-- 复制订单 -->


							<span class="whGrnBtn">
								<button type="button" class="txt" onClick="fnOrderCopy_M(&#39;22300009&#39;);">复制订单</button>
							</span>



						<!-- 分发/集中 : -->


						<!-- -->


						<!--span class="whGraBtn">
							<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Member/Note_W.asp?sOrderNo=22300009&sMemCode=41', 'Note_W', 1200, 600);">쪽지</button>
						</span-->
						<span class="whGraBtn">
							<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/OrderChatPop_S.asp?sOrderNo=22300009&amp;sChatSeq=0&#39;, &#39;OrderChatPop_S&#39;, 1000, 800);">订单咨询</button>
						</span>



						<!-- -->

							<span class="whGraBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Acting/IvcNo_W.asp?sOrderNo=22300009&#39;, &#39;IvcNo_W&#39;, 400, 250);">运单号登记</button>
							</span>


						<!-- -->


						<!-- 分发运单号 -->
						<!-- 2022.03.30 -->

								<span class="whGraBtn">
									<button type="button" class="txt" onClick="fnOrderIvcAuto_I(&#39;IH&#39;, &#39;22300009&#39;);">重发运单号</button>
								</span>


						<!--
							<span class="whGraBtn">
								<button type="button" class="txt" OnClick="fnPopWinCT('/Admin/Acting/IvcNoPrt_S.asp?sOrderNo=22300009', 'IvcNoPrt_S', 850, 500);">운송장출력</button>
							</span>

						-->

						<!-- 2021.04.01 :  通关浏览 -->

							<span class="whBlackBtn">
								<button type="button" class="txt" onClick="fnPopWinCT(&#39;/Front/Acting/CtmsCheckNoLogin_S.asp?sIvcNo=928400021&#39;, &#39;CtmsCheck_S&#39;, 1000, 600);">通关浏览</button>
							</span>


						<p style="margin-top:5px;">
							<select name="O_STATE_SEQ" orgstateseq="6" class="vm" onChange="fnOrderStateOne_M($(this), &#39;22300009&#39;);">
								<option value="6">完成支付</option>

									<option value="7">[入/出库] 出库待定</option>

									<option value="8">[入/出库] 完成出库</option>

							</select>
						</p>



					</td>
				</tr>
				<tr>
					<td colspan="9" class="listBtn">
						<ul class="tInBox">
							<li><label>增值服务</label> :
								<span class="bold">公司清关</span>

							</li>
							<li><label>会员备注</label> : &nbsp;</li>
							<li><label>管理备注</label> :
								<input type="text" name="H_M1" maxlength="100" class="red1 bBox" value="" style="display:none;">
								<input type="text" name="ADM_MEMO_22300009" maxlength="100" class="red1 bBox" value="">
								<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnMngMemo_M(&#39;22300009&#39;);">确认</button></span>
							</li>
						</ul>
						<div id="vwPro_22300009" class="order-pro"></div>
					</td>
					<!--td>
						<span class="bold">
						<select name="BoxCnt22300009" id="BoxCnt22300009" onchange="fnBoxCnt('22300009');">
								<option value="1" selected>1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
							  </select>
							</span>
					</td-->
				</tr>
				<tr><td colspan="11" class="line"></td></tr>



				<tr>





				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="Status-change">

				</div>


				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">69</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> /
					 </font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
					 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
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

@endsection

