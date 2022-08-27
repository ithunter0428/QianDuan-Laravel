@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/main/Payment_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">
<div id="mid-col">
	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款确认</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单管理 &gt; 付款确认</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="101">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10103">
				<input type="hidden" name="sGo" id="sGo" value="1">

			<div class="search-board">
				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款方法</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索项目</font></font></th>
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
						<select name="sPaymentWayCd" id="sPaymentWayCd" title="分配">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">信用卡</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="">
					</td>
					<td>
						<select name="sPaymentYn" id="sPaymentYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>
							<option value="C"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付待定</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></option>
						</select>
					</td>
					<td>
						<input type="text" name="sPaymentSeq" maxlength="10" class="iptBox1 EnterKey" style="width:150px;" value="">
					</td>
					<td>
						<input type="text" name="sOrderNo" maxlength="8" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<select name="sCol" id="sCol">
							<option value="A"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></option>
							<option value="B"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员ID</font></font></option>
						</select>
					</td>
					<td>
						<input type="text" name="sKey" id="sKey" maxlength="40" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>
				<!-- End 검색 폼 -->
			</div>

			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="5%">
				<col width="8%">
				<col width="6%">
				<col width="7%">
				<col width="9%">
				<col width="10%">
				<col width="12%">
				<col width="6%">
				<col width="*">
				<col width="10%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请日期</font></font></th>
					<th class="num"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付费用</font></font></th>
					<th class="num"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款使用</font></font></th>
					<th class="num"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无银行账户金额</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款方式</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款日期</font></font></th>
					<th class="tit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">历史</font></font></th>
					<th>
							<select name="SMS_SEND_YN" id="SMS_SEND_YN">
									<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">不发送短信</font></font></option>
									<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信会员发送</font></font></option>
							</select>
					</th>

				</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">427</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦42,500</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦42,500</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500003</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Areum Kim) - 国际运费：￦42,500</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;427&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">426</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦53,702</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦53,702</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022052612180ED7</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400028</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Hongsa) - 国际运费：￦53,702</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;426&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">424</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦26,500</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦26,500</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-20220526121004B5</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300009</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Hongsa) - 国际运费：￦26,500</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;424&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">423</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-17</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦66,831</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦66,831</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-202205171656C12A</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500008</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（物流系统） - 购买费用：￦66,831</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;423&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">422</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦65,322</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦65,322</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20400033</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Hong Gil-dong) - 国际运费：￦65,322</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;422&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">421</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦89,108</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦89,108</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-20220429002153C0</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200006</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（物流系统） - 购买费用：￦89,108</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">420</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦3,234</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦3,234</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022042821574FEE</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400024</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (sda) - 退货费用：￦3,234</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">419</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦35,179</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦35,179</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022042715559157</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400023</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（新加坡收件人）-购买费用：￦ 35,179</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">418</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦150,176</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦150,176</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022042709207FE6</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400020</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（新加坡收件人）-购买费用：￦150,176</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">417</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦19,636</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦19,636</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-20220425211807A5</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400019</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（新加坡收件人）-购买费用：￦19,636</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;417&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">416</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="10"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦19,636</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦19,636</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022042521183CFE</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400018</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（新加坡收件人）-购买费用：￦19,636</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;416&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">415</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="11"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦89,992</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦89,992</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-202204251411B139</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400010</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Hwansoo Jeong) - 购买费用：￦89,992</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">414</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="12"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦108,864</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦108,864</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付完成</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-202204251333090A</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22100003</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Green Kim) - 购买费用：￦108,864</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">413</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="13"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-13</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦73,000</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold clrRed1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦73,000</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付待定</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-20220413030963F4</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-13</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400005</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（新加坡收件人）- 网购费用：￦23,000</font></font></a><br>

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400002</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（金格林）- 网购费用：￦50,000</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPaymentCfm_M(&#39;413&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认付款</font></font></button></span>
								<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnBankCal_M(&#39;413&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折取消存款</font></font></button></span>



						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">412</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="14"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦208,367,680</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦208,367,680</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-2022032411443270</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300006</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（物流系统） - 国际运费：￦208,367,680</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">411</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="15"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦271,300</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦271,300</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无存折支付</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y41-202203241144C26C</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300008</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Sun Joo) - 国际运费：￦271,300</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;411&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">410</font></font></td>
						<td class="alCenter"><a href="javascript:" memcode="11" class="tipMem" data-hasqtip="16"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李容宇</font></font></span></a></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td class="num alRight padR1 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦250,000</font></font></td>
						<td class="num alRight padR1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							预付款：</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦250,000</font></font></strong><br>
							<!--포인트 : <strong>0 P</strong><br /--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							优惠券折扣：</font></font><strong class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font></strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦0</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款支付</font></font><br></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号：</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200010</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Lee Yong-woo) - 国际运费：￦250,000</font></font></a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成支付</font></font></span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;410&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></button></span>


						</td>
					</tr>



					<tr>
						<td class="alCenter">407</td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="17"><span class="bold">测试</span></a></td>
						<td class="alCenter">2022-03-22</td>
						<td class="num alRight padR1 bold">￦79,254</td>
						<td class="num alRight padR1">
							预付金 : <strong>￦79,254</strong><br>
							<!--포인트 : <strong>0 P</strong><br /-->
							优惠券折扣 : <strong class="red1">￦0</strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold">￦0<br>完成支付</span>

						</td>
						<td class="alCenter">预付款支付<br>Y41-2203220651D1B1</td>
						<td class="alCenter">2022-03-22</td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank">订单号码 <span class="bold">22200007</span>(物流系统) - 代购费用: ￦79,254</a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold">完成支付</span>


						</td>
					</tr>



					<tr>
						<td class="alCenter">406</td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="18"><span class="bold">测试</span></a></td>
						<td class="alCenter">2022-03-17</td>
						<td class="num alRight padR1 bold">￦1,842,949</td>
						<td class="num alRight padR1">
							预付金 : <strong>￦0</strong><br>
							<!--포인트 : <strong>0 P</strong><br /-->
							优惠券折扣 : <strong class="red1">￦0</strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold">￦1,842,949<br>完成支付</span>

						</td>
						<td class="alCenter">无存折支付<br>Y41-202203171627B21F</td>
						<td class="alCenter">2022-03-17</td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank">订单号码 <span class="bold">22300006</span>(物流系统) - 代购费用: ￦1,842,949</a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold">完成支付</span>


						</td>
					</tr>



					<tr>
						<td class="alCenter">405</td>
						<td class="alCenter"><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="19"><span class="bold">测试</span></a></td>
						<td class="alCenter">2022-03-17</td>
						<td class="num alRight padR1 bold">￦23,922</td>
						<td class="num alRight padR1">
							预付金 : <strong>￦0</strong><br>
							<!--포인트 : <strong>0 P</strong><br /-->
							优惠券折扣 : <strong class="red1">￦0</strong>
						</td>
						<td class="num alRight padR1">

								<span class="bold">￦23,922<br>完成支付</span>

						</td>
						<td class="alCenter">无存折支付<br>Y41-202203171554203C</td>
						<td class="alCenter">2022-03-17</td>
						<td>
							<p style="line-height:180%;">

								<a href="#" target="_blank">订单号码 <span class="bold">21700015</span>(测试ID名称) - 国际 发货费用 : ￦8,922</a><br>

								<a href="#" target="_blank">订单号码 <span class="bold">21800007</span>(测试ID名称) - 国际 发货费用 : ￦14,000</a><br>

								<a href="#" target="_blank">订单号码 <span class="bold">21600001</span>(物流系统) - 国际 发货费用 : ￦1,000</a><br>

							</p>
						</td>
						<td class="listBtn">



								<span class="bold">完成支付</span>


									<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnPaymentCan_M(&#39;405&#39;);">取消支付</button></span>


						</td>
					</tr>


				</tbody></table>
			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页">&lt;</a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);">1</a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span>2</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span>3</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span>4</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 5);"><span>5</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 6);"><span>6</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 7);"><span>7</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 8);"><span>8</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 9);"><span>9</span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 10);"><span>10</span></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10">&gt;</a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 12);" title="最后的">&gt;&gt;</a>	</span></div>
				<div class="CntRt">
					<span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
					 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span>
				</div>
			</div>

		</form>
		</div>


	</div>

</div>


</div>
<div class="BtmSolution">
    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
</div>
</div>
<!-- body content end-->
@endsection
