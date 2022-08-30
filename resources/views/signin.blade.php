<title>世强物流管理系统</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmReset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmCommon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmBoard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/layout/AdmLogin.css') }}">

<script type="text/javascript" src="{{ asset('/admin_files/layout/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_files/layout/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_files/layout/Common.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
    });

    // Login
    function fnAdmLogin() {
        var FrmNm = "#FrmLogin";
        var oField = null;

        oField = $("#FrmLogin input[name='sMemEmail']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入Email.'); oField.focus();
            return;
        }
        oField = $("#FrmLogin input[name='sMemPw']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入密码.'); oField.focus();
            return;
        }

        $(FrmNm).submit();
    }

</script>
</head>

<body style="">

<div class="container">
	<div id="login-box">
		<div class="img"><i class="icon-feather-log-in"></i></div>
		<h2>登录</h2>

		<form name="FrmLogin" id="FrmLogin" method="get" action="{{ route("login") }}">
            <dl>
                @csrf
                <dt>电子邮件:</dt>
                <dd><input name="sMemEmail" id="sMemEmail" class="form-login" title="ID" size="30" maxlength="20">
                <i class="icon-material-outline-account-circle"></i>
                </dd>
                <dt>密码:</dt>
                <dd><input name="sMemPw" id="sMemPw" type="password" onKeyDown="javascript:if(event.keyCode == 13) fnAdmLogin();" class="form-login" title="密码" value="" size="30" maxlength="20"><i class="icon-material-outline-https"></i> </dd>
            </dl>
            @if (Session::has('signin_errors'))
                <p class="errors">{{ Session::get('signin_errors') }}</p>
            @endif
            <p class="btn"><a onclick="fnAdmLogin()" target="_self">登录会员</a></p>
            <p class="options"><a href="{{ route('view_signup') }}">注册会员</a></p>
		</form>
	</div>
</div>

</body></html>
