@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/CtmsItem_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">物品管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 项目管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>
					<td class="on" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Setup/CtmsItem_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关物品</font></font></a></td>
					<td class="" style="width:120px;"><a href="http://ds2.areumsoft.co/Admin/Setup/CtmsItemCate_L.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关物品类别</font></font></a></td>
				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->

			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=A&amp;sItemSeq=&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关物品确认</font></font></button></span>


			<p class="clrBoth pHt10"></p>


			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="8%">
				<col width="8%">
				<col width="12%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
				<col width="8%">
				<col width="8%">
				<col width="6%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目编号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HS编码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类别</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目名称（英文）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目名称（中文）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">列表是否清空</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关税税率</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值税率</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">346</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家庭</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=346&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;346&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">347</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具配件</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具配件</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=347&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;347&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">348</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯笼灯</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯笼</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=348&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;348&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">349</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=349&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;349&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">350</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">床垫</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">床垫</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">舒缓</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=350&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;350&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">351</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一个垫子</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">靠垫</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">靠垫</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=351&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;351&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">352</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">枕头</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">枕头</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客栈</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=352&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;352&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">353</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">婴儿学步车</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推车</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推车</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=353&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;353&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">354</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">瞎的</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">瞎的</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时装用品</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=354&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;354&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">355</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">架子</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">架子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">孩子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=355&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;355&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">356</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">沙发</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">沙发</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">沙发</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=356&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;356&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">357</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">壁橱</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">贮存</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收容箱</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=357&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;357&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">358</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睡袋（睡袋）</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睡袋</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睡袋</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=358&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;358&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">359</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">91</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">钟</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">钟</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">表</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=359&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;359&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">360</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">室内照明灯具</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">室内照明灯具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">照明灯具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=360&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;360&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">361</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">婴儿床</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">儿童床</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">儿童床</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=361&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;361&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">362</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">相框</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">框架</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">框</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=362&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;362&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">363</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">57</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地毯</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地毯</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">土地</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=363&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;363&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">364</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">婴儿椅</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">婴儿椅</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">儿童椅</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=364&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;364&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">365</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">医疗椅</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">医疗椅</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">医用椅子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=365&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;365&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">366</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">椅子</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">椅子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">孩子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=366&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;366&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">367</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">63</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">毯子</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">被子</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">岳母</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=367&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;367&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">368</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">室内装饰</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">室内装饰</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">装饰品</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=368&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;368&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">369</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电动坐垫</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电动坐垫</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电垫座垫</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=369&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;369&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">370</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电动支架</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">落地灯</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯具</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=370&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;370&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">371</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具/照明</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电热毯</font></font></span></td>
					<td>Electric blanket</td>
					<td>电热毯</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=371&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;371&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>372</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">정리함</span></td>
					<td>utility box</td>
					<td>收纳箱</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=372&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;372&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>373</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">책상</span></td>
					<td>Desk</td>
					<td>桌子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=373&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;373&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>345</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">책장</span></td>
					<td>Bookcase</td>
					<td>书架</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=345&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;345&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>374</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">침대</span></td>
					<td>Bed</td>
					<td>床</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=374&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;374&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>375</td>
					<td>63</td>
					<td>가구/조명</td>
					<td><span class="bold">침대커버</span></td>
					<td>Bedcover</td>
					<td>床罩</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=375&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;375&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>376</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">카시트</span></td>
					<td>Car Seat</td>
					<td>汽车垫</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=376&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;376&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>377</td>
					<td>57</td>
					<td>가구/조명</td>
					<td><span class="bold">카펫</span></td>
					<td>Carpet</td>
					<td>地垫</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=377&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;377&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>378</td>
					<td>63</td>
					<td>가구/조명</td>
					<td><span class="bold">커튼</span></td>
					<td>Curtain</td>
					<td>窗帘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=378&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;378&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>379</td>
					<td>63</td>
					<td>가구/조명</td>
					<td><span class="bold">쿠션</span></td>
					<td>Cushion</td>
					<td>靠垫 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=379&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;379&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>380</td>
					<td>63</td>
					<td>가구/조명</td>
					<td><span class="bold">쿠션솜</span></td>
					<td>Cushion Cotton</td>
					<td>棉垫</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=380&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;380&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>381</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">테이블</span></td>
					<td>Table</td>
					<td>桌子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=381&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;381&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>382</td>
					<td>63</td>
					<td>가구/조명</td>
					<td><span class="bold">테이블보</span></td>
					<td>Tablecloths</td>
					<td>桌垫 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=382&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;382&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>383</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">행거</span></td>
					<td>hanger</td>
					<td>衣挂 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=383&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;383&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>384</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">형광등기구</span></td>
					<td>Luminaire</td>
					<td>灯具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=384&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;384&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>385</td>
					<td>69</td>
					<td>가구/조명</td>
					<td><span class="bold">화분</span></td>
					<td>flowerpot</td>
					<td>花盆</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=385&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;385&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>386</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">휴대용전등</span></td>
					<td>Portable lights</td>
					<td>移动光源</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=386&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;386&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>387</td>
					<td>94</td>
					<td>가구/조명</td>
					<td><span class="bold">LED램프</span></td>
					<td>LED Lamp</td>
					<td>灯具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=387&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;387&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>390</td>
					<td>40</td>
					<td>고무</td>
					<td><span class="bold">밴드</span></td>
					<td>rubber band</td>
					<td>橡皮圈儿</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=390&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;390&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>388</td>
					<td>40</td>
					<td>고무</td>
					<td><span class="bold">콘돔</span></td>
					<td>condom</td>
					<td>安全套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=388&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;388&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>389</td>
					<td>40</td>
					<td>고무</td>
					<td><span class="bold">튜브</span></td>
					<td>rubber tube</td>
					<td>橡皮圈</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=389&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;389&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>391</td>
					<td>96</td>
					<td>기타품목</td>
					<td><span class="bold">기타</span></td>
					<td>etc</td>
					<td>기타</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=391&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;391&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>392</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">가습기</span></td>
					<td>humidifier</td>
					<td>加湿器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=392&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;392&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>393</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">가전제품</span></td>
					<td>home appliances</td>
					<td>家用电器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=393&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;393&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>394</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">건전지</span></td>
					<td>battery</td>
					<td>电池</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=394&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;394&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>395</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">계산기</span></td>
					<td>calculator</td>
					<td>计算器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=395&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;395&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>396</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">고데기</span></td>
					<td>straightener</td>
					<td>矫直机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=396&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;396&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>397</td>
					<td>82</td>
					<td>디지털/공구</td>
					<td><span class="bold">공구/기계</span></td>
					<td>tool</td>
					<td>工具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=397&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;397&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>398</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">공기청정기</span></td>
					<td>air cleaner</td>
					<td>空气净化器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=398&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;398&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>399</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">공기청정기필터</span></td>
					<td>air cleaner filter</td>
					<td>空气滤清器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=399&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;399&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>400</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">그래픽카드</span></td>
					<td>graphic card</td>
					<td>显示卡</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=400&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;400&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>401</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">네비게이션</span></td>
					<td>navigation</td>
					<td>导航仪</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=401&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;401&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>402</td>
					<td>94</td>
					<td>디지털/공구</td>
					<td><span class="bold">네일아트용램프</span></td>
					<td>nail lamp</td>
					<td>美甲用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=402&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;402&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>403</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">노트북 PC</span></td>
					<td>notebook</td>
					<td>笔记本电脑 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=403&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;403&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>404</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">드라이어</span></td>
					<td>drier</td>
					<td>吹风机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=404&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;404&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>405</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">디지털제품</span></td>
					<td>Digital Products</td>
					<td>数码产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=405&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;405&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>406</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">라디오</span></td>
					<td>radio</td>
					<td>收音机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=406&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;406&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>407</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">라우터</span></td>
					<td>router</td>
					<td>路由器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=407&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;407&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>408</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">마이크</span></td>
					<td>microphone</td>
					<td>麦克风</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=408&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;408&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>409</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">메인보드</span></td>
					<td>mainboard</td>
					<td>主板</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=409&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;409&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>410</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">모니터</span></td>
					<td>monitor</td>
					<td>显示屏</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=410&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;410&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>411</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">무선마우스</span></td>
					<td>wireless mouse</td>
					<td>无线鼠标</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=411&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;411&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>412</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">무선키보드</span></td>
					<td>wireless keyboard</td>
					<td>无线键盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=412&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;412&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>413</td>
					<td>48</td>
					<td>디지털/공구</td>
					<td><span class="bold">문구용품</span></td>
					<td>stationery</td>
					<td>文具用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=413&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;413&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>414</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">믹서기</span></td>
					<td>blender</td>
					<td>榨汁机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=414&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;414&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>415</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">바코드스캐너</span></td>
					<td>barcodescanner</td>
					<td>条形码扫描机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=415&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;415&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>416</td>
					<td>96</td>
					<td>디지털/공구</td>
					<td><span class="bold">배터리케이스</span></td>
					<td>battery case</td>
					<td>电池盒</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=416&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;416&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>417</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">보조배터리</span></td>
					<td>battery charger</td>
					<td>充电宝</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=417&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;417&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>418</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">보풀제거기</span></td>
					<td>lint removal</td>
					<td>数码产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=418&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;418&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>419</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">블랙박스</span></td>
					<td>black box</td>
					<td>黑匣子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=419&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;419&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>420</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">블루투스스피커</span></td>
					<td>bluetooth speaker</td>
					<td>蓝牙音箱</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=420&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;420&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>421</td>
					<td>48</td>
					<td>디지털/공구</td>
					<td><span class="bold">사무용품</span></td>
					<td>office supplies</td>
					<td>办公用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=421&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;421&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>422</td>
					<td>96</td>
					<td>디지털/공구</td>
					<td><span class="bold">셀카봉</span></td>
					<td>stick</td>
					<td>自拍杆</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=422&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;422&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>423</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">스마트워치</span></td>
					<td>smartwatch</td>
					<td>智能手表</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=423&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;423&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>424</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">스마트폰</span></td>
					<td>smart phone</td>
					<td>智能手机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=424&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;424&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>425</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">안마기</span></td>
					<td>massge</td>
					<td>按摩仪</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=425&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;425&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>426</td>
					<td>94</td>
					<td>디지털/공구</td>
					<td><span class="bold">암밴드</span></td>
					<td>armband</td>
					<td>数码产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=426&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;426&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>427</td>
					<td>96</td>
					<td>디지털/공구</td>
					<td><span class="bold">액정보호필름</span></td>
					<td>phone film</td>
					<td>手机用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=427&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;427&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>428</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">어댑터</span></td>
					<td>adapter</td>
					<td>适配器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=428&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;428&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>429</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">유선마우스</span></td>
					<td>mouse</td>
					<td>鼠标</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=429&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;429&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>430</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">유선스피커</span></td>
					<td>speaker</td>
					<td>扬声器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=430&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;430&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>431</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">유선키보드</span></td>
					<td>keyboard</td>
					<td>键盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=431&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;431&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>432</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">이발기</span></td>
					<td>hair-clipper</td>
					<td>理发推子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=432&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;432&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>433</td>
					<td>39</td>
					<td>디지털/공구</td>
					<td><span class="bold">이어캡</span></td>
					<td>earcap</td>
					<td>耳套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=433&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;433&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>434</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">이어폰</span></td>
					<td>earphone</td>
					<td>耳机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=434&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;434&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>435</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">인두기</span></td>
					<td>iron</td>
					<td>熨斗</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=435&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;435&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>436</td>
					<td>87</td>
					<td>디지털/공구</td>
					<td><span class="bold">자동차부품</span></td>
					<td>car parts</td>
					<td>汽车配件</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=436&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;436&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>437</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">전기면도기</span></td>
					<td>electric shaver</td>
					<td>电动剃须刀</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=437&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;437&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>438</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">전자담배</span></td>
					<td>Electronic cigarette</td>
					<td>电子烟</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=438&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;438&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>439</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">전자사전</span></td>
					<td>electronic dictionary</td>
					<td>电子词典</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=439&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;439&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>440</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">충전지</span></td>
					<td>rechargeable battery</td>
					<td>充电宝</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=440&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;440&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>441</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">카드리더기</span></td>
					<td>card reader</td>
					<td>读卡器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=441&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;441&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>442</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">카메라</span></td>
					<td>camera</td>
					<td>相机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=442&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;442&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>443</td>
					<td>90</td>
					<td>디지털/공구</td>
					<td><span class="bold">카메라렌즈</span></td>
					<td>camera lens</td>
					<td>摄影机镜头</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=443&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;443&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>444</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">커넥터</span></td>
					<td>connector</td>
					<td>连接器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=444&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;444&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>466</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">커피머신</span></td>
					<td>Coffee machine</td>
					<td>咖啡机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=466&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;466&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>445</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">컴퓨터</span></td>
					<td>computer</td>
					<td>电脑</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=445&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;445&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>446</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">컴퓨터부품</span></td>
					<td>computer parts</td>
					<td>电脑配件</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=446&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;446&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>447</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">케이블</span></td>
					<td>cable</td>
					<td>数据线</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=447&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;447&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>448</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">태블릿 PC</span></td>
					<td>tablet pc</td>
					<td>平板电脑 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=448&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;448&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>449</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">프로젝터</span></td>
					<td>projector</td>
					<td>投影机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=449&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;449&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>464</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">프린터</span></td>
					<td>printer</td>
					<td>印相机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=464&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;464&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>450</td>
					<td>96</td>
					<td>디지털/공구</td>
					<td><span class="bold">핸드폰 케이스</span></td>
					<td>phone case</td>
					<td>手机壳</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=450&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;450&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>451</td>
					<td>96</td>
					<td>디지털/공구</td>
					<td><span class="bold">핸드폰악세사리</span></td>
					<td>phone accessory</td>
					<td>手机配件</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=451&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;451&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>465</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">헤드폰</span></td>
					<td>headphone</td>
					<td>头戴式受话机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=465&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;465&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>452</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">휴대폰</span></td>
					<td>phone</td>
					<td>手机</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=452&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;452&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>453</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">CD플레이어</span></td>
					<td>CD player</td>
					<td>CD播放器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=453&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;453&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>454</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">CPU</span></td>
					<td>CPU</td>
					<td>处理器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=454&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;454&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>455</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">HDD</span></td>
					<td>Hard Disk Drive</td>
					<td>硬盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=455&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;455&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>456</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">MP3</span></td>
					<td>MP3</td>
					<td>MP3</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=456&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;456&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>457</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">ODD</span></td>
					<td>ODD</td>
					<td>数码产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=457&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;457&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>458</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">RAM</span></td>
					<td>RAM</td>
					<td>存储器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=458&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;458&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>459</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">SD카드</span></td>
					<td>sd card</td>
					<td>存储卡</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=459&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;459&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>460</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">SSD</span></td>
					<td>Solid State Disk</td>
					<td>硬盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=460&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;460&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>461</td>
					<td>85</td>
					<td>디지털/공구</td>
					<td><span class="bold">TV</span></td>
					<td>TV</td>
					<td>电视</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=461&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;461&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>462</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">USB메모리</span></td>
					<td>usb memory</td>
					<td>U盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=462&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;462&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>463</td>
					<td>84</td>
					<td>디지털/공구</td>
					<td><span class="bold">USB허브</span></td>
					<td>USB hub</td>
					<td>USB集线器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=463&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;463&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>467</td>
					<td>66</td>
					<td>생활/건강</td>
					<td><span class="bold">지팡이</span></td>
					<td>stick</td>
					<td>拐杖</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=467&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;467&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>468</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">기타 인쇄물</span></td>
					<td>Other prints</td>
					<td>其他印刷品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=468&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;468&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>469</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">신문</span></td>
					<td>newspaper</td>
					<td>报纸</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=469&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;469&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>470</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">악보</span></td>
					<td>score</td>
					<td>乐谱</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=470&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;470&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>471</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">잡지</span></td>
					<td>magazine</td>
					<td>杂志 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=471&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;471&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>472</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">책</span></td>
					<td>book</td>
					<td>书</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=472&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;472&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>473</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">캘린더</span></td>
					<td>calendar</td>
					<td>日历</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=473&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;473&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>474</td>
					<td>49</td>
					<td>서적/인쇄물</td>
					<td><span class="bold">화보집</span></td>
					<td>photo book</td>
					<td>画报</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=474&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;474&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>475</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">골프용품</span></td>
					<td>golf goods</td>
					<td>高乐夫产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=475&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;475&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>476</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">낚시용품</span></td>
					<td>fishing goods</td>
					<td>渔具用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=476&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;476&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>477</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">등산용품</span></td>
					<td>hiking goods</td>
					<td>登山用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=477&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;477&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>478</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">보드용품</span></td>
					<td>snowboard goods</td>
					<td>滑雪板产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=478&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;478&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>479</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">스키용품</span></td>
					<td>ski goods</td>
					<td>滑雪产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=479&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;479&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>480</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">요가/기타</span></td>
					<td>health goods</td>
					<td>健身用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=480&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;480&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>481</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">자전거용품</span></td>
					<td>bike goods</td>
					<td>自行车产品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=481&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;481&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>482</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">전기스쿠터</span></td>
					<td>Electric scooter</td>
					<td>电动滑板车</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=482&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;482&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>483</td>
					<td>94</td>
					<td>스포츠/레저</td>
					<td><span class="bold">캠핑용품</span></td>
					<td>camping goods</td>
					<td>户外用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=483&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;483&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>484</td>
					<td>21</td>
					<td>식품</td>
					<td><span class="bold">음식</span></td>
					<td>food</td>
					<td>食品</td>
					<td><span class="red1">일반통관</span></td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=484&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;484&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>485</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">구두</span></td>
					<td>shoes</td>
					<td>鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=485&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;485&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>486</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">부츠</span></td>
					<td>boots</td>
					<td>靴子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=486&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;486&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>487</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">샌들</span></td>
					<td>sandal</td>
					<td>凉鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=487&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;487&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>488</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">슈트리</span></td>
					<td>Shoe tree</td>
					<td>鞋撑</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=488&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;488&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>489</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">스니커즈</span></td>
					<td>sneakers</td>
					<td>休闲鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=489&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;489&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>490</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">슬리퍼</span></td>
					<td>slipper</td>
					<td>拖鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=490&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;490&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>491</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">운동화</span></td>
					<td>sneakers</td>
					<td>运动鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=491&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;491&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>492</td>
					<td>64</td>
					<td>신발</td>
					<td><span class="bold">특수용 방화신발등</span></td>
					<td>FIREPROOF SHOES</td>
					<td>防火鞋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=492&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;492&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>494</td>
					<td>95</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">교육완구</span></td>
					<td>educational toy</td>
					<td>益智玩具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=494&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;494&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>496</td>
					<td>96</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">애완용품</span></td>
					<td>pet items</td>
					<td>宠物用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=496&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;496&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>497</td>
					<td>39</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">욕실용품</span></td>
					<td>bath supplies</td>
					<td>浴室用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=497&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;497&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>498</td>
					<td>69</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">유리/사기류</span></td>
					<td>dishware</td>
					<td>餐具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=498&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;498&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>499</td>
					<td>87</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">유모차</span></td>
					<td>baby carriage</td>
					<td>婴儿推车</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=499&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;499&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>500</td>
					<td>94</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">인테리어</span></td>
					<td>interior</td>
					<td>装饰品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=500&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;500&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>501</td>
					<td>95</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">인형</span></td>
					<td>doll</td>
					<td>玩具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=501&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;501&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>502</td>
					<td>96</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">인형옷</span></td>
					<td>dolls clothing</td>
					<td>玩具服装</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=502&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;502&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>503</td>
					<td>95</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">장난감</span></td>
					<td>toy</td>
					<td>玩具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=503&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;503&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>504</td>
					<td>39</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">주방용품</span></td>
					<td>kitchen supplies</td>
					<td>厨房用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=504&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;504&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>505</td>
					<td>39</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">컵</span></td>
					<td>cup</td>
					<td>水杯</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=505&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;505&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>506</td>
					<td>95</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">킥보드</span></td>
					<td>kickboard</td>
					<td>滑板车</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=506&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;506&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>493</td>
					<td>21</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">가공식품</span></td>
					<td>processed food</td>
					<td>加工食品</td>
					<td><span class="red1">일반통관</span></td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=493&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;493&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>495</td>
					<td>30</td>
					<td>유아/생활/식품</td>
					<td><span class="bold">비타민</span></td>
					<td>vitamin</td>
					<td>维生素</td>
					<td><span class="red1">일반통관</span></td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=495&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;495&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>507</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">가디건</span></td>
					<td>cardigan</td>
					<td>开身衫</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=507&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;507&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>508</td>
					<td>42</td>
					<td>의류</td>
					<td><span class="bold">가죽류</span></td>
					<td>leather clothes</td>
					<td>皮衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=508&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;508&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>509</td>
					<td>42</td>
					<td>의류</td>
					<td><span class="bold">가죽장갑</span></td>
					<td>Leather gloves</td>
					<td>皮手套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=509&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;509&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>510</td>
					<td>42</td>
					<td>의류</td>
					<td><span class="bold">가죽포함된의류</span></td>
					<td>LEATHER CLOTHES</td>
					<td>皮衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=510&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;510&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>511</td>
					<td>96</td>
					<td>의류</td>
					<td><span class="bold">강아지옷</span></td>
					<td>Dog clothes</td>
					<td>宠物服装</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=511&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;511&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>512</td>
					<td>40</td>
					<td>의류</td>
					<td><span class="bold">고무장갑</span></td>
					<td>rubber gloves</td>
					<td>橡胶手套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=512&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;512&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>513</td>
					<td>62</td>
					<td>의류</td>
					<td><span class="bold">넥타이</span></td>
					<td>necktie</td>
					<td>领带 </td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=513&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;513&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>554</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">니트</span></td>
					<td>knit wear</td>
					<td>编织</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=554&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;554&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>514</td>
					<td>63</td>
					<td>의류</td>
					<td><span class="bold">담요/모포</span></td>
					<td>blanket</td>
					<td>毯子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=514&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;514&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>515</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">드레스</span></td>
					<td>Dress</td>
					<td>连衣裙</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=515&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;515&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>516</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">레깅스</span></td>
					<td>leggings</td>
					<td>打底裤</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=516&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;516&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>517</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">면바지</span></td>
					<td>Cotton trousers</td>
					<td>棉质长裤</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=517&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;517&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>518</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">면벨트</span></td>
					<td>cotton belting</td>
					<td>棉腰带</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=518&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;518&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>519</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">면장갑</span></td>
					<td>cotton gloves</td>
					<td>棉手套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=519&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;519&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>520</td>
					<td>65</td>
					<td>의류</td>
					<td><span class="bold">모자류</span></td>
					<td>hat</td>
					<td>帽子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=520&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;520&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>521</td>
					<td>41</td>
					<td>의류</td>
					<td><span class="bold">모피류(목록불가)</span></td>
					<td>fur clothes</td>
					<td>毛皮衣服</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=521&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;521&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>522</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">목도리/머플러</span></td>
					<td>muffler</td>
					<td>围巾</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=522&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;522&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>523</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">바지</span></td>
					<td>PANTS</td>
					<td>裤子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=523&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;523&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>524</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">반바지</span></td>
					<td>shorts</td>
					<td>短裤</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=524&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;524&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>525</td>
					<td>63</td>
					<td>의류</td>
					<td><span class="bold">베게커버</span></td>
					<td>pillow cover</td>
					<td>枕套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=525&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;525&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>526</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">셔츠</span></td>
					<td>SHIRTS</td>
					<td>衬衫</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=526&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;526&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>527</td>
					<td>62</td>
					<td>의류</td>
					<td><span class="bold">속옷</span></td>
					<td>underwear</td>
					<td>内衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=527&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;527&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>528</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">수영복</span></td>
					<td>swimsuit</td>
					<td>泳装</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=528&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;528&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>529</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">스웨터</span></td>
					<td>sweater</td>
					<td>毛衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=529&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;529&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>530</td>
					<td>62</td>
					<td>의류</td>
					<td><span class="bold">스카프</span></td>
					<td>scarf</td>
					<td>丝巾</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=530&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;530&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>531</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">스커트</span></td>
					<td>SKIRT</td>
					<td>裙子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=531&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;531&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>532</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">스타킹</span></td>
					<td>stocking</td>
					<td>丝袜</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=532&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;532&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>533</td>
					<td>40</td>
					<td>의류</td>
					<td><span class="bold">스포츠용구명복</span></td>
					<td>life vest</td>
					<td>救生衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=533&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;533&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>534</td>
					<td>62</td>
					<td>의류</td>
					<td><span class="bold">스포츠용장갑</span></td>
					<td>Sports gloves</td>
					<td>运动手套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=534&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;534&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>535</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">양말</span></td>
					<td>socks</td>
					<td>袜子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=535&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;535&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>536</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">운동복</span></td>
					<td>sportswear</td>
					<td>运动服</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=536&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;536&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>537</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">원피스</span></td>
					<td>Dress</td>
					<td>连衣裙</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=537&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;537&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>538</td>
					<td>96</td>
					<td>의류</td>
					<td><span class="bold">유아용캐리어</span></td>
					<td>child carrier</td>
					<td>儿童行礼箱</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=538&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;538&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>539</td>
					<td>63</td>
					<td>의류</td>
					<td><span class="bold">이불</span></td>
					<td>Blanket</td>
					<td>毯子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=539&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;539&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>540</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">인형옷</span></td>
					<td>dolls clothing</td>
					<td>娃娃衣服</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=540&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;540&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>541</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">자켓/외투</span></td>
					<td>JACKET</td>
					<td>夹克</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=541&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;541&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>542</td>
					<td>41</td>
					<td>의류</td>
					<td><span class="bold">잠수복</span></td>
					<td>diving suit</td>
					<td>潜水服</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=542&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;542&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>543</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">잠옷</span></td>
					<td>sleepwear</td>
					<td>睡衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=543&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;543&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>544</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">조끼</span></td>
					<td>shirt</td>
					<td>马甲</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=544&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;544&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>545</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">청바지</span></td>
					<td>jeans</td>
					<td>small仔服</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=545&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;545&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>546</td>
					<td>63</td>
					<td>의류</td>
					<td><span class="bold">침대커버</span></td>
					<td>bed cover</td>
					<td>床罩</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=546&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;546&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>547</td>
					<td>63</td>
					<td>의류</td>
					<td><span class="bold">커튼</span></td>
					<td>curtain</td>
					<td>窗帘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=547&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;547&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>548</td>
					<td>90</td>
					<td>의류</td>
					<td><span class="bold">코스프레</span></td>
					<td>costume play clothes</td>
					<td>动漫服装</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=548&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;548&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>549</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">코트</span></td>
					<td>coat</td>
					<td>大衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=549&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;549&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>550</td>
					<td>48</td>
					<td>의류</td>
					<td><span class="bold">코팅된 기저귀커버</span></td>
					<td>DIAPER COVER</td>
					<td>尿布兜</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=550&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;550&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>551</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">티셔츠</span></td>
					<td>T shirt</td>
					<td>T恤</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=551&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;551&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>552</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">패딩점퍼</span></td>
					<td>Jumper peding</td>
					<td>外套</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=552&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;552&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>553</td>
					<td>61</td>
					<td>의류</td>
					<td><span class="bold">후드</span></td>
					<td>hood</td>
					<td>卫衣</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=553&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;553&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>556</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">가방(가죽류)</span></td>
					<td>leather bag</td>
					<td>皮包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=556&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;556&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>557</td>
					<td>70</td>
					<td>잡화</td>
					<td><span class="bold">거울</span></td>
					<td>mirror</td>
					<td>镜子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=557&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;557&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>558</td>
					<td>70</td>
					<td>잡화</td>
					<td><span class="bold">공예용비즈</span></td>
					<td>beads</td>
					<td>小珠子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=558&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;558&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>589</td>
					<td>34</td>
					<td>잡화</td>
					<td><span class="bold">광택제</span></td>
					<td>polish</td>
					<td>光泽剂</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=589&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;589&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>559</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">귀걸이</span></td>
					<td>earrings</td>
					<td>耳饰</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=559&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;559&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>594</td>
					<td>83</td>
					<td>잡화</td>
					<td><span class="bold">금고</span></td>
					<td>strongbox</td>
					<td>金库</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=594&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;594&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>560</td>
					<td>48</td>
					<td>잡화</td>
					<td><span class="bold">다이어리</span></td>
					<td>schedule book</td>
					<td>日记</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=560&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;560&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>561</td>
					<td>85</td>
					<td>잡화</td>
					<td><span class="bold">렌즈</span></td>
					<td>Lens</td>
					<td>隐形眼镜</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=561&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;561&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>562</td>
					<td>96</td>
					<td>잡화</td>
					<td><span class="bold">머리핀</span></td>
					<td>hairpin</td>
					<td>发饰</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=562&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;562&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>563</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">목걸이</span></td>
					<td>necklace</td>
					<td>项链</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=563&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;563&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>564</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">반지</span></td>
					<td>ring</td>
					<td>戒指</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=564&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;564&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>565</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">백팩</span></td>
					<td>backpack</td>
					<td>背包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=565&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;565&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>596</td>
					<td>96</td>
					<td>잡화</td>
					<td><span class="bold">보온병</span></td>
					<td>thermos bottle</td>
					<td>保温瓶</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=596&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;596&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>566</td>
					<td>34</td>
					<td>잡화</td>
					<td><span class="bold">비누/삼퓨/기타</span></td>
					<td>facial cleanser</td>
					<td>洗刷用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=566&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;566&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>555</td>
					<td>34</td>
					<td>잡화</td>
					<td><span class="bold">비누/세재/광택제/양초</span></td>
					<td>candle</td>
					<td>蜡烛</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=555&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;555&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>599</td>
					<td>96</td>
					<td>잡화</td>
					<td><span class="bold">빗</span></td>
					<td>comb</td>
					<td>梳子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=599&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;599&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>567</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">서류가방</span></td>
					<td>briefcase</td>
					<td>文件包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=567&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;567&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>568</td>
					<td>90</td>
					<td>잡화</td>
					<td><span class="bold">선글라스</span></td>
					<td>sunglasses</td>
					<td>太阳镜</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=568&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;568&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>569</td>
					<td>91</td>
					<td>잡화</td>
					<td><span class="bold">손목시계</span></td>
					<td>watch</td>
					<td>手表</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=569&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;569&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>570</td>
					<td>91</td>
					<td>잡화</td>
					<td><span class="bold">시계줄</span></td>
					<td>watch band</td>
					<td>手表带</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=570&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;570&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>571</td>
					<td>90</td>
					<td>잡화</td>
					<td><span class="bold">안경</span></td>
					<td>eyeglasses</td>
					<td>眼镜</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=571&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;571&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>595</td>
					<td>90</td>
					<td>잡화</td>
					<td><span class="bold">안경테</span></td>
					<td>glasses frame</td>
					<td>眼镜框</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=595&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;595&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>572</td>
					<td>66</td>
					<td>잡화</td>
					<td><span class="bold">양산</span></td>
					<td>parasol</td>
					<td>阳伞</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=572&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;572&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>573</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">에코백</span></td>
					<td>eco bag</td>
					<td>环保袋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=573&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;573&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>574</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">여권지갑</span></td>
					<td>passport holder</td>
					<td>护照夹</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=574&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;574&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>575</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">여행용가방</span></td>
					<td>suitcase</td>
					<td>手提箱</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=575&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;575&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>597</td>
					<td>96</td>
					<td>잡화</td>
					<td><span class="bold">연필</span></td>
					<td>pencil</td>
					<td>铅笔</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=597&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;597&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>593</td>
					<td>83</td>
					<td>잡화</td>
					<td><span class="bold">열쇠</span></td>
					<td>key</td>
					<td>钥匙</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=593&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;593&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>576</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">열쇠고리</span></td>
					<td>key ring</td>
					<td>钥匙环</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=576&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;576&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>577</td>
					<td>66</td>
					<td>잡화</td>
					<td><span class="bold">우산</span></td>
					<td>umbrella</td>
					<td>雨伞</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=577&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;577&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>578</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">웨딩악세사리</span></td>
					<td>wedding accessory</td>
					<td>婚礼用饰品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=578&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;578&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>579</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">웨딩쥬얼리</span></td>
					<td>wedding</td>
					<td>婚礼用饰品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=579&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;579&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>592</td>
					<td>83</td>
					<td>잡화</td>
					<td><span class="bold">자물쇠</span></td>
					<td>lock</td>
					<td>锁</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=592&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;592&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>580</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">지갑</span></td>
					<td>wallt</td>
					<td>钱包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=580&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;580&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>581</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">지갑(가죽류)</span></td>
					<td>leather wallet</td>
					<td>钱包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=581&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;581&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>582</td>
					<td>34</td>
					<td>잡화</td>
					<td><span class="bold">치아미백제</span></td>
					<td>Haring B Full Kit</td>
					<td>牙齿美白剂</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=582&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;582&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>591</td>
					<td>76</td>
					<td>잡화</td>
					<td><span class="bold">케이블</span></td>
					<td>cable</td>
					<td>缆绳</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=591&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;591&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>583</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">클러치백</span></td>
					<td>clutch bag</td>
					<td>手拿包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=583&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;583&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>584</td>
					<td>71</td>
					<td>잡화</td>
					<td><span class="bold">팔찌</span></td>
					<td>bracelet</td>
					<td>手链</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=584&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;584&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>598</td>
					<td>96</td>
					<td>잡화</td>
					<td><span class="bold">펜</span></td>
					<td>pen</td>
					<td>笔尖</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=598&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;598&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>590</td>
					<td>37</td>
					<td>잡화</td>
					<td><span class="bold">평면상롤상 필름</span></td>
					<td>Film</td>
					<td>胶片</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=590&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;590&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>585</td>
					<td>33</td>
					<td>잡화</td>
					<td><span class="bold">향수/방향제</span></td>
					<td>perfume</td>
					<td>香水</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=585&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;585&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>586</td>
					<td>65</td>
					<td>잡화</td>
					<td><span class="bold">헤어밴드</span></td>
					<td>hairband</td>
					<td>发饰</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=586&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;586&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>587</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">헨드백/숄더백</span></td>
					<td>handbag</td>
					<td>手提包</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=587&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;587&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>588</td>
					<td>42</td>
					<td>잡화</td>
					<td><span class="bold">화장품 파우치</span></td>
					<td>pouch</td>
					<td>小袋</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=588&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;588&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>618</td>
					<td>82</td>
					<td>주방</td>
					<td><span class="bold">가위</span></td>
					<td>scissors</td>
					<td>可谓</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=618&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;618&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>600</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">노트류</span></td>
					<td>note</td>
					<td>文具</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=600&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;600&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>601</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">물휴지</span></td>
					<td>wet wipes</td>
					<td>湿巾</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=601&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;601&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>625</td>
					<td>39</td>
					<td>주방</td>
					<td><span class="bold">밀폐용기</span></td>
					<td>airtight container</td>
					<td>密闭容器</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=625&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;625&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>602</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">벽지</span></td>
					<td>wallpaper</td>
					<td>墙纸</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=602&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;602&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>603</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">봉투</span></td>
					<td>envelope</td>
					<td>信封</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=603&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;603&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>604</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">상자</span></td>
					<td>basket</td>
					<td>篮子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=604&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;604&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>624</td>
					<td>73</td>
					<td>주방</td>
					<td><span class="bold">스테인레스 도시락</span></td>
					<td>stainless steel lunch box</td>
					<td>不锈钢盒饭</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=624&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;624&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>623</td>
					<td>73</td>
					<td>주방</td>
					<td><span class="bold">스테인레스 식판</span></td>
					<td>stainless steel plate</td>
					<td>不锈钢餐盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=623&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;623&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>619</td>
					<td>82</td>
					<td>주방</td>
					<td><span class="bold">스푼</span></td>
					<td>spoon</td>
					<td>汤匙</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=619&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;619&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>605</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">신문</span></td>
					<td>newspaper</td>
					<td>报纸</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=605&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;605&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>606</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">엽서</span></td>
					<td>postcard</td>
					<td>明信片</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=606&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;606&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>616</td>
					<td>70</td>
					<td>주방</td>
					<td><span class="bold">유리접시</span></td>
					<td>glass plate</td>
					<td>玻璃碟子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=616&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;616&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>615</td>
					<td>70</td>
					<td>주방</td>
					<td><span class="bold">유리컵</span></td>
					<td>glass cup</td>
					<td>玻璃杯</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=615&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;615&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>607</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">일반화장지</span></td>
					<td>toilet paper</td>
					<td>卫生纸</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=607&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;607&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>608</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">일회용기저귀</span></td>
					<td>disposable diapers</td>
					<td>一次性尿布</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=608&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;608&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>620</td>
					<td>82</td>
					<td>주방</td>
					<td><span class="bold">젓가락</span></td>
					<td>chopsticks</td>
					<td>筷子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=620&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;620&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>609</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">종이쟁반</span></td>
					<td>paper tray</td>
					<td>纸盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=609&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;609&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>610</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">종이접시</span></td>
					<td>paper plate</td>
					<td>纸盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=610&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;610&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>611</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">종이컵</span></td>
					<td>paper cup</td>
					<td>纸杯</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=611&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;611&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>612</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">종이타올</span></td>
					<td>paper towel</td>
					<td>纸巾</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=612&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;612&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>617</td>
					<td>82</td>
					<td>주방</td>
					<td><span class="bold">칼</span></td>
					<td>knife</td>
					<td>厨房刀</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=617&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;617&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>613</td>
					<td>69</td>
					<td>주방</td>
					<td><span class="bold">컵</span></td>
					<td>cup</td>
					<td>杯子</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=613&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;613&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>614</td>
					<td>48</td>
					<td>주방</td>
					<td><span class="bold">편지지</span></td>
					<td>letter</td>
					<td>信纸</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=614&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;614&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>621</td>
					<td>82</td>
					<td>주방</td>
					<td><span class="bold">포크</span></td>
					<td>fork</td>
					<td>餐叉</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=621&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;621&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>622</td>
					<td>39</td>
					<td>주방</td>
					<td><span class="bold">플라스틱 식판</span></td>
					<td>plastic food tray</td>
					<td>塑料餐盘</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=622&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;622&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>626</td>
					<td>67</td>
					<td>패션/뷰티</td>
					<td><span class="bold">가발</span></td>
					<td>Wig</td>
					<td>假发</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=626&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;626&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>627</td>
					<td>33</td>
					<td>패션/뷰티</td>
					<td><span class="bold">네일글루</span></td>
					<td>Nail glue</td>
					<td>美甲用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=627&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;627&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>628</td>
					<td>33</td>
					<td>패션/뷰티</td>
					<td><span class="bold">네일아트 툴</span></td>
					<td>nail tool</td>
					<td>美甲用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=628&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;628&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>629</td>
					<td>33</td>
					<td>패션/뷰티</td>
					<td><span class="bold">네일아트용 스티커</span></td>
					<td>nail sticker</td>
					<td>美甲用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=629&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;629&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>630</td>
					<td>33</td>
					<td>패션/뷰티</td>
					<td><span class="bold">네일아트용 파츠</span></td>
					<td>stone for nail art</td>
					<td>美甲用品</td>
					<td>목록통관</td>
					<td>0％</td>
					<td>0％</td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=630&#39;, &#39;CtmsItem_W&#39;, 800, 300);">수정</button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;630&#39;);">삭제</button></span>
					</td>
				</tr>

				<tr>
					<td>631</td>
					<td>33</td>
					<td>패션/뷰티</td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">指甲油</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">指甲油</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美丽</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=631&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;631&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">632</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">乳液/面霜</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">面霜</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=632&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;632&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">633</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">口红</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">口红</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">喉舌</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=633&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;633&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">634</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睫毛膏</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睫毛膏</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">睫毛膏</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=634&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;634&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">635</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">化妆刷</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">化妆刷</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">改变</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=635&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;635&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">636</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼线笔</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼线笔</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼线笔</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=636&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;636&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">637</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼影</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼影</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">眼影</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=637&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;637&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">638</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">人造睫毛</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">假睫毛</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">假睫毛</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=638&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;638&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">639</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚/美容</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">粉末/事实</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">致密粉末</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">粉饼</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=639&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;639&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">640</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">85</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">光盘/DVD</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">游戏包</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">游戏包</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">游戏包</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=640&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;640&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">641</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">85</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">光盘/DVD</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">视频</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">视频光盘</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">影音光碟</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=641&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;641&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">642</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">85</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">光盘/DVD</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">音乐</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">音乐光盘</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">音乐CD</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清关</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CtmsItem_W.asp?sKind=M&amp;sItemSeq=642&#39;, &#39;CtmsItem_W&#39;, 800, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;642&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
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
