@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/DlvrFee_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2>运费管理</h2>
			<h4 class="white corners">환경설정 &gt; 运费管理</h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

					<td class="on" style="width:160px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/DlvrFee_L.asp?sCenterSeq=5&amp;sDlvrWayCd=2">威海/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/DlvrFee_L.asp?sCenterSeq=5&amp;sDlvrWayCd=1">위해 / 항공</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/DlvrFee_L.asp?sCenterSeq=12&amp;sDlvrWayCd=2">青岛/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/DlvrFee_L.asp?sCenterSeq=9&amp;sDlvrWayCd=2">广州/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/DlvrFee_L.asp?sCenterSeq=9&amp;sDlvrWayCd=1">广州/航空</a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->

			<div class="btn-area">
				<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./DlvrFee_W.asp?sCenterSeq=5&#39;, &#39;DlvrFee_W&#39;, 800, 250);">运费管理确认</button></span>

				<!--span class="whGrnBtn ty2"><button type="button" class="txt" OnClick="fnPopWinCT('./DlvrFeeText_W.asp', 'DlvrFeeText_W', 1000, 850);">运费管理일괄确认</button></span>-->

				&nbsp; &nbsp;

				<select name="CENTER_SEQ">
					<option value="">= 센터별 요율 삭제</option>

						<option value="5" dlvrwaycd="2">威海/海运</option>

						<option value="5" dlvrwaycd="1">위해 / 항공</option>

						<option value="12" dlvrwaycd="2">青岛/海运</option>

						<option value="9" dlvrwaycd="2">广州/海运</option>

						<option value="9" dlvrwaycd="1">广州/航空</option>

				</select>
				<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M();">삭제</button></span>
			</div>


			<p class="clrBoth pHt10"></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10805">
				<input type="hidden" name="sGo" id="sGo" value="">
				<input type="hidden" name="sPageSize" id="sPageSize" value="">





			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>1레벨</strong></th>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦6,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦7,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦9,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦10,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦11,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦13,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦14,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦15,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦17,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦18,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦19,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦43,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦45,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦46,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦47,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦49,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦50,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦51,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦53,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦54,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦55,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦57,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦58,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦59,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦61,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦62,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦63,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦65,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦66,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦67,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦69,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦70,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦71,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦73,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦74,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦75,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦77,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦78,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦79,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦81,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦82,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦83,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦85,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦86,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦87,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦89,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦90,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦91,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦93,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦94,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦95,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦97,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦98,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦99,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦101,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦102,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦103,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦105,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦106,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦107,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦109,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦110,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦111,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦113,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦114,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦115,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦117,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦118,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦119,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦121,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦122,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦123,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦125,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦126,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦127,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦129,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦130,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦131,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦133,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦134,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦135,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦137,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦138,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦139,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦141,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦142,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦143,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦145,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦146,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦147,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦149,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦150,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦151,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦153,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦154,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦155,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦157,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦158,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦159,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦161,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦162,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦163,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦165,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦166,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦167,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦169,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦170,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦171,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦173,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦174,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦175,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦177,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦178,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦179,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦181,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦182,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦183,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦185,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦186,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦187,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦189,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦190,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦191,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦193,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦194,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦195,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦197,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦198,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦199,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦201,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦202,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦203,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦205,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦206,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦207,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦209,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦210,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦211,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦213,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦214,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦215,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦217,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦218,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦219,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦221,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦222,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦223,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦225,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦226,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦227,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦229,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦230,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦231,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦233,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦234,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦235,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦237,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦238,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦239,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦241,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦242,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦243,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦245,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦246,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦247,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦249,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦250,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦251,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦253,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦254,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦255,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦257,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦258,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦259,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦261,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦262,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦263,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦265,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦266,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦267,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦269,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦270,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦271,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦273,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦274,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦275,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦277,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦278,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦279,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦281,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦282,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦283,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦285,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦286,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦287,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦289,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦290,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦291,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦293,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦294,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦295,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦297,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦298,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦299,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦301,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦302,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦303,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦305,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦306,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦307,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦309,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦310,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦311,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦313,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦314,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦315,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦317,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦318,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦319,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦321,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦322,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦323,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦325,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦326,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦327,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦329,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦330,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦331,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦333,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦334,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦335,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦337,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦338,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦339,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦341,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦342,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦343,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦345,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦346,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦347,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦349,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦350,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦351,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦353,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦354,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦355,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦357,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦358,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦359,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦361,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦362,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦363,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦365,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦366,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦367,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦369,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦370,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦371,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦373,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦374,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦375,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦377,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦378,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦379,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦381,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦382,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦383,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦385,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦386,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦387,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦389,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦390,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦391,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦393,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦394,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦395,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦397,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦398,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦399,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦401,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦402,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦403,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦405,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦406,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦407,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦409,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦410,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦411,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦413,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦414,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦415,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦417,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦418,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦419,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦421,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦422,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦423,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦425,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦426,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦427,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦429,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦430,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦431,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦433,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦434,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦435,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦437,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦438,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦439,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦441,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦442,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦443,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦445,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦446,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦447,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦449,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦450,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦451,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦453,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦454,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦455,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦457,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦458,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦459,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦461,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦462,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦463,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦465,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦466,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦467,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦469,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦470,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦471,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦473,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦474,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦475,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦477,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦478,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦479,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦481,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦482,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦483,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>300<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,900</strong></td>
				</tr>



				</tbody></table>

			</div>



			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>2레벨</strong></th>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦6,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦7,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦9,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦10,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦11,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦13,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦14,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦15,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦17,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦18,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦19,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦43,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦45,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦46,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦47,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦49,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦50,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦51,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦53,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦54,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦55,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦57,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦58,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦59,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦61,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦62,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦63,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦65,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦66,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦67,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦69,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦70,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦71,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦73,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦74,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦75,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦77,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦78,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦79,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦81,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦82,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦83,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦85,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦86,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦87,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦89,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦90,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦91,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦93,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦94,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦95,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦97,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦98,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦99,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦101,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦102,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦103,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦105,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦106,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦107,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦109,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦110,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦111,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦113,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦114,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦115,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦117,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦118,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦119,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦121,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦122,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦123,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦125,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦126,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦127,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦129,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦130,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦131,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦133,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦134,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦135,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦137,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦138,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦139,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦141,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦142,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦143,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦145,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦146,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦147,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦149,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦150,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦151,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦153,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦154,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦155,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦157,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦158,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦159,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦161,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦162,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦163,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦165,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦166,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦167,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦169,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦170,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦171,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦173,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦174,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦175,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦177,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦178,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦179,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦181,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦182,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦183,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦185,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦186,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦187,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦189,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦190,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦191,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦193,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦194,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦195,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦197,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦198,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦199,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦201,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦202,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦203,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦205,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦206,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦207,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦209,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦210,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦211,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦213,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦214,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦215,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦217,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦218,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦219,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦221,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦222,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦223,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦225,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦226,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦227,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦229,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦230,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦231,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦233,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦234,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦235,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦237,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦238,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦239,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦241,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦242,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦243,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦245,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦246,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦247,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦249,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦250,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦251,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦253,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦254,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦255,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦257,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦258,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦259,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦261,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦262,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦263,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦265,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦266,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦267,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦269,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦270,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦271,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦273,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦274,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦275,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦277,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦278,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦279,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦281,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦282,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦283,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦285,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦286,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦287,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦289,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦290,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦291,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦293,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦294,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦295,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦297,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦298,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦299,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦301,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦302,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦303,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦305,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦306,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦307,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦309,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦310,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦311,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦313,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦314,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦315,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦317,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦318,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦319,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦321,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦322,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦323,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦325,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦326,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦327,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦329,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦330,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦331,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦333,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦334,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦335,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦337,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦338,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦339,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦341,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦342,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦343,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦345,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦346,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦347,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦349,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦350,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦351,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦353,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦354,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦355,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦357,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦358,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦359,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦361,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦362,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦363,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦365,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦366,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦367,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦369,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦370,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦371,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦373,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦374,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦375,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦377,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦378,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦379,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦381,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦382,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦383,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦385,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦386,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦387,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦389,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦390,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦391,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦393,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦394,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦395,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦397,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦398,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦399,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦401,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦402,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦403,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦405,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦406,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦407,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦409,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦410,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦411,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦413,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦414,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦415,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦417,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦418,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦419,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦421,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦422,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦423,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦425,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦426,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦427,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦429,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦430,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦431,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦433,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦434,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦435,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦437,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦438,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦439,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦441,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦442,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦443,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦445,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦446,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦447,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦449,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦450,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦451,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦453,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦454,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦455,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦457,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦458,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦459,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦461,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦462,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦463,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦465,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦466,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦467,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦469,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦470,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦471,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦473,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦474,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦475,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦477,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦478,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦479,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦481,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦482,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦483,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>300<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,900</strong></td>
				</tr>



				</tbody></table>

			</div>



			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>3레벨</strong></th>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦6,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦7,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦9,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦10,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦11,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦13,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦14,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦15,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦17,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦18,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦19,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦43,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦45,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦46,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦47,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦49,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦50,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦51,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦53,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦54,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦55,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦57,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦58,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦59,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦61,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦62,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦63,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦65,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦66,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦67,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦69,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦70,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦71,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦73,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦74,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦75,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦77,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦78,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦79,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦81,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦82,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦83,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦85,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦86,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦87,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦89,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦90,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦91,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦93,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦94,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦95,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦97,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦98,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦99,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦101,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦102,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦103,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦105,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦106,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦107,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦109,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦110,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦111,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦113,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦114,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦115,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦117,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦118,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦119,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦121,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦122,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦123,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦125,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦126,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦127,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦129,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦130,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦131,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦133,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦134,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦135,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦137,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦138,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦139,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦141,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦142,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦143,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦145,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦146,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦147,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦149,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦150,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦151,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦153,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦154,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦155,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦157,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦158,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦159,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦161,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦162,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦163,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦165,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦166,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦167,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦169,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦170,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦171,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦173,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦174,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦175,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦177,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦178,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦179,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦181,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦182,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦183,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦185,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦186,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦187,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦189,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦190,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦191,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦193,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦194,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦195,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦197,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦198,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦199,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦201,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦202,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦203,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦205,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦206,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦207,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦209,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦210,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦211,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦213,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦214,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦215,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦217,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦218,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦219,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦221,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦222,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦223,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦225,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦226,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦227,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦229,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦230,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦231,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦233,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦234,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦235,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦237,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦238,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦239,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦241,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦242,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦243,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦245,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦246,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦247,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦249,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦250,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦251,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦253,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦254,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦255,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦257,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦258,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦259,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦261,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦262,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦263,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦265,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦266,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦267,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦269,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦270,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦271,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦273,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦274,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦275,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦277,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦278,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦279,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦281,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦282,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦283,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦285,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦286,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦287,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦289,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦290,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦291,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦293,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦294,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦295,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦297,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦298,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦299,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦301,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦302,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦303,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦305,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦306,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦307,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦309,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦310,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦311,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦313,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦314,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦315,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦317,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦318,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦319,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦321,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦322,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦323,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦325,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦326,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦327,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦329,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦330,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦331,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦333,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦334,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦335,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦337,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦338,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦339,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦341,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦342,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦343,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦345,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦346,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦347,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦349,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦350,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦351,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦353,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦354,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦355,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦357,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦358,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦359,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦361,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦362,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦363,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦365,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦366,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦367,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦369,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦370,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦371,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦373,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦374,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦375,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦377,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦378,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦379,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦381,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦382,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦383,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦385,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦386,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦387,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦389,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦390,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦391,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦393,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦394,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦395,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦397,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦398,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦399,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦401,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦402,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦403,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦405,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦406,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦407,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦409,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦410,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦411,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦413,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦414,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦415,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦417,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦418,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦419,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦421,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦422,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦423,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦425,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦426,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦427,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦429,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦430,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦431,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦433,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦434,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦435,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦437,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦438,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦439,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦441,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦442,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦443,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦445,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦446,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦447,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦449,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦450,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦451,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦453,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦454,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦455,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦457,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦458,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦459,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦461,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦462,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦463,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦465,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦466,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦467,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦469,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦470,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦471,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦473,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦474,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦475,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦477,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦478,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦479,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦481,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦482,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦483,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>300<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,900</strong></td>
				</tr>



				</tbody></table>

			</div>



			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>4레벨</strong></th>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦6,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦7,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦9,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦10,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦11,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦13,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦14,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦15,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦17,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦18,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦19,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦43,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦45,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦46,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦47,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦49,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦50,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦51,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦53,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦54,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦55,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦57,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦58,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦59,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦61,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦62,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦63,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦65,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦66,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦67,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦69,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦70,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦71,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦73,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦74,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦75,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦77,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦78,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦79,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦81,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦82,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦83,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦85,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦86,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦87,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦89,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦90,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦91,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦93,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦94,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦95,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦97,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦98,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦99,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦101,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦102,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦103,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦105,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦106,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦107,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦109,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦110,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦111,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦113,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦114,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦115,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦117,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦118,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦119,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦121,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦122,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦123,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦125,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦126,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦127,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦129,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦130,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦131,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦133,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦134,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦135,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦137,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦138,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦139,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦141,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦142,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦143,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦145,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦146,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦147,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦149,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦150,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦151,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦153,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦154,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦155,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦157,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦158,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦159,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦161,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦162,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦163,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦165,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦166,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦167,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦169,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦170,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦171,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦173,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦174,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦175,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦177,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦178,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦179,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦181,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦182,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦183,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦185,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦186,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦187,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦189,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦190,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦191,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦193,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦194,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦195,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦197,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦198,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦199,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦201,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦202,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦203,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦205,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦206,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦207,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦209,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦210,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦211,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦213,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦214,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦215,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦217,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦218,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦219,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦221,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦222,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦223,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦225,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦226,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦227,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦229,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦230,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦231,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦233,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦234,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦235,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦237,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦238,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦239,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦241,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦242,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦243,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦245,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦246,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦247,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦249,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦250,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦251,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦253,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦254,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦255,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦257,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦258,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦259,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦261,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦262,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦263,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦265,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦266,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦267,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦269,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦270,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦271,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦273,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦274,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦275,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦277,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦278,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦279,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦281,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦282,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦283,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦285,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦286,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦287,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦289,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦290,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦291,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦293,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦294,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦295,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦297,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦298,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦299,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦301,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦302,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦303,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦305,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦306,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦307,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦309,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦310,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦311,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦313,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦314,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦315,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦317,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦318,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦319,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦321,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦322,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦323,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦325,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦326,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦327,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦329,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦330,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦331,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦333,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦334,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦335,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦337,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦338,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦339,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦341,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦342,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦343,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦345,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦346,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦347,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦349,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦350,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦351,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦353,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦354,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦355,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦357,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦358,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦359,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦361,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦362,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦363,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦365,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦366,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦367,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦369,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦370,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦371,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦373,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦374,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦375,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦377,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦378,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦379,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦381,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦382,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦383,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦385,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦386,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦387,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦389,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦390,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦391,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦393,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦394,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦395,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦397,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦398,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦399,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦401,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦402,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦403,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦405,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦406,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦407,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦409,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦410,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦411,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦413,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦414,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦415,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦417,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦418,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦419,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦421,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦422,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦423,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦425,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦426,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦427,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦429,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦430,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦431,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦433,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦434,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦435,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦437,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦438,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦439,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦441,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦442,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦443,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦445,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦446,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦447,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦449,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦450,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦451,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦453,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦454,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦455,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦457,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦458,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦459,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦461,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦462,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦463,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦465,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦466,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦467,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦469,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦470,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦471,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦473,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦474,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦475,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦477,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦478,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦479,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦481,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦482,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦483,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>300<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,900</strong></td>
				</tr>



				</tbody></table>

			</div>



			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>5레벨</strong></th>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦6,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦7,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦8,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>1.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦9,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦10,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦11,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦12,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>2.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦13,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦14,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦15,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦16,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>3.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦17,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦18,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦19,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦20,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>4.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>5.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>6.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>7.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>8.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.2<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.4<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.6<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>9.8<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>10.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦21,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦22,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>11.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦23,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>12.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦24,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦25,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>13.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦26,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦27,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>14.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦28,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>15.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦29,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦30,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>16.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦31,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>17.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦32,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦33,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>18.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦34,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦35,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>19.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦36,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>20.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦37,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦38,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>21.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦39,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>22.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦40,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦41,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>23.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦42,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦43,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>24.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦44,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>25.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦45,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦46,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>26.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦47,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>27.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦48,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦49,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>28.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦50,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦51,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>29.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦52,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>30.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦53,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦54,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>31.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦55,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>32.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦56,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦57,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>33.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦58,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦59,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>34.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦60,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>35.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦61,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦62,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>36.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦63,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>37.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦64,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦65,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>38.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦66,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦67,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>39.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦68,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>40.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦69,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦70,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>41.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦71,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>42.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦72,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦73,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>43.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦74,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦75,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>44.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦76,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>45.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦77,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦78,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>46.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦79,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>47.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦80,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦81,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>48.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦82,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦83,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>49.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦84,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>50.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦85,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦86,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>51.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦87,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>52.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦88,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦89,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>53.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦90,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦91,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>54.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦92,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>55.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦93,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦94,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>56.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦95,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>57.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦96,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦97,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>58.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦98,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦99,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>59.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦100,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>60.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦101,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦102,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>61.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦103,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>62.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦104,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦105,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>63.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦106,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦107,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>64.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦108,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>65.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦109,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦110,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>66.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦111,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>67.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦112,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦113,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>68.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦114,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦115,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>69.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦116,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>70.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦117,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦118,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>71.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦119,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>72.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦120,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦121,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>73.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦122,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦123,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>74.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦124,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>75.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦125,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦126,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>76.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦127,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>77.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦128,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦129,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>78.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦130,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦131,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>79.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦132,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>80.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦133,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦134,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>81.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦135,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>82.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦136,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦137,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>83.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦138,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦139,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>84.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦140,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>85.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦141,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦142,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>86.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦143,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>87.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦144,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦145,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>88.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦146,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦147,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>89.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦148,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>90.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦149,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦150,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>91.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦151,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>92.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦152,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦153,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>93.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦154,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦155,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>94.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦156,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>95.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦157,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦158,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>96.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦159,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>97.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦160,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦161,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>98.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦162,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦163,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>99.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦164,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>100.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦165,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦166,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>101.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦167,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>102.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦168,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦169,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>103.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦170,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦171,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>104.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦172,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>105.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦173,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦174,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>106.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦175,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>107.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦176,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦177,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>108.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦178,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦179,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>109.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦180,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>110.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦181,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦182,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>111.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦183,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>112.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦184,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦185,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>113.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦186,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦187,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>114.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦188,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>115.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦189,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦190,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>116.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦191,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>117.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦192,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦193,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>118.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦194,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦195,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>119.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦196,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>120.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦197,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦198,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>121.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦199,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>122.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦200,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦201,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>123.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦202,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦203,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>124.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦204,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>125.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦205,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦206,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>126.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦207,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>127.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦208,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦209,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>128.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦210,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦211,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>129.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦212,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>130.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦213,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦214,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>131.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦215,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>132.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦216,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦217,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>133.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦218,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦219,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>134.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦220,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>135.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦221,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦222,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>136.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦223,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>137.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦224,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦225,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>138.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦226,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦227,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>139.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦228,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>140.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦229,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦230,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>141.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦231,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>142.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦232,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦233,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>143.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦234,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦235,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>144.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦236,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>145.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦237,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦238,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>146.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦239,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>147.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦240,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦241,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>148.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦242,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦243,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>149.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦244,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>150.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦245,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦246,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>151.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦247,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>152.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦248,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦249,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>153.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦250,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦251,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>154.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦252,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>155.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦253,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦254,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>156.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦255,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>157.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦256,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦257,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>158.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦258,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦259,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>159.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦260,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>160.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦261,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦262,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>161.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦263,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>162.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦264,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦265,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>163.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦266,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦267,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>164.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦268,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>165.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦269,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦270,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>166.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦271,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>167.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦272,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦273,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>168.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦274,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦275,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>169.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦276,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>170.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦277,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦278,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>171.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦279,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>172.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦280,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦281,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>173.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦282,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦283,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>174.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦284,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>175.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦285,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦286,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>176.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦287,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>177.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦288,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦289,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>178.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦290,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦291,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>179.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦292,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>180.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦293,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦294,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>181.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦295,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>182.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦296,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦297,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>183.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦298,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦299,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>184.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦300,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>185.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦301,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦302,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>186.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦303,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>187.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦304,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦305,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>188.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦306,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦307,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>189.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦308,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>190.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦309,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦310,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>191.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦311,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>192.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦312,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦313,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>193.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦314,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦315,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>194.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦316,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>195.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦317,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦318,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>196.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦319,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>197.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦320,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦321,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>198.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦322,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦323,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>199.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦324,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>200.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦325,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦326,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>201.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦327,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>202.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦328,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦329,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>203.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦330,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦331,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>204.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦332,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>205.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦333,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦334,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>206.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦335,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>207.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦336,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦337,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>208.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦338,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦339,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>209.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦340,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>210.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦341,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦342,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>211.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦343,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>212.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦344,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦345,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>213.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦346,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦347,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>214.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦348,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>215.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦349,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦350,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>216.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦351,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>217.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦352,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦353,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>218.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦354,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦355,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>219.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦356,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>220.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦357,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦358,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>221.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦359,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>222.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦360,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦361,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>223.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦362,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦363,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>224.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦364,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>225.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦365,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦366,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>226.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦367,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>227.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦368,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦369,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>228.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦370,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦371,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>229.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦372,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>230.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦373,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦374,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>231.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦375,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>232.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦376,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦377,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>233.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦378,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦379,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>234.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦380,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>235.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦381,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦382,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>236.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦383,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>237.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦384,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦385,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>238.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦386,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦387,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>239.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦388,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>240.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦389,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦390,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>241.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦391,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>242.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦392,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦393,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>243.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦394,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦395,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>244.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦396,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>245.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦397,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦398,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>246.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦399,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>247.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦400,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦401,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>248.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦402,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦403,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>249.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦404,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>250.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦405,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦406,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>251.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦407,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>252.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦408,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦409,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>253.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦410,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦411,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>254.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦412,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>255.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦413,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦414,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>256.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦415,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>257.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦416,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦417,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>258.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦418,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦419,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>259.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦420,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>260.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦421,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦422,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>261.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦423,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>262.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦424,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦425,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>263.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦426,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦427,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>264.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦428,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>265.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦429,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦430,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>266.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦431,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>267.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦432,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦433,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>268.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦434,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦435,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>269.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦436,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>270.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦437,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦438,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>271.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦439,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>272.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦440,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦441,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>273.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦442,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦443,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>274.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦444,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>275.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦445,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦446,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>276.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦447,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>277.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦448,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦449,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>278.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦450,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦451,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>279.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦452,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>280.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦453,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦454,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>281.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦455,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>282.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦456,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦457,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>283.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦458,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦459,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>284.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦460,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>285.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦461,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦462,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>286.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦463,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>287.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦464,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦465,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>288.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦466,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦467,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>289.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦468,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>290.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦469,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦470,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>291.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦471,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>292.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦472,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦473,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>293.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦474,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦475,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>294.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦476,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>295.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦477,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦478,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>296.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦479,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>297.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦480,900</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦481,700</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>298.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦482,500</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦483,300</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>299.5<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,100</strong></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><strong>300<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦484,900</strong></td>
				</tr>



				</tbody></table>

			</div>



			<p style="clear:both;"></p>

			<div class="btn-area">
				<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./DlvrFee_W.asp?sCenterSeq=5&#39;, &#39;DlvrFee_W&#39;, 800, 250);">运费管理确认</button></span>
			</div>


		</form>
		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3>©Copyright 2014 ~ 2022 物流系统All rights reserved. <a href="main.html" target="_blank">바로가기</a></h3>
		</div>
	</div>
@endsection
