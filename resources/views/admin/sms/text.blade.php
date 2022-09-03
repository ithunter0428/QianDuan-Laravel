<!-- saved from url=(0068)http://ds2.areumsoft.co/Admin/Sms/Sms_W.asp?gMnu1=107&gMnu2=10703 -->
<html class="no-js translated-ltr" lang="zh-CN">
<!--<![endif]--><!--[if IE 6]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie6" lang="ko-KR"> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="ko-KR"> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9 ie8" lang="ko-KR"> <![endif]--><!--[if IE 9]> <html class="no-js lt-ie10 ie9" lang="ko-KR"> <![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<title>世强物流管理系统</title>
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmReset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmCommon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmBoard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/translateelement.css') }}">

    <script type="text/javascript" src="{{ asset('/admin_files/layout/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_files/layout/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/admin_files/layout/Common.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('/admin_files/sms/Sms_W.js') }}"></script>
</head>

<body style="background: none;">
    <div class="pop-title">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送短信</font></font></h3>
    </div>

    <div style="padding:5px;">
        <div class="t_board">
            <table width="100%" border="0">
                <tbody>
                    <tr valign="top">
                        <td width="42%" style="padding-left:25px; box-sizing:border-box;">

                            <!-- Begin : 버튼 -->
                            <table width="100%">
                            <tbody><tr>
                                <td>
                                    <div style="padding:5px 0px;">
                                        <span class="whGraBtn ty2"><button type="button" onclick="smsText.location.href=&#39;SmsText_S.asp&#39;;" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文本框</font></font></button></span>
                                        <span class="whGraBtn ty2"><button type="button" onclick="smsText.location.href=&#39;SmsText_S.asp?sKind=B&#39;;" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></button></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody></table>
                            <!-- End : 버튼 -->

                            <form name="frmSend" id="frmSend" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sKind" id="sKind" value="A">
                            <input type="hidden" name="SMS_SEQ" id="SMS_SEQ">

                            <!-- Begin : 문자발송 폼 -->
                            <table class="order_write order_table_top">
                            <tbody><tr>
                                <th width="30%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">接受者</font></font></th>
                                <td style="line-height:25px;">
                                    <ul>
                                        <li style="padding:3px 0;"><input type="radio" name="SEND_TYPE" id="SEND_TYPE" value="P" checked="">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人</font></font></label> <input type="text" name="RECEIVE_MOB_NO" id="RECEIVE_MOB_NO" size="15" maxlength="40" class="iptBox1" value=""></li>
                                        <li style="padding:3px 0;"><input type="radio" name="SEND_TYPE" id="SEND_TYPE" value="T"> <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">团体</font></font></label>
                                            <select name="GRADE_NO" id="GRADE_NO">
                                                <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

                                                    <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></option>

                                                    <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></option>

                                                    <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></option>

                                                    <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></option>

                                                    <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></option>

                                            </select>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发件人</font></font></th>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">070-4655-4307</font></font><input type="hidden" name="SEND_MOB_NO" id="SEND_MOB_NO" size="15" maxlength="40" class="iptBox1" value="070-4655-4307"></td>
                            </tr>
                            <!--tr>
                                <th>MMS 파일</th>
                                <td><input type="file" name="MMS_FILE_NM" id="MMS_FILE_NM" size="15" value="" /></td>
                            </tr-->
                            <tr>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字符内容</font></font><br><br><label id="sByte"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></th>
                                <td align="left" valign="top">
                                    <div class="smsBG">
                                        <div class="smsArea">
                                        <textarea name="SEND_MSG" id="SEND_MSG" class="smsText" onkeyup="fnLengChk(this, fnEB(&#39;sByte&#39;), 2000);" onblur="fnLengChk(this, fnEB(&#39;sByte&#39;), 2000);"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="line-height:130%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    目前，剩余数量为</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> P。</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                    文本发送为80字节，超过则发送到LMS。</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    SMS是发送短信的</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ps。</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    发短信的 LMS 是</font></font><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> P。</font><span class="bold"><font style="vertical-align: inherit;">MMS 是100</font></span></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> P
                                    发短信</font><font style="vertical-align: inherit;">。</font><font style="vertical-align: inherit;">（附图片文件）
                                </font></font><span class="bold"><font style="vertical-align: inherit;"></font></span><font style="vertical-align: inherit;"></font></td>
                            </tr>
                            </tbody></table>

                            </form>
                            <!-- End : 문자발송 폼 -->

                            <!-- Begin : 버튼 -->
                            <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                            <tbody><tr>
                                <td>
                                    <div style="padding:5px 0px;" class="fl">
                                        <span class="whGraBtn_bg ty2 "><button type="button" onclick="fnSend();" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送</font></font></button></span>
                                    </div>
                                    <div style="padding:5px 0px;" class="fr">
                                        <span class="whGraBtn ty2 "><button type="button" onclick="window.close();" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></button></span> &nbsp;
                                        <span class="whGrnBtn ty2 "><button type="button" onclick="window.open(&#39;/Admin/Sms/SmsCont_L.asp&#39;, &#39;_blank&#39;);" class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">短信文本管理</font></font></button></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody></table>
                            <!-- End : 버튼 -->

                        </td>

                        <td style="padding-left: 5px;">
                            <iframe frameborder="0" scrolling="yes" width="580" height="490" name="smsText" id="smsText" src="./sns_files/SmsText_S.html"></iframe>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px;"><div><div class="logo"><img src="./sns_files/translate_24dp.png" width="20" height="20" alt="Google 翻译"></div></div></div>
        <div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">原文</h1></div>
        <div class="middle" style="padding: 8px;"><div class="original-text"></div></div>
        <div class="bottom" style="padding: 8px;">
            <div class="activity-links"><span class="activity-link">提供更好的翻译建议</span><span class="activity-link"></span></div>
            <div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div>
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
