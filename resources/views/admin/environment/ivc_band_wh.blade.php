@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/IvcBandWh_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单带宽管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">配置 &gt; 运单带宽管理</font></font></h4>
		</div>

		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./IvcBandWh_W.asp&#39;, &#39;IvcBandWh_W&#39;, 700, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册运单带宽</font></font></button></span>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="5%">
				<col width="10%">
				<col width="7%">
				<col width="15%">
				<col width="18%">
				<col width="6%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="8%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域/发货方式</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">快递公司</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运单带宽</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总带宽</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用运单数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用运单数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">威海/海运</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CJ物流</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35928400000 ~ 35928453999</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53,999</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
					<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53,899</font></font></span></td>
					<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">正在使用</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2020.10.30</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnUse_M(&#39;15&#39;, &#39;Y&#39;)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onClick="fnDel_M(&#39;15&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
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
