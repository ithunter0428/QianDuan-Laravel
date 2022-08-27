@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/management/Popup_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">


<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">弹窗管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 弹窗管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<div class="search-board">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="105">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10504">
					<input type="hidden" name="sGo" id="sGo" value="1">

				<table cellspacing="1">
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示中与否</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
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
						<input type="text" name="sSbj" id="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="">
					</td>
					<td>
						<select name="sOpenYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示中</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></option>
						</select>
					</td>
					<td>
						<select name="sUseYn">
							<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
							<option value="Y"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></option>
							<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></option>
						</select>
					</td>
					<td>
						<div class="">
							<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
							<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">弹窗注册</font></font></button></span>
						</div>
					</td>
				</tr>
				</tbody></table>

				</form>
				<!-- End 검색 폼 -->

			</div>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="5%">
				<col width="25%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">坐标</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中央</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尺寸</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示中与否</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td>
					<td>
						<a href="javascript:" seq="8" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㅇㅇㅇㅇ ㅇㅇㅇㅇㅇㅇ</font></font></a>
						<div id="js-layer8" class="LayerPop hidden" style="width:50px;height:110px;">
							<div id="js-layer-cont8"></div>
							<div class="LayerClose">
								<form name="frmLayerPop8">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="8" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 * 0</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50×50</font></font></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=8&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;8&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></td>
					<td>
						<a href="javascript:" seq="7" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">如何使用弹出窗口</font></font></a>
						<div id="js-layer7" class="LayerPop hidden" style="width:500px;height:660px;">
							<div id="js-layer-cont7"></div>
							<div class="LayerClose">
								<form name="frmLayerPop7">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="7" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 * 0</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中央</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500×600</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示中</font></font></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=7&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;7&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td>
					<td>
						<a href="javascript:" seq="6" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">夏季销售测试</font></font></a>
						<div id="js-layer6" class="LayerPop hidden" style="width:450px;height:860px;">
							<div id="js-layer-cont6"></div>
							<div class="LayerClose">
								<form name="frmLayerPop6">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="6" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 * 0</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中央</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">450 x 800</font></font></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=6&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;6&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td>
					<td>
						<a href="javascript:" seq="5" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></a>
						<div id="js-layer5" class="LayerPop hidden" style="width:autopx;height:autopx;">
							<div id="js-layer-cont5"></div>
							<div class="LayerClose">
								<form name="frmLayerPop5">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="5" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">300 * 300</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0×0</font></font></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=5&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td>
					<td>
						<a href="javascript:" seq="2" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">70% 折扣活动</font></font></a>
						<div id="js-layer2" class="LayerPop hidden" style="width:350px;height:410px;">
							<div id="js-layer-cont2"></div>
							<div class="LayerClose">
								<form name="frmLayerPop2">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="2" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">300 * 200</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中央</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">350 x 350</font></font></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=2&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span></td>
					<td>
						<a href="javascript:" seq="1" class="js-open open-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">秋季特别航空公司活动</font></font></a>
						<div id="js-layer1" class="LayerPop hidden" style="width:400px;height:460px;">
							<div id="js-layer-cont1"></div>
							<div class="LayerClose">
								<form name="frmLayerPop1">
									<p>
										<label><input type="checkbox" name="LayerClose"> 不在弹出</label> &nbsp; &nbsp;
										<a href="javascript:" seq="1" class="js-layer-close"> 关闭</a>
									</p>
								</form>
							</div>
						</div>
					</td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500 * 200</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">400×400</font></font></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结束</font></font></span></span></td>
					<td class="alCenter"><span class="bold"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">停止</font></font></span></span></td>
					<td class="listBtn">
						<p class="">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./Popup_W.asp?sPopupSeq=1&#39;, &#39;Popup_W&#39;, 1000, 750);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp;
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</p>
					</td>
				</tr>

				</tbody></table>

			</div>

			<div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onClick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
					<div class="CntRt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font><span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
					</div>
			</div>

		</div>


	</div>

</div>


		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SYSTEM</font></font><a href="main.html" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>
@endsection
