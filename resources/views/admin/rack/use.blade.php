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
<script type="text/javascript" src="{{ asset('/admin_files/management/RackUse_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架使用管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架管理 &gt; 机架使用管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="10%">
				<col width="13%">
				<col width="10%">
				<col width="15%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货架代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尺寸</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO data</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">哈哈</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">哈-A-001</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=GG123123" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GG123123</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021.09.28</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;하-A-001&#39;,&#39;GG123123&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-001</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=ABC654S654" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ABC654S654</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S210004</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021.10.28</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-001&#39;,&#39;ABC654S654&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-002</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=T240385082221" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T24038582221</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910001</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.21</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-002&#39;,&#39;T240385082221&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-003</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=N47477112665" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N47477112665</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910010</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.10.13</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-003&#39;,&#39;N47477112665&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-004</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=SA7881144559" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SA7881144559</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910009</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.08.08</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-004&#39;,&#39;SA7881144559&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-005</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=A744558521141" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A744558521141</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910002</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.21</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-005&#39;,&#39;A744558521141&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-006</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=9642531658" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9642531658</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910021</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.04.09</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-006&#39;,&#39;9642531658&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-007</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=1233" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1233</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S2000031</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.10.13</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-007&#39;,&#39;1233&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-围棋</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-A-009</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=STOCKA12345679879" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存12345679879</font></font></a></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S1910022</font></font></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.09.15</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-가-009&#39;,&#39;STOCKA12345679879&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-101</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=787878" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">787878</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.09.23</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-101&#39;,&#39;787878&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-102</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=GHGHGH" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">生长激素</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.10.05</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-102&#39;,&#39;GHGHGH&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-103</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=TEST123456" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试123456</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.23</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-103&#39;,&#39;TEST123456&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-104</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=R188874300" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R188874300</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.08.08</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-104&#39;,&#39;R188874300&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-105</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=IEM5421E884155S" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IEM5421E884155S</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.10.10</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-105&#39;,&#39;IEM5421E884155S&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-106</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=7979797979" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7979797979</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019.07.24</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-106&#39;,&#39;7979797979&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">达达</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D-C-107</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">middle</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=445654654654" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">445654654654</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">51</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021.10.28</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;D-다-107&#39;,&#39;445654654654&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GR-A</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GR-A-001</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=A123456789" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A123456789</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022.01.23</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;GR-A-001&#39;,&#39;A123456789&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XX-XX</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XX-XX-001</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">small</font></font></td>
					<td class="alCenter"><a href="/admin/main.html?sTrkNo=155" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">155</font></font></a></td>
					<td class="alCenter"></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.07.16</font></font></td>
					<td class="listBtn">
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnReset_M(&#39;XX-XX-001&#39;,&#39;155&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重置</font></font></button></span>
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
