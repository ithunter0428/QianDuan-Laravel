@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/Center_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 区域管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Center_W.asp?sKind=A&amp;sCenterSeq=&#39;, &#39;Center_W&#39;, 1000, 620);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中心注册</font></font></button></span>
			<span class="whGrnBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./CenterSort_W.asp&#39;, &#39;CenterSort_W&#39;, 600, 600);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">居中对齐</font></font></button></span>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="12%">
				<col width="10%">
				<col width="8%">
				<col width="8%">
				<col width="10%">
				<col width="*">
				<col width="12%">
				<col width="6%">
				<col width="6%">
				<col width="8%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测量单位</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发货方式</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td>
						<img src="./set2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(3)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对于</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(5)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">WH</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公斤</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">空运、海运</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">264414, 山东省威海市, 9 Fukuju Rd., 环翠区苘山镇</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01055487848</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font><br></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Center_W.asp?sKind=M&amp;sCenterSeq=5&#39;, &#39;Center_W&#39;, 1000, 620);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;5&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td>
						<img src="./set2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(3)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">青岛</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(12)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">量子点</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公斤</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45, Daewangpangyo-ro 606beon-gil, Bundang-gu, Seongnam-si, Gyeonggi-do, 100100, 山东, 青岛</font></font></td>
					<td></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font><br></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Center_W.asp?sKind=M&amp;sCenterSeq=12&#39;, &#39;Center_W&#39;, 1000, 620);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;12&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td>
						<img src="./set2_files/Nation_CN_20180803zhbd46.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(3)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广州</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(9)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">京津冀</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公斤</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">空运、海运</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sdfsf，sfsf，sdfsf 123456</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0103423423244</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font><br></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Center_W.asp?sKind=M&amp;sCenterSeq=9&#39;, &#39;Center_W&#39;, 1000, 620);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;9&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>

				<tr>
					<td>
						<img src="./set2_files/flag_no.png" onerror="this.src=&#39;/Image/Common/flag_no.png&#39;">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">韩国</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(1)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">仁川</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(6)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国际网联</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公斤</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">空运、海运</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sdfsd，sdfsd，sd 3423</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2342423</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">到达中心</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./Center_W.asp?sKind=M&amp;sCenterSeq=6&#39;, &#39;Center_W&#39;, 1000, 620);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;6&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
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
