@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/AddSvc_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置 &gt; 增值服务管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<p class="clrBoth pHt10"></p>

			<form name="frmCnyUsd" id="frmCnyUsd" method="post">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10809">
				<input type="hidden" name="sKind" id="sKind" value="M">
				<input type="hidden" name="MAIN_CD" id="MAIN_CD" value="D0004">

			<div class="notice-board">

				<table border="1" style="width: 20%">
				<colgroup>
				<col width="10%">
				<col width="10%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美元汇率（人民币/汇率除以）</font></font></th>
					<th class="alLeft"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">示例）￥1,550 / 6.85 = $226.28</font></font></th>
				</tr>


					<input type="hidden" name="SUB_CD" value="4">
					<input type="hidden" name="CD_NM" value="￥">
					<input type="hidden" name="REF_1" value="CNY">
					<input type="hidden" name="REF_2" value="위안">
					<input type="hidden" name="REF_3" value="Y">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="2">
					<input type="hidden" name="REF_7" value="">
					<input type="hidden" name="REF_8" value="02">
					<input type="hidden" name="CONT" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td>
							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></span>
						</td>
						<td>
							<input type="text" name="REF_6" maxlength="10" style="width:40%;" chip="2" class="iptBox1 Chip" value="6.85">
						</td>
					</tr>


				</tbody></table>
			</div>

			<div class="btn-area">
				<span class="whGraBtn_bg ty2">
					<button type="button" class="txt" onClick="fnCnyUsdExg_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保存汇率</font></font></button>
				</span>
			</div>

			</form>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->

			<form name="frmAddSvc" id="frmAddSvc" method="post">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10809">
				<input type="hidden" name="sKind" id="sKind" value="M">
				<input type="hidden" name="MAIN_CD" id="MAIN_CD" value="D0011">

			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="10%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值服务</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">说明</font></font></th>
				</tr>


					<input type="hidden" name="SUB_CD" value="17">
					<input type="hidden" name="CD_NM" value="현지배송비">
					<input type="hidden" name="REF_1" value="2">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">当地运费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="0.00">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="18">
					<input type="hidden" name="CD_NM" value="추가비용">
					<input type="hidden" name="REF_1" value="2">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">附加费用</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="500">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="2">
					<input type="hidden" name="CD_NM" value="一般检验">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="1">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一般检查</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="0">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value="一般检验 설명이 들어갑니다.&lt;br&gt; 내용은 관리자사이트 - 환경설정 - 增值服务관리에서 설명을 써주시면 사이트에 반영됩니다."></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="30">
					<input type="hidden" name="CD_NM" value="详细确认">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="1">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">精密检查</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="1000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value="설명을 쓰실때 줄바꿈을 하고싶으시면 br태그를 문장끝에 넣어주시면 됩니다. &lt;br&gt; 자세한 부분은 관리자 샘플사이트에서 확인해주시기 바랍니다."></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="3">
					<input type="hidden" name="CD_NM" value="盒子整理">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="2">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">盒子成型</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="222">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value="가나다라"></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="6">
					<input type="hidden" name="CD_NM" value="加强包装">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="2">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装补充</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="500">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="13">
					<input type="hidden" name="CD_NM" value="멀티박스">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="2">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">盒数</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="500">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="4">
					<input type="hidden" name="CD_NM" value="鞋盒去除">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="3">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">鞋盒拆卸</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="300">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="15">
					<input type="hidden" name="CD_NM" value="去除服装包装">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="3">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取出衣物盒</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="500">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="16">
					<input type="hidden" name="CD_NM" value="收据及标签去除">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="5">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="3">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除收据和标签</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="300">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="14">
					<input type="hidden" name="CD_NM" value="통관수수료">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="4">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关费用</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="1500">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="20">
					<input type="hidden" name="CD_NM" value="간이통관">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="4">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人清关</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="3000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="7">
					<input type="hidden" name="CD_NM" value="公司清关">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="Y">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="4">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公司清关</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="20000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="31">
					<input type="hidden" name="CD_NM" value="도서산간[지역별상이]">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="5">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">偏远地区</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="1000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="32">
					<input type="hidden" name="CD_NM" value="착불비">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="5">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货到付款</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="0">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="10">
					<input type="hidden" name="CD_NM" value="보관료">
					<input type="hidden" name="REF_1" value="1">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仓储费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="1000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="8">
					<input type="hidden" name="CD_NM" value="退货费用">
					<input type="hidden" name="REF_1" value="3">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="3000">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="9">
					<input type="hidden" name="CD_NM" value="현지发货费用">
					<input type="hidden" name="REF_1" value="3">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">当地运费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="234">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="12">
					<input type="hidden" name="CD_NM" value="관/부가세">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关/增值税</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="43">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="22">
					<input type="hidden" name="CD_NM" value="폐기수수료">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处置费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="342">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="23">
					<input type="hidden" name="CD_NM" value="검역수수료">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">检疫费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="342">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="24">
					<input type="hidden" name="CD_NM" value="카툰분할 수 신고/BL 분할">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CT/BL</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="234">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="25">
					<input type="hidden" name="CD_NM" value="과태료">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">疏忽罚款</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="234">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="26">
					<input type="hidden" name="CD_NM" value="보관료">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仓储费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="234">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="27">
					<input type="hidden" name="CD_NM" value="세관 창고비">
					<input type="hidden" name="REF_1" value="4">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关仓储费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="4">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="28">
					<input type="hidden" name="CD_NM" value="규격외 화물비용">
					<input type="hidden" name="REF_1" value="5">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">超标运费</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="342">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>



					<input type="hidden" name="SUB_CD" value="29">
					<input type="hidden" name="CD_NM" value="기타 수수료">
					<input type="hidden" name="REF_1" value="5">
					<input type="hidden" name="REF_4" value="">
					<input type="hidden" name="REF_5" value="">
					<input type="hidden" name="REF_6" value="">
					<input type="hidden" name="REF_7" value="Y">
					<input type="hidden" name="REF_8" value="">
					<input type="hidden" name="USE_YN" value="Y">

					<tr>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">其他费用</font></font></span></td>
						<td>
							<select name="REF_2">

								<option value="1" digit="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

								<option value="2" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$</font></font></option>

								<option value="4" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

								<option value="5" digit="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥</font></font></option>

							</select>
							<input type="text" name="REF_3" maxlength="10" style="width:40%;" class="iptBox1" value="100">
						</td>
						<td><input type="text" name="CONT" maxlength="1000" style="width:90%;" class="iptBox1" value=""></td>
					</tr>


				</tbody></table>
			</div>

			<div class="btn-area">
				<span class="whGraBtn_bg ty2">
					<button type="button" class="txt BtnSave"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认增值服务</font></font></button>
				</span>
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
@endsection
