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
<script type="text/javascript" src="{{ asset('/admin_files/management/RecomPro_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推荐产品管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 推荐产品管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

						<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Homepage/RecomPro_L.asp?sRecomDvsCd=1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MD 选择</font></font></a></td>

						<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Homepage/RecomPro_L.asp?sRecomDvsCd=2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">热卖</font></font></a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="105">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10507">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
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
						<label><input type="radio" name="sNationSeq" value="" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部的</font></font></label> &nbsp;

							<label><input type="radio" name="sNationSeq" value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></label> &nbsp;

					</td>
					<td>
						<input type="text" name="sProNm" id="sProNm" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp&#39;, &#39;RecomPro_W&#39;, 1000, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品注册</font></font></button></span>
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
				<col width="6%">
				<col width="8%">
				<col width="8%">
				<col width="30%">
				<col width="8%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td><a href="https://detail.1688.com/offer/600347749813.html" target="_blank"><img src="./mp2_files/RecomPro__20200121g8sxiu.jpg" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="https://detail.1688.com/offer/600347749813.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最佳</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥53.00</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=10&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;10&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp2_files/RecomPro__20190803f4pcrm.png" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="http://www.taobao.com/" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Good Shoes RE 4100 皮革细高跟高跟鞋</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥175.12</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=7&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;7&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp2_files/RecomPro__201908032xz5jr.png" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="http://www.taobao.com/" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Good Shoes RE 4100 皮革细高跟高跟鞋</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥175.12</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=5&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp2_files/RecomPro__20190803l6u1kq.png" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="http://www.taobao.com/" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Good Shoes RE 4100 皮革细高跟高跟鞋</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥175.12</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=4&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;4&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp2_files/RecomPro__20190803jaiwb8.png" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="http://www.taobao.com/" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Good Shoes RE 4100 皮革细高跟高跟鞋</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥180.52</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=3&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;3&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td>
					<td><a href="http://www.taobao.com/" target="_blank"><img src="./mp2_files/RecomPro__20190803tm1xkd.png" width="100%" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a></td>
					<td class="alCenter">
						<img src="./mp2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span>
					</td>
					<td class=""><a href="http://www.taobao.com/" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Good Shoes RE 4100 皮革细高跟高跟鞋</font></font></span></a></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥180.52</font></font></span></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./RecomPro_W.asp?sProSeq=2&#39;, &#39;RecomPro_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				</tbody></table>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
								<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
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
