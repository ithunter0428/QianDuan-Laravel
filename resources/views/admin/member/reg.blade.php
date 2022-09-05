@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
{{-- <script type="text/javascript" src="{{ asset('/admin_files/member/Note_L.js') }}"></script> --}}
{{-- <script type="text/javascript" src="./mem7_files/GradeUp_L.js.下载"></script> --}}
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
    <div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 会员注册管理</font></font></h4>
		</div>
		<div class="box-container corners02" style="width:70%;"><!-- Begin 검색 폼 -->

			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">天数</font></font></th>
					<th></th>
					<th></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">生效日期</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sGradeNo">
							<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></option>

						</select>
					</td>
					<td>
						<select name="sPeriodDay">
							<option value="180"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6个月</font></font></option>
							<option value="365" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1年</font></font></option>
							<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">积累</font></font></option>
						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
						</div>
					</td>
					<td style="width:100px;">&nbsp;</td>
					<td>
						<select name="COUPON_YN">
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行最新优惠券</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未发行升舱券</font></font></option>
						</select>
					</td>
					<td>
						<select name="LIMIT_DAY">
							<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30天</font></font></option>
							<option value="60"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60 天</font></font></option>
							<option value="90"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90 天</font></font></option>
							<option value="120"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">120天</font></font></option>
						</select>
					</td>
					<td>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnGradeUp_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册处理</font></font></button></span>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10208">

				<table border="1">
				<colgroup>
				<col width="8%">
				<col width="18%">
				<col width="15%">
				<col width="10%">
				<col width="15%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th class="alLeft padL1"><label><input type="checkbox" name="ckMEM_CODE_ALL" value="Y" onclick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckMEM_CODE_ALL&#39;, &#39;MEM_CODE&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员代码</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">当前等级</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成次数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个等级</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个等级信息</font></font></th>
				</tr>
				<tr><td colspan="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE。</font></font></td></tr>
				</tbody></table>

				</form>

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
