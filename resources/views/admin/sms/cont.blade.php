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
<script type="text/javascript" src="{{ asset('/admin_files/sms/SmsCont_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信文本管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理 &gt; 短信文本管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->

			<div class="btn-area">
				<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./SmsCont_W.asp?sKind=A&#39;, &#39;SmsCont_W&#39;, 850, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信注册</font></font></button></span>
			</div>

			<div class="notice-board">

				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="107">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10705">

					<table border="1">

						<colgroup>
							<col width="5%">
							<col width="15%">
							<col width="25%">
							<col width="5%">
							<col width="6%">
							<col width="*">
						</colgroup>

						<tbody><tr> 
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文字内容</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【国内到货】国内派送</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">它是由快递公司收集的。</font><font style="vertical-align: inherit;">将在第二天发货</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【国内到达】清关完成（未付）</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请付钱。</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"<button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【国内到达】清关</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国内到达及清关</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></span></td>
							<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[错误] 错误到达</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">入库错误</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【海外到货/发货】暂存</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">临时保存</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td>
							<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【海外到货/发货】待入仓</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等着入库者</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td>
							<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【海外到货/发货】入仓完成</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">这是完成测试。</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></span></td>
							<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【海外到达/派送】申请</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">已提出申请。</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span></td>
							<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[海外到达/发货] 完成发货</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付完成</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付钱请求</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12345 请支付订单的运费。测试</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						

						<tr> 
							<td class="alCenter">
								<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span>
							</td>
							<td><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">与订单（产品）相关闭的通知</font></font></span></td>
							<td class=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12345 订单中有通知信息，请查收。</font></font></span></td>
							<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49</font></font></span></td>
							<td class="alCenter"><span class="bold "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></span></td>
							<td class=""><span class="whGraBtn ty2"><button type="button" class="txt" ><a href="sns5.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>&nbsp; </td>
						</tr>

						  

					</tbody></table>

				</form>

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