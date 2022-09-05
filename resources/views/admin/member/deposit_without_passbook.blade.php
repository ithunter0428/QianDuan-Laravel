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
@endsection
