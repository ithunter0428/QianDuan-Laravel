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
<script type="text/javascript" src="{{ asset('/admin_files/statistics/MemYearStats_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">按会员统计</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理 &gt; 按会员统计</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>
					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Stats/MemYearStats_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员年统计</font></font></a></td>
					<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Stats/MemMonthStats_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">每月按会员统计</font></font></a></td>
				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt20"></p>
			<!-- End : Tab Menu -->

			<p style="">

				</p><form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="sGo" value="1">

				<select name="sYear">

					<option value="2022" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022</font></font></option>

					<option value="2021"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021</font></font></option>

					<option value="2020"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020</font></font></option>

					<option value="2019"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019</font></font></option>

				</select> <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年</font></font></strong> &nbsp;

				<input type="text" name="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:100px;" placeholder="会员名称" value="">

				<span style="margin-left:10px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* 统计中订单数量和金额的计算标准以完成为准（Shipping/purchase: [shipped out], return: [returned]）</font></font></span>

				</form>
			<p></p>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="8%">
				<col width="*">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>

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

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我是耶娜</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rswinner123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李亚伦</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">asdf123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">佳仁雄</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">斯巴达13</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金雅-reum </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">test123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yong-Woo Lee </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GOOGLE_327</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"></font></span><font style="vertical-align: inherit;"><span class="ft_11"><font style="vertical-align: inherit;">乔阿拉</font></span><span class="bold"><font style="vertical-align: inherit;">GOOGLE_326</font></span></font><br><span class="ft_11"><font style="vertical-align: inherit;"></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jaamong </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jamong12</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jaehyuk Choi </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">qjsornt</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Younghoon Kang </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">yljml</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="4"><span class="bold"><font style="vertical-align: inherit;"></font></span><font style="vertical-align: inherit;"><span class="ft_11"><font style="vertical-align: inherit;">金哲秀</font></span><span class="bold"><font style="vertical-align: inherit;">hyd1500</font></span></font><br><span class="ft_11"><font style="vertical-align: inherit;"></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货代理</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物中心</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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



				</tbody></table>
			</div>

			<p class="clrBoth pHt20"></p>
			<!-- End : Tab Menu -->


			<p style="margin:10px 0;"><span class="ft_14 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- 年度支付费用</font></font></span></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="8%">
				<col width="*">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

					<col width="7%">

				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>

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

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我是耶娜</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rswinner123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李亚伦</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">asdf123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">佳仁雄</font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">斯巴达13</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金雅-reum </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">test123</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yong-Woo Lee </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GOOGLE_327</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"></font></span><font style="vertical-align: inherit;"><span class="ft_11"><font style="vertical-align: inherit;">乔阿拉</font></span><span class="bold"><font style="vertical-align: inherit;">GOOGLE_326</font></span></font><br><span class="ft_11"><font style="vertical-align: inherit;"></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jaamong </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jamong12</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jaehyuk Choi </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">qjsornt</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Younghoon Kang </font></font></span><br><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">yljml</font></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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
							<td colspan="14"></td>
						</tr>

					<tr><td class="alCenter" rowspan="6"><span class="bold"><font style="vertical-align: inherit;"></font></span><font style="vertical-align: inherit;"><span class="ft_11"><font style="vertical-align: inherit;">金哲秀</font></span><span class="bold"><font style="vertical-align: inherit;">hyd1500</font></span></font><br><span class="ft_11"><font style="vertical-align: inherit;"></font></span></td>


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关费</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商场成本</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
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


				</tbody></table>
			</div>


			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> /
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
