@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/member/Note_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
    <div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知消息</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 通知消息</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10207">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读与不读</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
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
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./mem6_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./mem6_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<select name="sReadYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读取</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未读</font></font></option>
						</select>
					</td>
					<td>
						<input type="text" name="sOrderNo" id="sOrderNo" maxlength="15" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sSbj" id="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<input type="text" name="sCont" id="sCont" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;/Admin/Member/Note_W.asp&#39;, &#39;Note_W&#39;, 1200, 600);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送通知消息</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10207">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="15%">
				<col width="6%">
				<col width="*">
				<col width="12%">
				<col width="9%">
				<col width="9%">
				</colgroup>
				<tbody><tr>
					<th class="alLeft padL1"><label><input type="checkbox" name="ckNOTE_SEQ_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckNOTE_SEQ_ALL&#39;, &#39;ckNOTE_SEQ&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发件人</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">读取</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送日期</font></font></th>
				</tr>


				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="552"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">552</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500003</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;552&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22500003</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:20</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="551"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">551</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html?sOrderNo=22200017" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;551&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22200017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:19</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="550"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">550</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500042</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;550&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22500042</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:18</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="549"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">549</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;549&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">zxrln</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26 12:18</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="548"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">548</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;548&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22300009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="547"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">547</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400028</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;547&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22400028</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-18 10:29</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="546"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">546</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20400033</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;546&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：20400033</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-14 10:52
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-12 20:02</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="545"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">545</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22500008</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;545&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22500008</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ohjanggoon67</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-14 10:53
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-07 11:43</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="544"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">544</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;544&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：22200017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:49
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 01:08</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="543"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">543</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22300006</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;543&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">额外费用 - 订单号：22300006</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:49
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:39</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="542"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">542</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="10"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22200006</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;542&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22200006</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:17</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="541"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">541</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="11"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400009</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;541&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400009</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-29 00:11</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="540"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">540</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="12"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400024</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;540&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退货费用 - 订单号：22400024</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-28 21:56</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="539"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">539</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="13"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400023</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;539&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400023</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:54</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="538"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">538</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="14"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400017</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;538&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400017</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-05-05 15:50
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 15:18</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="537"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">537</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="15"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20900007</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;537&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际运费 - 订单号：20900007</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 10:53</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="536"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">536</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="16"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400020</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;536&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400020</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-27 09:36
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 09:19</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="535"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">535</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="17"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400020</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;535&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400020</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">买伦敦</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-27 09:36
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-27 09:17</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="534"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">534</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="18"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400019</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;534&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400019</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						2022-04-26 15:31
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25 21:15</font></font></span></td>
				</tr>



				<tr>
					<td>
						<label class=""><input type="checkbox" name="ckNOTE_SEQ" value="533"> <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">533</font></font></span>
					</label></td>
					<td><a href="javascript:" memcode="41" class="tipMem" data-hasqtip="19"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（测试1）</font></font></td>
					<td class="alCenter">
						<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22400019</font></font></span></a>
					</td>
					<td><a href="javascript:" onClick="fnNoteView(&#39;533&#39;);"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买费用 - 订单号：22400019</font></font></span></a></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63511571</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						未读
					</font></font></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-25 21:15</font></font></span></td>
				</tr>


				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="Status-change">
					<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnNoteDel_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
				</div>
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 5);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 6);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 7);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 8);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 9);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 10);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>  <a href="javascript:" class="ArrowOn" onClick="fnSearch(&#39;frmSearch&#39;, 26);" title="最后的"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">515</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 第</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页/ 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span>
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
<!-- body content end-->
@endsection
