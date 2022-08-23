@extends('admin.layouts')

@section('stylesheets')
@endsection

@section('style')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/mem1_files/Mem_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
    <div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 会员列表</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10201">
					<input type="hidden" name="sGo" id="sGo" value="1">
					<input type="hidden" name="sDelYn" id="sDelYn" value="N">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
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
						<select name="sGradeNo">
							<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sMemId" id="sMemId" maxlength="100" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sPostNo" id="sPostNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10201">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="11%">
				<col width="15%">
				<col width="11%">
				<col width="8%">
				<col width="7%">
				<col width="9%">
				<col width="9%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><label><input type="checkbox" name="ckMEM_CODE_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckMEM_CODE_ALL&#39;, &#39;ckMEM_CODE&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员代码</font></font></label></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款 (￦)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上次访问日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="400">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">400</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1]</font></font><a href="javascript:" memcode="400" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">叶娜琳</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rswinner123</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP400</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01093497611</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-04-07 13:56</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=400&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;400&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="395">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">395</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1]</font></font><a href="javascript:" memcode="395" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李雅润</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">asdf123</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP395</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01085236985</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-03-23 17:17</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=395&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;395&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="377">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">377</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1]</font></font><a href="javascript:" memcode="377" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">佳仁雄</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">斯巴达13</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP377</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01032131319</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-02-11 16:56</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=377&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;377&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="341">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">341</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1] Kim Ah </font></font><a href="javascript:" memcode="341" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-reum</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试123</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP341</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01085479632</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-01-13 10:00</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-02 11:07</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=341&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;341&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="327">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">327</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1]</font></font><a href="javascript:" memcode="327" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">李龙宇</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GOOGLE_327</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP327</font></font></span></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-30 14:41</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-30 14:40</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=327&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;327&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="326">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">326</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 1]</font></font><a href="javascript:" memcode="326" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">乔亚拉</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GOOGLE_326</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP326</font></font></span></td>
					<td class="alCenter"><span class=""></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-30 14:41</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-07-30 14:38</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=326&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;326&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="286">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">286</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[等级 5]</font></font><a href="javascript:" memcode="286" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">贾蒙</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">贾蒙12</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP286</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01054898465</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-01-13 10:00</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-04-02 11:29</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=286&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;286&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="269">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">269</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 5]</font></font><a href="javascript:" memcode="269" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">崔在赫</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">qjsornt</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP269</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01092938150</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-03-05 11:15</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-03-04 18:55</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=269&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;269&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="268">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">268</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 5]</font></font><a href="javascript:" memcode="268" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">姜永勋</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">yjml</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP268</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01034624318</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-03-05 09:54</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-03-04 18:51</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=268&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;268&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter">
						<label class=""><input type="checkbox" name="ckMEM_CODE" value="250">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">250</font></font></span>
					</label></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						[Level 5]</font></font><a href="javascript:" memcode="250" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金哲洙</font></font></span></a>
					</td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hyd1500</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP250</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01064000064</font></font></span></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-01-19 00:52</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-01-19 00:18</font></font></span></td>
					<td class="listBtn">

							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=250&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnOut_M(&#39;250&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
						</span>
					</td>
				</tr>

				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="Status-change">

						<select name="GRADE_NO" class="vm">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择年级</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></option>

						</select>
						<span class="whGraBtn ty2 vm"><button type="button" class="txt" onClick="fnGradeChg_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年级变化</font></font></button></span>

				</div>
					<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 3);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 4);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
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
