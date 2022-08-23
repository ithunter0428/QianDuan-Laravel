<title>世强物流管理系统</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/AdmReset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/AdmCommon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/AdmBoard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_files/AdmRegister.css') }}">

<script type="text/javascript" src="{{ asset('/admin_files/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_files/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_files/Common.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
    });

    // Register
    function fnAdmRegister() {
        var FrmNm = "#FrmRegister";
        var oField = null;

        oField = $("#FrmRegister input[name='sFirstName']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入FirstName.'); oField.focus();
            return;
        }
        oField = $("#FrmRegister input[name='sLastName']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入LastName.'); oField.focus();
            return;
        }
        oField = $("#FrmRegister input[name='sMemEmail']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入Email.'); oField.focus();
            return;
        }
        oField = $("#FrmRegister input[name='sMemPw']");
        if ( !fnFormChk( "input", oField ) ) {
            alert('请输入密码.'); oField.focus();
            return;
        }

        if ( $("#FrmRegister input[name='sMemPw']").val() != $("#FrmRegister input[name='sMemPwCf']").val() ) {
            alert('Confirm Password');
            return;
        }

        $.ajax({ url: "{{ route("register") }}" ,
            method: 'POST',
            data : $(FrmNm).serialize(),
            dataType : 'json' ,
            success: function(data) {
                switch ( data.RST_NO ) {
                case "0":
                    alert("Success")
                    toLogin();
                    break;
                case "1":
                    alert(data.RST_MSG); break;
                }
            }
        });
    }

</script>
</head>

<body style="">

<div class="container">
	<div id="register-box">
		<div class="img"><i class="icon-feather-log-in"></i></div>
		<h2>Register</h2>

		<form name="FrmRegister" id="FrmRegister">
            <dl>
                @csrf
                <dt>First Name:</dt>
                <dd><input name="sFirstName" id="sFirstName" class="form-login" title="FirstName" size="30" maxlength="20"></dd>
                <dt>Last Name:</dt>
                <dd><input name="sLastName" id="sLastName" class="form-login" title="LastName" size="30" maxlength="20"></dd>
                <dt>Email:</dt>
                <dd><input name="sMemEmail" id="sMemEmail" class="form-login" title="ID" size="30" maxlength="20"></dd>
                <i class="icon-material-outline-account-circle"></i>
                </dd>
                <dt>Password:</dt>
                <dd><input name="sMemPw" id="sMemPw" type="password" class="form-login" title="密码" value="" size="30" maxlength="20"><i class="icon-material-outline-https"></i> </dd>
                <dt>Confirm:</dt>
                <dd><input name="sMemPwCf" id="sMemPwCf" type="password" class="form-login" title="密码" value="" size="30" maxlength="20"><i class="icon-material-outline-https"></i> </dd>
            </dl>
            <p class="btn"><a onclick="fnAdmRegister()" target="_self">Register</a></p>
            <p class="options">
                <a href="{{ route('view_signin') }}">Login</a>
            </p>
		</form>
	</div>
</div>

</body></html>
