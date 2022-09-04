@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/member/DepositUse_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款使用记录</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 存款使用记录</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10204">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区分</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员ID</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
					<th colspan="2"></th>
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
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value=""><img src="./mem4_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value=""><img src="./mem4_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<select name="sUseDvsCd">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款充值</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款退还</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员存款支付</font></font></option>

								<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行政预付款累计/扣除</font></font></option>

								<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sUseSeq" maxlength="10" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sMemId" id="sMemId" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<input type="text" name="sCont" id="sCont" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>

					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./DepositUse_W.asp&#39;, &#39;DepositUse_W&#39;, 800, 450);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款确认</font></font></button></span>
						</div>
					</td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						存款总额：</font></font><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦1,033,556,287</font></font></span>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>


			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10204">

				<table border="1">
				<colgroup>
				<col width="5%">
				<col width="15%">
				<col width="11%">
				<col width="25%">
				<col width="8%">
				<col width="8%">
				<col width="9%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员姓名（ID）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区分</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款 (￦)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">余额（￦）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>


				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">491</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费支付 - 订单号：22500003</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-42,500</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,849,210</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:20</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">490</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="30" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行政预付款累计/扣除</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20,000</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">70,000</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:02</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">489</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费支付 - 订单号：20400033</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-65,322</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,891,710</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12 20:02</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">488</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200017，产品号：1096，取消数量：2</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">472</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,957,032</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:56</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">487</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品成本退款 - 订单号：22200017，产品号：1096，取消数量：2</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9,435</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,956,560</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:56</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">486</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200007</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3,774</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,947,125</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:52</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">485</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品购买费用退款 - 订单号：22200007</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">75,480</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,943,351</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:52</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">484</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200006，产品号：1066，取消数量：3</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">796</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,867,871</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:24</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">483</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品成本退款 - 订单号：22200006，产品号：1066，取消数量：3</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15,912</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,867,075</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:24</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">482</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200006，产品号：1065，取消数量：1</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">265</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,851,163</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:24</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">481</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="10"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品成本退款 - 订单号：22200006，产品号：1065，取消数量：1</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5,304</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,850,898</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:24</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">480</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="11"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200006，产品号：1065，取消数量：2</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">530</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,845,594</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:23</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">479</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="12"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品成本退款 - 订单号：22200006，产品号：1065，取消数量：2</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10,608</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,845,064</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:23</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">478</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="13"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22200006，产品号：1063，取消数量：4</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,061</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,834,456</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:23</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">477</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="14"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品成本退款 - 订单号：22200006，产品号：1063，取消数量：4</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21,216</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,833,395</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:23</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">476</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="15"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22400022</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,071,150</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31,812,179</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28 22:03</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">475</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="16"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品购买费用退款 - 订单号：22400022</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21,423,000</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,741,029</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28 22:03</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">474</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="17"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付费用 - 420</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-3,234</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9,318,029</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28 21:57</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">473</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="18"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付费用 - 419</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-35,179</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9,321,263</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:55</font></font></span></td>
					<td></td>
				</tr>



				<tr>
					<td class="alCenter">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">472</font></font></span>
					</td>
					<td class="alCenter">
						<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="19"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试（测试1）</font></font></span></a>
					</td>
					<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></span></td>
					<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买手续费- 订单号：22400010，产品号：1160，取消数量：1</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">250</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9,356,442</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:21</font></font></span></td>
					<td></td>
				</tr>


				</tbody></table>
			</form></div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 5);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 6);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 7);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 8);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 9);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 10);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></a>  <a href="javascript:" class="ArrowOn" onclick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>  <a href="javascript:" class="ArrowOn" onclick="fnSearch(&#39;frmSearch&#39;, 25);" title="最后的"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">487</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 第</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页/ 共</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span>
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
@endsection
