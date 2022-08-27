@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/coupon/EventCoupon_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动优惠券</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券管理 &gt; 活动优惠券</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmReg" id="frmReg" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="106">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10603">
					<input type="hidden" name="sKind" id="sKind" value="A">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行分类</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券类型</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金额</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动期间</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">生效日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="ISSUE_DVS_CD" id="ISSUE_DVS_CD">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

							<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册活动</font></font></option>

						</select>
					</td>
					<td>
						<select name="CHARGE_DET_CD" id="CHARGE_DET_CD">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

							<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费</font></font></option>

						</select>
					</td>
					<td>
						<select name="CRR_CD">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

						</select>
						<input type="text" name="MNY" maxlength="10" value="" class="iptBox1 w40 Cal">
						<select name="CNT">

							<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></option>

							<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>

							<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>

							<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>

							<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>

							<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></option>

							<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option>

							<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></option>

							<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></option>

							<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>

						</select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个
					</font></font></td>
					<td>
						<input type="text" name="BEGIN_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="END_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="">
					</td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						自发布之日起</font></font><input type="text" name="VALID_DAY" maxlength="3" value="60" class="iptBox1  Cal" style="width:30px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">工作
					</font></font></td>
					<td>
						<select name="USE_YN">
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></option>
						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnReg_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button></span>
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
					<col width="12%">
					<col width="12%">
					<col width="10%">
					<col width="12%">
					<col width="8%">
					<col width="12%">
					<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行分类</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券类型</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金额</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">期限</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">自发布之日起</font></font></th>
					<th class="alLeft"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th class="alLeft"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>



				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员活动</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(1)</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12,222 美元 1 件</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-19 ~ 2022-05-21</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60 天</font></font></td>
					<td class=""><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></td>
					<td>

							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnUse_M(&#39;1&#39;, &#39;Y&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></button></span>

					</td>
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
