@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/BankAcc_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款账户管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置 &gt; 存款账户管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BankAcc_W.asp?sKind=A&amp;sAccSeq=&#39;, &#39;BankAcc_W&#39;, 1000, 220);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款账户注册</font></font></button></span>

			<p class="clrBoth pHt10"></p>


			<div class="notice-board">


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10806">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="10%">
				<col width="15%">
				<col width="10%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">银行名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">账户持有人</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>

				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国民银行</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">98478430758</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆解决方案有限公司</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BankAcc_W.asp?sKind=M&amp;sAccSeq=5&#39;, &#39;BankAcc_W&#39;, 1000, 220);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新韩银行</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">123-456-78910</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆解决方案有限公司</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BankAcc_W.asp?sKind=M&amp;sAccSeq=2&#39;, &#39;BankAcc_W&#39;, 1000, 220);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				</tbody></table>

				</form>

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
