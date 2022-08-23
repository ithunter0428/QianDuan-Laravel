@extends('admin.layouts')

@section('stylesheets')
@endsection

@section('style')
<style>
table.ui-datepicker-calendar
{
    display:none;
}
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/sns1_files/SmsSend_L.js') }}"></script>
@endsection

@section('content')
<div class="body-content left-M-0">
    <div class="conBox">
<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送提示明细</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理 &gt; 通知通话发送历史</font></font></h4>
		</div>

		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="107">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10701">
					<input type="hidden" name="sGo" id="sGo" value="1">

					<table cellspacing="1">
					<tbody><tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年/月</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码</font></font></th>
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
							<input type="text" name="sToMonth" id="sToMonth" maxlength="6" class="iptBox1 dtPic cursor hasDatepicker" style="width: 80px;" value="2022-05" readonly="">
						</td>
						<td>
							<input type="text" name="sMobNo" id="sMobNo" maxlength="15" class="iptBox1 EnterKey" style="width: 120px;" value="">
						</td>

						<td>
							<div class="">
								<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							</div>
						</td>
					</tr>
					</tbody></table>

				</form>

			</div><!-- search-board -->


			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="107">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10701">

					<table border="1">
						<colgroup>
							<col width="6%">
							<col width="18%">
							<col width="35%">
							<col width="7%">
							<col width="*%">
						</colgroup>
						<tbody><tr>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">传输信息</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">传输内容</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分配</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结果</font></font></th>
						</tr>
						<tr><td colspan="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE。</font></font></td></tr>
					</tbody></table>
				</form>
			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
				</div>
			</div>

		</div><!-- notice-board-->

	</div><!-- box -->

</div><!--mid-col-->

		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>
@endsection

