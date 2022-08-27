@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/announcement/Bbs_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box" style="width:70%;">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告管理 &gt; 通知</font></font></h4>
		</div>

		<div class="box-container corners02">





			<!-- Begin 검색 폼 -->
			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="104">
					<input type="hidden" name="gMnu2" value="10402">
					<input type="hidden" name="sGo" value="1">
					<input type="hidden" name="sBbCode" value="1">
					<input type="hidden" name="sStateNm" value="">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>


					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文章编号</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<select name="sPageSize">
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
						<input type="text" name="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653530432165"><img src="./n-3_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653530432166"><img src="./n-3_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>



					<td>
						<input type="text" name="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sCont" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="">
					</td>
					<td>
						<input type="text" name="sBbsSeq" maxlength="7" class="iptBox1 EnterKey" onblur="this.value=fnNumChk(this.value);" style="width:80px;" value="">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onclick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnBbs_W(&#39;1&#39;, &#39;0&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发布</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="104">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10402">

				<table border="1">
				<colgroup>
				<col width="5%">
				<col width="*">

				<col width="9%">
				<col width="6%">
				<col width="12%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>

					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">浏览数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
				</tr>

				<!-- B: 공지글 -->


				<tr>
					<td class="ntc alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注意</font></font></span></td>
					<td class="ntc alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;39&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员测试测试</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[1]</font></font></span></a>

							<img src="./n-3_files/icon_file.gif" align="absmiddle">

					</td>

					<td class="ntc alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="ntc alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">81</font></font></span></td>
					<td class="ntc alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-08-14 09:50</font></font></span></td>
				</tr>



				<tr>
					<td class="ntc alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注意</font></font></span></td>
					<td class="ntc alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;6&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arum 解决方案 2.0 版本诞生</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[2]</font></font></span></a>

					</td>

					<td class="ntc alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="ntc alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">59</font></font></span></td>
					<td class="ntc alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-25 13:04</font></font></span></td>
				</tr>


				<!-- E: 공지글 -->

				<!-- B: 일반글 -->

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;50&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></a>

							<img src="./n-3_files/icon_file.gif" align="absmiddle">

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-11-01 15:53</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;49&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></a>

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-10-02 16:13</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;39&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员测试测试</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[1]</font></font></span></a>

							<img src="./n-3_files/icon_file.gif" align="absmiddle">

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">81</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-08-14 09:50</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;16&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[1]</font></font></span></a>

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-08-07 11:09</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;6&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arum 解决方案 2.0 版本诞生</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[2]</font></font></span></a>

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">59</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-25 13:04</font></font></span></td>
				</tr>


				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td class="alLeft padL1 vm_box">

						<a href="javascript:" onclick="fnView_S(&#39;5&#39;);" class="Black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font><span class="recCnt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[3]</font></font></span></a>

					</td>

					<td class="alCenter">

							<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span>

					</td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span></td>
					<td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2019-07-25 13:03</font></font></span></td>
				</tr>


				<!-- E: 일반글 -->

				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
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
