@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript">
    gListUrl = "NoData_L.asp";
</script>
<script type="text/javascript" src="{{ asset('/admin_files/management/Event_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 活动管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" enctype="multipart/form-data">
					<input type="hidden" name="gMnu1" id="gMnu1" value="105">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10503">
					<input type="hidden" name="sGo" id="sGo" value="1">
					<input type="hidden" name="EVENT_SEQ" id="EVENT_SEQ" value="">
					<input type="hidden" name="sKind" id="sKind" value="">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT</font></font></th>
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
						<input type="text" name="sSbj" id="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<select name="sOpenYn" id="sOpenYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">被暴露</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">到期</font></font></option>
						</select>
					</td>
					<td>
						<select name="sEventYn" id="sEventYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动期间</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">到期</font></font></option>
						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Event_W.asp&#39;, &#39;Event_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT发布</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="4%">
				<col width="10%">
				<col width="20%">
				<col width="11%">
				<col width="11%">
				<col width="5%">
				<col width="5%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示时间</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td><a href="mp5.html" target="_blank"><img src="./mp5_files/Event_20200317cqm01q.png" width="100%" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;"></a></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆解决方案活动</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-03-17 ~ 2021-04-30</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-03-17 ~ 2021-03-31</font></font></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最后期限</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Event_W.asp?sEventSeq=2&#39;, &#39;Event_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td><a href="mp5.html" target="_blank"><img src="./mp5_files/Event_20190713ehqst7.png" width="100%" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;"></a></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EVENT测试#1</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-13 ~ 2019-07-31</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-13 ~ 2019-07-31</font></font></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最后期限</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Event_W.asp?sEventSeq=1&#39;, &#39;Event_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				</tbody></table>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
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
