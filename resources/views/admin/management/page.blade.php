@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/management/HtmlPage_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页面管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页管理 &gt; 页面管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=A&amp;sPageSeq=&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册页面</font></font></button></span>


			<p class="clrBoth pHt10"></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="105">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10505">

			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="20%">
				<col width="8%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页面ID名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>

				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">同意收集、提供和使用个人信息</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="1">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=1&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关/增值税信息</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="6">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=6&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;6&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="17">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=17&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;17&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">换货/退货信息</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="9">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=9&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;9&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">代购申请 - 备注</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="14">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=14&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;14&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">如何使用代购</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="4">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=4&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;4&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">什么是采购交付？</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="16">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=16&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;16&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">无数据处理方式</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="11">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=11&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;11&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请派送员 - 须知</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="13">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=13&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;13&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">如何使用货运代理</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="3">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=3&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;3&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费信息</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="20">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=20&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;20&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">进口违禁品</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="7">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=7&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;7&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阿鲁姆安全护理指南</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="18">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=18&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;18&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务条款</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="2">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=2&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存管理系统</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="10">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=10&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;10&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">如何输入淘宝地址</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="5">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=5&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="19">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=19&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;19&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处置/检疫信息</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="8">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=8&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;8&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">底部副本</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<!--span class="whGraBtn ty2"><button type="button" class="txt BtnView" PageSeq="12">보기</button></span> &nbsp;-->
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./HtmlPage_W.asp?sKind=M&amp;sPageSeq=12&#39;, &#39;HtmlPage_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onClick="fnDel_M(&#39;12&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>

				</tbody></table>
			</div>

		</form>
		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>
@endsection
