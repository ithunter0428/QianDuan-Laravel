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
<script type="text/javascript" src="{{ asset('/admin_files/management/Rack_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理 &gt; 机架管理</font></font></h4>
		</div>

		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<select name="sCenterSeq">
				<!--option value="">= 선택</option-->

					<option value="5" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]威海</font></font></option>

					<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]青岛</font></font></option>

					<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国] 广州</font></font></option>

			</select>

			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Rack_W.asp?sKind=A&amp;sCenterSeq=5&#39;, &#39;Rack_W&#39;, 700, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架注册</font></font></button></span>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="10%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区分</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货架代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尺寸</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">开始/结束</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架总数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用机架数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用的机架数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">普通的</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GR-A</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 到 110</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">110</font></font></td>
					<td class="alCenter"><span class="bold clrBlue1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">109</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021.09.23</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackPop_S.asp?sRackCode=GR%2DA&amp;TotalCnt=110&amp;UseCnt=1&#39;, &#39;RackPop_S&#39;, 1200, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号详细信息</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackAdd_W.asp?sRackCode=GR%2DA&#39;, &#39;RackAdd_W&#39;, 500, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加机架号</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackMod_W.asp?sKind=M&amp;sRackCode=GR%2DA&#39;, &#39;RackMod_W&#39;, 400, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;GR-A&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">101 至 203</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">103</font></font></td>
					<td class="alCenter"><span class="bold clrBlue1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">96</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.15</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackPop_S.asp?sRackCode=D%2D%EB%8B%A4&amp;TotalCnt=103&amp;UseCnt=7&#39;, &#39;RackPop_S&#39;, 1200, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号详细信息</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackAdd_W.asp?sRackCode=D%2D%EB%8B%A4&#39;, &#39;RackAdd_W&#39;, 500, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加机架号</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackMod_W.asp?sKind=M&amp;sRackCode=D%2D%EB%8B%A4&#39;, &#39;RackMod_W&#39;, 400, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存货</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 到 60</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60</font></font></td>
					<td class="alCenter"><span class="bold clrBlue1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">52</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.16</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackPop_S.asp?sRackCode=D%2D%EA%B0%80&amp;TotalCnt=60&amp;UseCnt=8&#39;, &#39;RackPop_S&#39;, 1200, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号详细信息</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackAdd_W.asp?sRackCode=D%2D%EA%B0%80&#39;, &#39;RackAdd_W&#39;, 500, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加机架号</font></font></button></span>
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./RackMod_W.asp?sKind=M&amp;sRackCode=D%2D%EA%B0%80&#39;, &#39;RackMod_W&#39;, 400, 250);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>

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
