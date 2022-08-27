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
<script type="text/javascript" src="{{ asset('/admin_files/sms/SmsSetEtc_S.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SMS管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信管理 &gt; 通知通话（SMS）管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
		

			<form name="frmSearch" id="frmSearch" method="get" action="sns2.html"> 
			<input type="hidden" name="gMnu1" id="gMnu1" value="107">   
			<input type="hidden" name="gMnu2" id="gMnu2" value="10702">   
			<input type="hidden" name="TEMPLATE_CODE" id="TEMPLATE_CODE">     


			<div class="notice-board">

				<table border="0">
				<colgroup> 
				<col width="10%"> 
				<col width="10%"> 
				<col width=""> 
				<col width="32%"> 
				<col width="10%"> 
				<col width="8%"> 
				<col width="62"> 
				</colgroup> 
				<tbody><tr> 
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分配</font></font></th> 
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">指定</font></font></th> 
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[KakaoTalk]</font></font></th> 
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文字内容【不发送KakaoTalk时替换文字】</font></font></th> 
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用与否</font></font></th>
					<th> </th>
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO001
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							会员注册 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							你好。</font><font style="vertical-align: inherit;">＃{姓名}！</font><font style="vertical-align: inherit;">#非常感谢您注册{SHOPNAME}。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO001" name="CONT_DLKKO001" onKeyUp="javascript:chkStrByte(&#39;DLKKO001&#39;);" style="width:400px;height:80px;padding:5px;">안녕하세요. #{NAME}님! #{SHOPNAME}에 회원가입 해주셔서 진심으로 감사드립니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO001" id="SBYTE_DLKKO001" class="iptBox1" value="77" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO001" id="SEND_YN_DLKKO001">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO001&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO002
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							更改订单状态 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 订单号 #{ORDNO} 已更改为 #{STATE}。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO002" name="CONT_DLKKO002" onKeyUp="javascript:chkStrByte(&#39;DLKKO002&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 订单号 #{ORDNO}의 订单서가 #{STATE}로 변경 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO002" id="SBYTE_DLKKO002" class="iptBox1" value="70" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO002" id="SEND_YN_DLKKO002">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO002&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO003
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							入库错误 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 订单号 #{ORDNO} 的 #{PRONM} 收到错误。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO003" name="CONT_DLKKO003" onKeyUp="javascript:chkStrByte(&#39;DLKKO003&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 订单号 #{ORDNO}의 #{PRONM}이 入库错误 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO003" id="SBYTE_DLKKO003" class="iptBox1" value="65" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO003" id="SEND_YN_DLKKO003">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO003&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO004
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							运费计量 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 您申请的#{ORDNO}被称重为#{ORDWT}。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO004" name="CONT_DLKKO004" onKeyUp="javascript:chkStrByte(&#39;DLKKO004&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}이 #{ORDWT}로 重量 측정이 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO004" id="SBYTE_DLKKO004" class="iptBox1" value="68" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO004" id="SEND_YN_DLKKO004">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO004&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO004_04
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							运费信息 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 您申请的#{ORDNO}订单的运费已登记。</font><font style="vertical-align: inherit;">- 重量：#{ORDWT} - 运费：#{DLVRMNY} 详情可在详细订单底部的付款信息或付款页面上找到。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO004_04" name="CONT_DLKKO004_04" onKeyUp="javascript:chkStrByte(&#39;DLKKO004_04&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 
신청하신 #{ORDNO}订单서 发货费用이 등록되었습니다.
- 重量 : #{ORDWT}
- 배송비 : #{DLVRMNY}원
상세내역은 查看订单 하단의 결제정보 또는 결제페이지에서 확인 가능합니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO004_04" id="SBYTE_DLKKO004_04" class="iptBox1" value="0" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO004_04" id="SEND_YN_DLKKO004_04">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO004_04&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO005
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							购买费用计量 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 您请求的#{ORDNO} 的采购估算已完成。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO005" name="CONT_DLKKO005" onKeyUp="javascript:chkStrByte(&#39;DLKKO005&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}의 구매견적이 완료 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO005" id="SBYTE_DLKKO005" class="iptBox1" value="61" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO005" id="SEND_YN_DLKKO005">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO005&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO006
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							退货费用计量 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 请求的#{ORDNO} 的退货估算已完成。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO006" name="CONT_DLKKO006" onKeyUp="javascript:chkStrByte(&#39;DLKKO006&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}의 반송견적이 완료 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO006" id="SBYTE_DLKKO006" class="iptBox1" value="61" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO006" id="SEND_YN_DLKKO006">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO006&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO007
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							管理员存款支付处理 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 您对#{ORDNO} 的请求已得到处理。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO007" name="CONT_DLKKO007" onKeyUp="javascript:chkStrByte(&#39;DLKKO007&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}의 비용이 처리되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO007" id="SBYTE_DLKKO007" class="iptBox1" value="56" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO007" id="SEND_YN_DLKKO007">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO007&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO008
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							无存折已完成存款 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 您要求的#{ORDNO} 的存款费用已处理完毕。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO008" name="CONT_DLKKO008" onKeyUp="javascript:chkStrByte(&#39;DLKKO008&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}의 무통장 입금 비용이 처리되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO008" id="SBYTE_DLKKO008" class="iptBox1" value="68" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO008" id="SEND_YN_DLKKO008">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO008&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO009
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							1:1查询完成 
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							[#{SHOPNAME}] 你好。</font><font style="vertical-align: inherit;">#{NAME} 进行 1:1 查询！</font><font style="vertical-align: inherit;">已为客户请求的#{U_SUBJECT} 注册了一个答案。 
						</font></font></td>
						<td>
							<textarea id="CONT_DLKKO009" name="CONT_DLKKO009" onKeyUp="javascript:chkStrByte(&#39;DLKKO009&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] #{NAME}님께서 요청하신에 답변이 등록되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO009" id="SBYTE_DLKKO009" class="iptBox1" value="61" style="width:60px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节
						</font></font></td> 
						<td>
							<select name="SEND_YN_DLKKO009" id="SEND_YN_DLKKO009">
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用
								</font></font></option><option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用
							</font></font></option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO009&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							DLKKO011
						</font></font></td>
						<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							交货完成处理 
						</font></font></td>
						<td>
							신청하신 订单건 #{ORDNO}이 [#{SHOPNAME}]로부터 完成出库되었습니다.
택배사 : #{IVCNM}
운송장 번호 : #{IVCNO}
#사이트바로가기 : #{HOMEURL} 
						</td>
						<td>
							<textarea id="CONT_DLKKO011" name="CONT_DLKKO011" onKeyUp="javascript:chkStrByte(&#39;DLKKO011&#39;);" style="width:400px;height:80px;padding:5px;">#{ORDNO}이 [#{SHOPNAME}]로부터 完成出库되었습니다.
운송장 번호 : #{IVCNO}</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO011" id="SBYTE_DLKKO011" class="iptBox1" value="74" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO011" id="SEND_YN_DLKKO011">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO011&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO012
						</td>
						<td>
							실사처리완료 
						</td>
						<td>
							[실사 완료 안내] [#{SHOPNAME}]에 신청하신 #{ORDNO}의 #{TRACKINGNO} 실사처리 되었습니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO012" name="CONT_DLKKO012" onKeyUp="javascript:chkStrByte(&#39;DLKKO012&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}]에 신청하신 #{ORDNO}의 #{TRACKINGNO} 실사처리 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO012" id="SBYTE_DLKKO012" class="iptBox1" value="70" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO012" id="SEND_YN_DLKKO012">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO012&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO012_01
						</td>
						<td>
							실사 완료 처리_트래킹 
						</td>
						<td>
							[실사 완료 안내]
[#{SHOPNAME}]에 신청하신 트래킹번호  #{TRACKINGNO} 실사처리 되었습니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO012_01" name="CONT_DLKKO012_01" onKeyUp="javascript:chkStrByte(&#39;DLKKO012_01&#39;);" style="width:400px;height:80px;padding:5px;">[실사 완료 안내]
[#{SHOPNAME}]에 신청하신 트래킹번호  #{TRACKINGNO} 실사처리 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO012_01" id="SBYTE_DLKKO012_01" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO012_01" id="SEND_YN_DLKKO012_01">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO012_01&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO013
						</td>
						<td>
							결제 완료 처리 
						</td>
						<td>
							[배송完成支付 안내] [#{SHOPNAME}] 배송신청하신 #{ORDNO}의 배송비결제가 완료 되었습니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO013" name="CONT_DLKKO013" onKeyUp="javascript:chkStrByte(&#39;DLKKO013&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 배송신청하신 #{ORDNO}의 배송비결제가 완료 되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO013" id="SBYTE_DLKKO013" class="iptBox1" value="68" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO013" id="SEND_YN_DLKKO013">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO013&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO014
						</td>
						<td>
							추가결제 
						</td>
						<td>
							[추가결제 내역 안내] [#{SHOPNAME}] 신청하신 #{ORDNO}의 추가결제내역이 등록되었습니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO014" name="CONT_DLKKO014" onKeyUp="javascript:chkStrByte(&#39;DLKKO014&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 신청하신 #{ORDNO}의 추가결제내역이 등록되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO014" id="SBYTE_DLKKO014" class="iptBox1" value="64" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO014" id="SEND_YN_DLKKO014">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO014&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO015
						</td>
						<td>
							代理购买修改状态</td>
						<td>
							[代理购买 完成购买] [#{SHOPNAME}] 您申请的 #{ORDNO} 订单变更为 #{STATE}. 
						</td>
						<td>
							<textarea id="CONT_DLKKO015" name="CONT_DLKKO015" onKeyUp="javascript:chkStrByte(&#39;DLKKO015&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 您申请的 #{ORDNO} 已完成购买.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO015" id="SBYTE_DLKKO015" class="iptBox1" value="68" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO015" id="SEND_YN_DLKKO015">
								<option value="Y" selected="">使用
								</option><option value="N">不使用
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO015&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO016
						</td>
						<td>
							代理购买 断货 指南 
						</td>
						<td>
							[代理购买 商品断货] [#{SHOPNAME}] 您申请的 #{ORDNO}商品购买已断货. 
						</td>
						<td>
							<textarea id="CONT_DLKKO016" name="CONT_DLKKO016" onKeyUp="javascript:chkStrByte(&#39;DLKKO016&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 구매신청하신 #{ORDNO}의 제품이 품절되었습니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO016" id="SBYTE_DLKKO016" class="iptBox1" value="60" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO016" id="SEND_YN_DLKKO016">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO016&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO017
						</td>
						<td>
							비용입금요청안내 
						</td>
						<td>
							[#{SHOPNAME}] 입니다. #{NAME}님께서 요청하신 订单 : #{ORDNO} 결제내역이 등록되었습니다.. 감사합니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO017" name="CONT_DLKKO017" onKeyUp="javascript:chkStrByte(&#39;DLKKO017&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 입니다. #{NAME}님께서 요청하신 订单 : #{ORDNO} 결제내역이 등록되었습니다.. 감사합니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO017" id="SBYTE_DLKKO017" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO017" id="SEND_YN_DLKKO017">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO017&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO018
						</td>
						<td>
							회원등업 
						</td>
						<td>
							[#{SHOPNAME}] 입니다. #{NAME}님께서 회원 등급업이 되었습니다. 감사합니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO018" name="CONT_DLKKO018" onKeyUp="javascript:chkStrByte(&#39;DLKKO018&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] 입니다. #{NAME}님께서 회원 등급업이 되었습니다. 감사합니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO018" id="SBYTE_DLKKO018" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO018" id="SEND_YN_DLKKO018">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO018&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO020_01
						</td>
						<td>
							회원 - 아이디 찾기 
						</td>
						<td>
							[#{SHOPNAME}] - 아이디 알림
- 아이디는 ″#{MEMID}″ 입니다. 감사합니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO020_01" name="CONT_DLKKO020_01" onKeyUp="javascript:chkStrByte(&#39;DLKKO020_01&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] - 아이디 알림  - 아이디는 ″#{MEMID}″ 입니다. 감사합니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO020_01" id="SBYTE_DLKKO020_01" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO020_01" id="SEND_YN_DLKKO020_01">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO020_01&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO020_02
						</td>
						<td>
							회원 - 비밀번호 찾기 
						</td>
						<td>
							[#{SHOPNAME}] - 임시 비밀번호 알림
- 임시 비밀번호는 ″#{MEMPW}″ 입니다. 로그인 하신 후에 비밀번호 재설정 부탁드립니다. 감사합니다. 
						</td>
						<td>
							<textarea id="CONT_DLKKO020_02" name="CONT_DLKKO020_02" onKeyUp="javascript:chkStrByte(&#39;DLKKO020_02&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}] - 임시 비밀번호 알림 - 임시 비밀번호는 ″#{MEMPW}″ 입니다.</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO020_02" id="SBYTE_DLKKO020_02" class="iptBox1" value="73" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO020_02" id="SEND_YN_DLKKO020_02">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO020_02&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO027
						</td>
						<td>
							订单문의 답변알림 
						</td>
						<td>
							[#{SHOPNAME}]
订单号 #{ORDNO}의 订单문의 내용이 추가되였습니다. 
확인부탁드립니다.
#사이트바로가기 : #{HOMEURL} 
						</td>
						<td>
							<textarea id="CONT_DLKKO027" name="CONT_DLKKO027" onKeyUp="javascript:chkStrByte(&#39;DLKKO027&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}]
订单号 #{ORDNO}의 订单문의 내용이 추가되였습니다. 
확인부탁드립니다.
#사이트바로가기 : #{HOMEURL}</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO027" id="SBYTE_DLKKO027" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO027" id="SEND_YN_DLKKO027">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO027&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO033
						</td>
						<td>
							预付金 신청 안내 
						</td>
						<td>
							[#{SHOPNAME}]
#{MEMNM} 고객님 预付金 신청이 완료되었습니다.
충전금액 : #{MNY}원
银行账号 : #{ACC_INF}
#{ACC_HLD} 
						</td>
						<td>
							<textarea id="CONT_DLKKO033" name="CONT_DLKKO033" onKeyUp="javascript:chkStrByte(&#39;DLKKO033&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}]
#{MEMNM} 고객님 预付金 신청이 완료되었습니다.
충전금액 : #{MNY}원
银行账号 : #{ACC_INF}
#{ACC_HLD}</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO033" id="SBYTE_DLKKO033" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO033" id="SEND_YN_DLKKO033">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO033&#39;);">保存</button>
							</span>
						</td> 
				</tr> 
				
				<tr style="text-valign">  
						<td>
							DLKKO32
						</td>
						<td>
							NO DATE 안내 기본 
						</td>
						<td>
							[#{SHOPNAME}]
″#{TRACKINGNO}″가 NO DATE로 등록되었습니다.
″고객센터&gt; NO DATE″에서 확인해보시기 바랍니다.
사이트 바로가기 - [#{HOMEURL}] 
						</td>
						<td>
							<textarea id="CONT_DLKKO32" name="CONT_DLKKO32" onKeyUp="javascript:chkStrByte(&#39;DLKKO32&#39;);" style="width:400px;height:80px;padding:5px;">[#{SHOPNAME}]
″#{TRACKINGNO}″가 NO DATE로 등록되었습니다.
″고객센터&gt; NO DATE″에서 확인해보시기 바랍니다.
사이트 바로가기 - [#{HOMEURL}]</textarea>
						</td> 
						<td>
							<input type="text" name="SBYTE_DLKKO32" id="SBYTE_DLKKO32" class="iptBox1" value="0" style="width:60px;"> byte
						</td> 
						<td>
							<select name="SEND_YN_DLKKO32" id="SEND_YN_DLKKO32">
								<option value="Y" selected="">사용
								</option><option value="N">사용안함
							</option></select>
						</td> 
						<td class="listBtn alCenter">
							<span class="whGraBtn ty2">
								<button type="button" class="txt" onClick="fnSmsSetEtc(&#39;DLKKO32&#39;);">保存</button>
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
		<h3>©Copyright 2014 ~ 2022 物流系统All rights reserved. <a href="main.html" target="_blank">바로가기</a></h3>
	</div>
</div>
@endsection