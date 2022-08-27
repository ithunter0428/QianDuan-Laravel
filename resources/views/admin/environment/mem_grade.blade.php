@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/MemGrade_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 会员级别管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=A&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级注册</font></font></button></span>
			<p class="clrBoth pHt10"></p>
			<div class="notice-board">
				<table border="0">
				<colgroup>
				<col width="5%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="12%">
				<col width="8%">
				<col width="6%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年级数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等级名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买手续费(%)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新优惠券</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">积分(%)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0到1</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦100 / 0 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=1&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 到 20</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦1000 / 1 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=2&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">61 至 90</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 1 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=3&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">91 至 120</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 2 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=4&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">121 至 999999</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 3 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=5&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

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
