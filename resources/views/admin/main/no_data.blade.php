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
<script type="text/javascript" src="{{ asset('/admin_files/main/Nodata_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">
<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO DATE</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">综合机构管理 &gt; 无数据</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->



			<p style="height:15px;"></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="101">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10104">
				<input type="hidden" name="sGo" id="sGo" value="1">

			<div class="search-board">
				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期搜索</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NO data</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">匹配</font></font></th>
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
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./m2_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./m2_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<select name="sCenterSeq">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 总计</font></font></option>

								<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]威海</font></font></option>

								<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国]青岛</font></font></option>

								<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[中国] 广州</font></font></option>

						</select>
					</td>
					<td>
						<input type="text" name="sPostNo" id="sPostNo" maxlength="15" class="iptBox1 EnterKey" style="width:90px;" value="">
					</td>
					<td>
						<input type="text" name="sRackNo" id="sRackNo" maxlength="10" class="iptBox1 EnterKey" style="width:90px;" value="">
					</td>
					<td>
						<input type="text" name="sTrkNo" id="sTrkNo" maxlength="40" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<input type="text" name="sProNm" id="sProNm" maxlength="100" class="iptBox1 EnterKey" style="width:100px;" value="">
					</td>
					<td>
						<input type="text" name="sNoDataSeq" maxlength="15" class="iptBox1 EnterKey" style="width:100px;" onBlur="this.value=fnNumChk(this.value);" value="">
					</td>
					<td>
						<select name="sStateCd">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

								<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></option>

								<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">匹配完成</font></font></option>

								<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></option>

								<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最终完成</font></font></option>

						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp; &nbsp;

							<select name="DEL_DATE">
							<option value="D1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有Nodata 1年前</font></font></option>
							<option value="D2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nodata 已于 1 年前完成</font></font></option>
							</select>
							<span class="whRedBtn_bg ty2"><button type="button" class="txt" onClick="fnNodataOld_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除旧的nodata</font></font></button></span> &nbsp;
							<!--span class="whGraBtn_bg ty2"><button type="button" class="txt" OnClick="fnSearch('frmSearch', '1');">엑셀다운로드</button></span-->
						</div>
					</td>
				</tr>
				</tbody></table>
				<!-- End 검색 폼 -->
			</div>

			</form>



			<div class="notice-board">

				<form name="frmList" id="frmList">

				<table border="1">
				<colgroup>
					<col width="5%">
					<col width="6%">
					<col width="5%">
					<col width="8%">
					<col width="12%">
					<col width="*">
					<col width="6%">
					<col width="7%">
					<col width="7%">
					<col width="7%">
					<col width="8%">
					<col width="7%">
					<col width="10%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">成员姓名</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">跟踪号</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机架号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货到付款</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库者</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结果</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">51</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=445654654654&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="51" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_51" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter">
							<br>
							<a href="javascript:" memcode="0" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="0">
							<span class="bold"></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html?" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">445654654654</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：D-the-107
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理1</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-10-28 18:03</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;51&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;51&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=BB123123&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="49" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_49" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="1"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="1">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BB123123</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:55</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;49&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;49&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=GG123123&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="48" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_48" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="2"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="2">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GG123123</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：Ha-A-001
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:55</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;48&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;48&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=AB343434&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="47" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_47" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="3"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="3">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AB343434</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:55</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;47&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;47&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">46</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=HARRY123&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="46" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_46" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="4"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="4">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HARRY123</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:54</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;46&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;46&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=132213123123&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="45" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_45" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="5"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="5">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">132213123123</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:54</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;45&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;45&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=AB121212&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="44" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_44" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="6"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="6">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AB121212</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:54</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;44&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;44&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=AA343434&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="43" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_43" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="7"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="7">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AA343434</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:53</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;43&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;43&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=AA232323&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="42" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_42" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="8"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="8">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AA232323</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:53</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;42&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;42&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></td>
						<td class="alCenter">
							<a href="javascript:" onClick="fnPopWinCT(&#39;/Admin/Acting/TrkPhoto_S.asp?sTrkNo=AA121212&#39;, &#39;TrkPhoto_S&#39;, 700, 700);"><img src="./m2_files/no_img.jpg" class="ProImg" data-name="41" width="70" height="70" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;"></a>
							<div id="vwProImg_41" style="position:absolute;z-index:1;display:none;">
							<img src="./m2_files/no_img.jpg" onerror="this.src=&#39;/Image/Common/no_img.jpg&#39;" style="border:1px solid #aaa;">
						</div>
						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							sp28</font><a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="9"><span class="bold"><font style="vertical-align: inherit;">测试</font></span></a></font><br>
							<a href="javascript:" memcode="41" popurl="/Admin/Member/MemPopMenu_S.asp" class="tipMem" data-hasqtip="9">
							<span class="bold"><font style="vertical-align: inherit;"></font></span>
							</a>
						</td>
						<td class="alCenter">
							<a href="/admin/main.html" target="_blank"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AA121212</font></font></span></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							机架：
						</font></font></td>
						<td class="alCenter"><span class="bold"></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></span></td>
						<td class="alCenter"><span class="ft_11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理</font></font></span></td>
						<td class="alCenter">

						</td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021-09-28 10:52</font></font></td>
						<td class="alCenter">
							<span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未匹配</font></font></span><br>
						</td>
						<td class="listBtn">

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M2(&#39;41&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></button>
							</span>

							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;41&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>

						</td>
					</tr>


				</tbody></table>

				</form>

			</div>

			<div class="pagDv">
				<table style="width:98%;">
				<tbody><tr>
					<td>
						<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, 2);"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					</td>
					<td class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> /
						 </font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
						 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
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



<!-- body content end-->
@endsection
