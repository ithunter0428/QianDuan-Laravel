var FrmNm = "#frmReg";

$(document).ready(function() {


});


// 등록
function fnReg_M() {
	var oField = null;
	var oField2 = $("#sKind");

	// 이름
	oField = $("input[name='MEM_NM']");
	if ( !fnFormChk( "input", oField ) ) {
		alert('이름(한글)을 입력하십시오.'); oField.focus();
		return;
	}

	// 비밀번호
	oField = $("input[name='MEM_PW']");
	if ( oField.val() != ''  || oField2.val() == "A" ) {
		if ( !fnFormLenChk( oField, 6, 20 ) ) {
			alert('비밀번호를 입력하십시오( 6~20자리 )'); oField.focus();
			return;
		}
	}


	//$(FrmNm).attr("action", "./Mem_IMD.asp").submit();
	//return;

	$.ajax({ url: "./Adm_IM.asp" ,
		method: 'POST',
		data : $(FrmNm).serialize(),
		dataType : 'json' , 
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				opener.location.reload();
				window.close();
				break;
			case "1":
				alert('아이디가 중복되었습니다.');
				break;
			case "-1":
				alert('정상적인 경로가 아닙니다.');
				break;
			default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
				break;
			}
		}
	});

}