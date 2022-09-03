@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/management/ShopSite_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物信息管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 购物信息管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>
					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Homepage/ShopSite_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物信息管理</font></font></a></td>
					<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Homepage/ShopSiteCate_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类管理</font></font></a></td>
				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="105">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10508">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类别</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th>
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
						<select name="sNationSeq" id="sNationseq">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

							<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></option>

						</select>
					</td>
					<td>
						<select name="sCateSeq" id="sCateSeq">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

							<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/家电</font></font></option>

							<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运动服</font></font></option>

							<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">鞋/杂货</font></font></option>

							<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">婴儿/儿童</font></font></option>

							<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服装</font></font></option>

							<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合商场</font></font></option>

							<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">化妆品</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sSiteNm" maxlength="40" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./ShopSite_W.asp&#39;, &#39;ShopSite_W&#39;, 1000, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站注册</font></font></button></span>
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
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="12%">
				<col width="25%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类别</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站网址</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp4_files/ShopSite__20190713q88evc.png" width="165" height="55" style="border:1px solid #777;" onerror="this.src=&#39;/Image/Common/site_no_img.jpg&#39;"></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合商场</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">淘宝</font></font></span></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">http://www.taobao.com</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./ShopSite_W.asp?sSiteSeq=1&#39;, &#39;ShopSite_W&#39;, 1000, 450);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td><a href="http://www.tmall.com/" target="_blank"><img src="./mp4_files/ShopSite__20190713h9fw1x.png" width="165" height="55" style="border:1px solid #777;" onerror="this.src=&#39;/Image/Common/site_no_img.jpg&#39;"></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合商场</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">百里酚</font></font></span></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">http://www.tmall.com</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./ShopSite_W.asp?sSiteSeq=2&#39;, &#39;ShopSite_W&#39;, 1000, 450);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
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
