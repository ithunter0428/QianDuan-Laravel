@extends('admin.layouts')

@section('stylesheets')
@endsection

@section('style')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/n-1_files/BbSet_L.js')}}"></script>
@endsection

@section('content')
	<!-- body content start-->
	<div class="body-content left-M-0">
		<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告设置</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏管理 &gt; 公告设置</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=A&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏确认</font></font></button></span>


			<p class="clrBoth pHt10"></p>


			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="12%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="6%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏ID名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类型</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用密码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用状态</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否写权限</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否查看</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论权限</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1咨询 (2)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1查询（我自己的帖子）</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仅限会员</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=2&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知 (1)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">普通的</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=1&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务查询/建议 (6)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1:1查询（我自己的帖子）</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仅限会员</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=6&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;6&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动 (5)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">缩略图</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仅限会员</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=5&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论 (4)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审查</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仅限会员</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=4&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;4&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题 (FAQ) (3)</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常问问题</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全部</font></font></span></td>
					<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=M&amp;sBbCode=3&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;3&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
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
