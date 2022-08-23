@extends('admin.layouts')

@section('stylesheets')
@endsection

@section('style')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/mp1_files/MainRolling_L.js') }}"></script>
@endsection

@section('content')
	<div class="body-content left-M-0">
		<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 主滚动条</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

						<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co.kr/Admin/Homepage/MainRolling_L.asp?sBannerDvsCd=1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主要 - 滚动横幅</font></font></a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./MainRolling_W.asp?sBnrDvsCd=1&#39;, &#39;MainRolling_W&#39;, 1000, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅注册</font></font></button></span>
			<span class="whGrnBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./BannerSort_W.asp?sBnrDvsCd=&#39;, &#39;BannerSort_W&#39;, 600, 600);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅对齐</font></font></button></span>
			<span class="whGraBtn_bg ty2 ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;http://intra.areumsoft.co.kr/Client/Design/Banner_L.asp?ClientCode=Z1000&#39;, &#39;배너템플릿&#39;, 1400, 950);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅模板</font></font></button></span>



			<p class="clrBoth pHt10"></p>


			<div class="notice-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="105">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10501">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table border="0">
				<colgroup>
				<col width="7%">
				<col width="12%">
				<col width="13%">
				<col width="6%">
				<col width="6%">
				<col width="*%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网址</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">目标</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td><img src="./mp1_files/MainRolling_1_20200220yyqon8.png" width="100%" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;"></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货运代理</font></font></span></td>
					<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<p class="padL1">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./MainRolling_W.asp?sBnrDvsCd=1&amp;sBnrSeq=45&amp;sKind=M&#39;, &#39;MainRolling_W&#39;, 1000, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;45&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
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
