@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/IslandFee_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">试点费用管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置 &gt; 试点费用管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="108">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10812">
					<input type="hidden" name="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize" id="sPageSize">
							<option value="10" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
<option value="60"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60</font></font></option>
<option value="70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">70</font></font></option>
<option value="80"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">80</font></font></option>
<option value="90"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90</font></font></option>
<option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sAddr" maxlength="20" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./IslandFee_W.asp?sKind=A&amp;sFeeSeq=&#39;, &#39;IslandFee_W&#39;, 1000, 330);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">渡轮收费区确认</font></font></button></span>
							<!--span class="whGraBtn_bg ty2"><button type="button" class="txt" OnClick="fnSearch('frmSearch', '1');">엑셀다운로드</button></span-->
						</div>
					</td>
				</tr>
				</tbody></table>
				<!-- End 검색 폼 -->

				</form>

			</div>

			<p class="clrBoth pHt10"></p>


			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="8%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="*">
				<col width="10%">
				<col width="10%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关键词(1)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关键词(2)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关键词(3)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">渡轮费</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值运费</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">备注</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期（修改日期）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>

				</tr>

				<tr>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">统营</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">寒山面</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">核桃 2-gil</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4,000</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.12.24 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(2020.08.07)</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./IslandFee_W.asp?sKind=M&amp;sFeeSeq=1&#39;, &#39;IslandFee_W&#39;, 1000, 330);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				</tbody></table>

			</div>

			<div class="pagDv">
				<table style="width:98%;">
				<tbody><tr>
					<td>
						<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					</td>
					<td class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> /
						 </font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
						 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
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
