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
<script type="text/javascript" src="{{ asset('/admin_files/statistics/WorkerLog_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理日志</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统计管理 &gt; 管理日志</font></font></h4>
		</div>

		<div class="box-container corners02">


			<!-- Begin 검색 폼 -->
			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="109">
					<input type="hidden" name="gMnu2" value="10904">
					<input type="hidden" name="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收件人姓名</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">工人编号</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize">
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
						<input type="text" name="sTrkNo" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sIvcNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sOrderNo" maxlength="8" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sConsNmKr" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sPostNo" maxlength="15" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sWorkerNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sWorkerId" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
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
				<col width="6%">
				<col width="8%">
				<col width="12%">
				<col width="10%">
				<col width="12%">
				<col width="10%">
				<col width="12%">
				<col width="8%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员姓名/邮箱</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收件人姓名</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">包装日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出库日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500003</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金雅润</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400061" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400061</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:20</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (zxrln)</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400028</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">红沙</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400065" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400065</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (ohjanggoon67)</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300009</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">红沙</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400021" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400021</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (ohjanggoon67)</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21700014</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金格林</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400101" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400101</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-27 15:54</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arumsoft</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (daebak)</font></font></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20400033</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">洪吉东</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=" target="_blank"><span class="bold"></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12 20:02</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (ohjanggoon67)</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="11" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李容宇 (SP11)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李容宇</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=K1010111001" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K1010111001</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-24 18:00</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">大师</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（cn2master）</font></font></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-25</font></font></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20900007</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">红沙</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=" target="_blank"><span class="bold"></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 10:53</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（买伦敦）</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300006</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆溶液</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400019" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400019</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24 09:54</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rswinner</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (rswinner)</font></font></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-26</font></font></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21700010</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆溶液</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=123213211112" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">123213211112</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-21 09:23</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arumsoft</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (daebak)</font></font></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24</font></font></span></td>
					<td class="alCenter"></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300008</font></font></span></td>
					<td class="alCenter"><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试 (SP28)</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">孙善珠</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sIvcNo=928400041" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">928400041</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-24 11:42</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rswinner</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (rswinner)</font></font></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"></td>
				</tr>


				<!-- E: 일반글 -->

				</tbody></table>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 5);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 6);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 7);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 8);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 9);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 10);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 14);" title="最后的"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">140</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span>
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
