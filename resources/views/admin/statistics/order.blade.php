@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
<style>
.notice-board th, .notice-board td { font-size:10pt; }
</style>
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/statistics/OrderYearStats_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单统计</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理 &gt; 订单统计</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>
					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderYearStats_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年度订单统计</font></font></a></td>
					<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">每月订单统计</font></font></a></td>
				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt20"></p>
			<!-- End : Tab Menu -->

			<div style="">

				<form name="frmSearch" id="frmSearch" method="get">

				<select name="sYear">

					<option value="2022" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022</font></font></option>

					<option value="2021"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021</font></font></option>

					<option value="2020"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020</font></font></option>

					<option value="2019"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019</font></font></option>

				</select> <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年</font></font></strong> &nbsp;

				<select name="sSendCenterSeq">
					<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

						<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]威海</font></font></option>

						<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]青岛</font></font></option>

						<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国] 广州</font></font></option>

				</select> <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中心</font></font></strong> &nbsp;

				<span style="margin-left:10px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* 统计订单数和金额计算标准均以完成为准（Shipping/purchase: [shipped out], return: [returned]）</font></font></span>

				</form>
			</div>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="*">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=01&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=02&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">二月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=03&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">三月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=04&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">四月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=05&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">五月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=06&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">六月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=07&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">七月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=08&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">八月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=09&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">九月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=10&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=11&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十一月</font></font></span></a></th>

						<th><a href="http://ds2.areumsoft.co.kr/Admin/Stats/OrderMonthStats_L.asp?sYear=2022&amp;sMonth=12&amp;sSendCenterSeq=0" title="按月查看详细信息" target="_blank"><span style="color:#fff;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十二月</font></font></span></a></th>

				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				</tbody></table>
			</div>

			<p class="clrBoth pHt20"></p>
			<!-- End : Tab Menu -->


			<p style="margin:10px 0;"><span class="ft_14 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- 年度支付费用</font></font></span></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="*">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

					<col width="7.4%">

				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">费用区分</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">二月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">三月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">四月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">五月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">六月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">七月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">八月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">九月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十一月</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十二月</font></font></th>

				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,842,949</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6,500</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">208,367,680</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3,234</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3,234</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
				</tr>

				</tbody></table>
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
