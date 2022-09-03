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
<script type="text/javascript" src="{{ asset('/admin_files/management/RackLog_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架信息日志</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理 &gt; 机架信息日志</font></font></h4>
		</div>
		<div class="box-container corners02" style="width:80%">
			<!-- Begin 검색 폼 -->
			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="110">
					<input type="hidden" name="gMnu2" value="11004">
					<input type="hidden" name="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO data</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize">
							<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
<option value="15" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
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
						<input type="text" name="BEGIN_DT" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653577832208"><img src="./rack3_files/dt_close.png" class="cursor DtCan" rel="BEGIN_DT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="END_DT" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653577832209"><img src="./rack3_files/dt_close.png" class="cursor DtCan" rel="END_DT">
					</td>
					<td>
						<input type="text" name="RACK_NO" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="TRK_NO" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="STOCK_NO" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="NODATA_SEQ" maxlength="100" class="iptBox1 EnterKey" onblur="this.value=fnNumChk(this.value);" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="MEM_NM" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
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
				<col width="7%">
				<col width="7%">
				<col width="13%">
				<col width="13%">
				<col width="13%">
				<col width="13%">
				<col width="13%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO data</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册类别</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">287</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GR-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=A123456789" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A123456789</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理1</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-01-23 15:52</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">286</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=ABC654S654" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ABC654S654</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=4&amp;sStockNo=S2100004" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S210004</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理1</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-28 18:39</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">285</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-107</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=445654654654" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">445654654654</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=51" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">51</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理1</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-28 18:03</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">284</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-108</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=SP28SP28SP28" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP28SP28SP28</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=0" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=38" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理1</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-28 17:54</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">282</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">哈-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=GG123123" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GG123123</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=48" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">芒果4473</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 23:49</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">281</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-108</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=SP28SP28SP28" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP28SP28SP28</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=38" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">特金贸易</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-11-29 11:52</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">280</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-007</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=1233" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1233</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=2&amp;sStockNo=S2000031" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S2000031</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">朴成汉</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 23:05</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">279</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=1233" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1233</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=2&amp;sStockNo=S2000031" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S2000031</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">朴成汉</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 23:05</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">278</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-007</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=1233" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1233</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=2&amp;sStockNo=S2000031" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S2000031</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">朴成汉</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 23:02</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">277</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=1233" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1233</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=2&amp;sStockNo=S2000031" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S2000031</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登记</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">朴成汉</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 22:59</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">276</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-003</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=N47477112665" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N47477112665</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=3&amp;sStockNo=S1910010" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910010</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小白</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 14:41</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">275</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-001</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=N47477112665" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N47477112665</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=3&amp;sStockNo=S1910010" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910010</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小白</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 14:41</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">274</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-003</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=N47477112665" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N47477112665</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=3&amp;sStockNo=S1910010" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910010</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=0" target="_blank"></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小白</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-13 14:41</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">273</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-107</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=UKUK" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">UKUK</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=36" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">崔仁哲</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-09 14:46</font></font></td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">272</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-108</font></font></span></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=UKUK" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">UKUK</font></font></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/StockPro_L.asp?sStateCd=&amp;sStockNo=" target="_blank"></a></td>
					<td class="alCenter"><a href="http://ds2.areumsoft.co/Admin/Acting/NoData_L.asp?sNoDataSeq=36" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">崔仁哲</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-10-09 14:46</font></font></td>
				</tr>


				</tbody></table>

			</div>

			<div class="pagDv">
				<table style="width:98%;">
					<tbody><tr>
						<td width="100%">
							<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 5);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 6);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 7);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 8);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 9);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></a> <a href="javascript:" onclick="fnSearch(&#39;frmSearch&#39;, 10);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></a>  <a href="javascript:" class="ArrowOn" onclick="fnSearch(&#39;frmSearch&#39;, 11);" title="下一页 10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>  <a href="javascript:" class="ArrowOn" onclick="fnSearch(&#39;frmSearch&#39;, 19);" title="最后的"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a>	</span></div>
						</td>
						<td class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">280</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 第</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页/ 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span>
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
