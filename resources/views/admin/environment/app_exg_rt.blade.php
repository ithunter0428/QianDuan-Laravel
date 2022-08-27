@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/ApplExgRt_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">适用汇率</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 应用汇率</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co.kr/Admin/Setup/ApplExgRt_L.asp?sNationSeq=3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->



			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./ApplExgRt_W.asp?sNationSeq=3&#39;, &#39;ApplExgRt_W&#39;, 800, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇率确认</font></font></button></span>


			<p class="clrBoth pHt30"></p>

			<!--iframe src="http://fx.kebhana.com/FER0001D.web" width="460" height="140" border="0" frameborder="no" scrolling="no" marginwidth="0"></iframe-->

			<p class="clrBoth pHt10"></p>

			<p class="mgB10 ft_30 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中文：￥ 1.00 = ￦ 187.53</font></font></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10808">
				<input type="hidden" name="sGo" id="sGo" value="1">
				<input type="hidden" name="sPageSize" id="sPageSize" value="20">

			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="10%">
				<col width="20%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">期间（标题）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇率</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0324</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">208</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;7&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">185</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;6&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">七月第三周</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">180</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;4&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">七月的第二周</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">171.5</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				</tbody></table>
			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt">
					<span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
					 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
				</div>
			</div>

		</form>
		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>
@endsection
