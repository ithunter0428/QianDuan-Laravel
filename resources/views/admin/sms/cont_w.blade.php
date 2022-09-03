<!-- saved from url=(0068)http://ds2.areumsoft.co/Admin/Sms/Sms_W.asp?gMnu1=107&gMnu2=10703 -->
<html class="no-js translated-ltr" lang="zh-CN">
<!--<![endif]--><!--[if IE 6]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie6" lang="ko-KR"> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="ko-KR"> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9 ie8" lang="ko-KR"> <![endif]--><!--[if IE 9]> <html class="no-js lt-ie10 ie9" lang="ko-KR"> <![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<title>世强物流管理系统</title>
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/layout/AdmReset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin/layout/AdmCommon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin/layout/AdmBoard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin/layout/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/layout/translateelement.css') }}">

    <script type="text/javascript" src="{{ asset('/admin/layout/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin/layout/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin/layout/Common.js') }}"></script>
	<script>
		function fnTimeLoop() {
			$.ajax({ url: "/Front/SessionEmpty.asp" ,
				method: 'GET',
				dataType : 'html',
				success: function(data) {
				},
				error: function(e) {
				}
			});
		}
		var sTimes = setInterval(fnTimeLoop, 5*60*1000);
	</script>
    <script type="text/javascript" src="{{ asset('/admin/sms/SmsCont_W.js') }}"></script>
</head>

<body style="background: none;">
	<div class="pop-title">
		<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信注册</font></font></h3>
	</div>
  
	<div id="pop_wrap">
		<form method="post" name="frmSmsCont" id="frmSmsCont">
			<input type="hidden" name="sKind" value="M">
			<input type="hidden" name="SMS_SEQ" value="11">
			<input type="hidden" name="STATE_SEQ" value="0">

			<table class="order_write order_table_top">
				<colgroup>
					<col width="15%">
					<col width="35%">
					<col width="15%">
					<col width="35%">
				</colgroup> 

				<tbody>
					<tr> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
						<td colspan="3">
							<input type="text" class="iptBox1 w30" name="SBJ" maxlength="80" value="[국내도착] 국내배송">
						</td>
					</tr>

					<tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文字内容</font></font></th>
						<td colspan="3"><textarea style="width:30%;height:100px;padding:10px;" name="CONT" id="CONT" maxlength="400" onkeyup="chkStrByte();">택배업체에서 수거하였습니다. 익일 발송 预期</textarea></td>
					</tr>
					<tr> 
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></th>
						<td><input type="text" class="iptBox1" name="SMS_BYTE" id="SMS_BYTE" value="43" maxlength="3" style="border:0;width:20px;" readonly=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></td>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用与否</font></font></th>
						<td>
							<select name="USE_YN" id="USE_YN"> 
								<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></option>
								<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未使用</font></font></option>
							</select>
						</td> 
					</tr>	
				</tbody>
			</table>
		</form>

		<div class="btn-area alCenter">
			<span class="whGraBtn_bg ty2">
				<button type="button" class="txt" onclick="fnReg_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认</font></font></button>
			</span>
			<span class="whGraBtn ty2">
				<button type="button" class="txt" onclick="window.close();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></button>
			</span>
		</div>
	</div>
	
	<div id="goog-gt-tt" class="skiptranslate" dir="ltr">
		<div style="padding: 8px;">
			<div>
				<div class="logo"><img src="./sns5_files/translate_24dp.png" width="20" height="20" alt="Google 翻译">
				</div>
			</div>
		</div>
	
		<div class="top" style="padding: 8px; float: left; width: 100%;">
			<h1 class="title gray">原文</h1>
		</div>
		
		<div class="middle" style="padding: 8px;">
			<div class="original-text"></div>
		</div>
		
		<div class="bottom" style="padding: 8px;">
			<div class="activity-links">
				<span class="activity-link">提供更好的翻译建议</span>
				<span class="activity-link"></span>
			</div>
			<div class="started-activity-container">
				<hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
				<div class="activity-root"></div>
			</div>
		</div>
		
		<div class="status-message" style="display: none;"></div>
	</div>

	<div class="goog-te-spinner-pos">
		<div class="goog-te-spinner-animation">
			<svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
				<circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
			</svg>
		</div>
	</div>
</body>
</html>