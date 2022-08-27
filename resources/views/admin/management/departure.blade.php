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
<script type="text/javascript" src="{{ asset('/admin_files/management/Departure_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发时间管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 班次管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->



			<p style="height:15px;"></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="105">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10509">

			<div class="search-board">
				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期搜索</font></font></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="2022-05-01"><img src="./mp3_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
						</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value="2022-05-31"><img src="./mp3_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Departure_W.asp&#39;, &#39;Departure_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">安排注册</font></font></button></span>
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
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="*">
					<col width="10%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">出发时间</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发货方式</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">备注</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-08</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;251&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-08</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航空公司</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;252&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-09</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;253&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-09</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航空公司</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;254&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-09</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;259&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-10</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;255&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-10</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航空公司</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;256&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-10</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;260&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-11</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;261&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-13</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;257&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-13</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航空公司</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;258&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-20</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;241&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-22</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;242&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-23</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;243&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-24</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;244&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-25</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;245&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-26</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;246&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-27</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;247&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-29</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;248&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-30</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;249&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
							</span>
						</td>
					</tr>


					<tr>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-31</font></font></strong></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20:00</font></font></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></strong></td>
						<td class="alCenter"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></strong></td>
						<td class="alLeft"></td>
						<td class="listBtn">
							<span class="whRedBtn">
								<button type="button" class="txt" onClick="fnDel_M(&#39;250&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
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
						<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					</td>
					<td class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> /
						 </font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
						 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></span>
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
