@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/announcement/Bbs_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box" style="width:70%;">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏管理 &gt; 1:1咨询</font></font></h4>
		</div>

		<div class="box-container corners02">




			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>
					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Bbs/Bbs_L.asp?sBbCode=2&amp;sStateNm="><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部的</font></font></a></td>

						<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Bbs/Bbs_L.asp?sBbCode=2&amp;sStateNm=%EB%AC%B8%EC%9D%98%EC%A4%91"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">询问</font></font></a></td>

						<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Bbs/Bbs_L.asp?sBbCode=2&amp;sStateNm=%ED%99%95%EC%9D%B8%EC%A4%91"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">检查</font></font></a></td>

						<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Bbs/Bbs_L.asp?sBbCode=2&amp;sStateNm=%EB%8B%B5%EB%B3%80%EC%99%84%EB%A3%8C"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->




			<!-- Begin 검색 폼 -->
			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="104">
					<input type="hidden" name="gMnu2" value="10402">
					<input type="hidden" name="sGo" value="1">
					<input type="hidden" name="sBbCode" value="2">
					<input type="hidden" name="sStateNm" value="">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>


					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">前言</font></font></th>



					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文章编号</font></font></th>
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
						<input type="text" name="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="" id="dp1653530414020"><img src="./n-2_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="" id="dp1653530414021"><img src="./n-2_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>



					<td>
						<select name="sClassNm">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="代理货运"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></option>

								<option value="代理购买"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购代理</font></font></option>

								<option value="预付金"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订金</font></font></option>

								<option value="결제"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付</font></font></option>

								<option value="기타"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ETC</font></font></option>

						</select>
					</td>



					<td>
						<input type="text" name="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sCont" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sBbsSeq" maxlength="7" class="iptBox1 EnterKey" onBlur="this.value=fnNumChk(this.value);" style="width:80px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnBbs_W(&#39;2&#39;, &#39;0&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发布</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="104">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10402">

				<table border="1">
				<colgroup>
				<col width="5%">
				<col width="*">

					<col width="8%">

				<col width="9%">
				<col width="6%">
				<col width="12%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>

						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th>

					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">浏览数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
				</tr>

				<!-- B: 공지글 -->

				<!-- E: 공지글 -->

				<!-- B: 일반글 -->

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

							<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-14 15:09</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></td>
					<td class="alLeft padL1 vm_box">

							<span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[付款]</font></font></span>

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">询问</font></font></span></td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">赢家</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-17 23:08</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></td>
					<td class="alLeft padL1 vm_box">

							<span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【来源请求】</font></font></span>

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-11-10 18:06</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36</font></font></td>
					<td class="alLeft padL1 vm_box">

							<span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【派送机构】</font></font></span>

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新查询</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-11-10 17:26</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-12 19:58</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-12 17:30</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

							<img src="./n-2_files/icon_file.gif" align="absmiddle">

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

							<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-30 13:41</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回答完毕</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-30 11:14</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>

						<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">询问</font></font></span></td>

					<td class="alCenter">

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-30 10:45</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></td>
					<td class="alLeft padL1 vm_box">

							<span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[代购]</font></font></span>

						<a href="n8.html" onClick="fnView_S(&#39;98&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试标题</font></font></a>

							<img src="./n-2_files/icon_file.gif" align="absmiddle">

					</td>

						<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">询问</font></font></span></td>

					<td class="alCenter">

							<a href="javascript:" memcode="41" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></a>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020-07-02 16:42</font></font></span></td>
				</tr>


				<!-- E: 일반글 -->

				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
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
