var gFrmNm = '#frmSmsCont';
var gSubmit = false;


$(document).ready(function(){
	chkStrByte();
});

$(document).on("change", "select[name='STATE_SEQ']", function() {

	if ( $(this).val() != '' ) {
		$("input[name='SBJ']").val($("option:selected", $(this)).text());
	} else {
		$("input[name='SBJ']").val('');
	}

});

// 바이트 수 계산
 function chkStrByte() {
	var str = $("#CONT").val();
	var strLen = 0;

	strLen = getByte(str); 

	$("input[name='SMS_BYTE']").val(strLen);
}

// 문자열의 byte 길이 가져옴
function getByte(str) {
    var i
    var re_count = 0
    var val = '';

    for (i = 0; i < str.length; i++) {
        val = escape(str.charAt(i)).length;
        
        if (val > 4) {
            re_count += 2;
        }
        else {
            re_count++;
        }
    }

    return re_count;
}

// 등록
function fnReg_M() {
	var oField = null;

	// 이중 클릭 방지
	if ( gSubmit == true ) {
		alert('문자 등록 중에 있습니다. 잠시만 기다려주십시오.');
		return;
	}

	// 제목
	oField = $("input[name='SBJ']");
	if ( oField.val() == '' ) {
		alert('제목을 입력하십시오.'); oField.focus();
		return;
	}

	// 문자내용
	oField = $("textarea[name='CONT']");
	if ( oField.val() == '' ) {
		alert('내용을 입력하십시오.'); oField.focus();
		return;
	}

	//$(gFrmNm).attr("action", "./SmsCont_IM.asp").submit();
	//return;

	gSubmit = true;

	$.ajax({ url: "./SmsCont_IM.asp" ,
		method: 'POST',
		data : $(gFrmNm).serialize(),
		dataType : 'json' , 
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				opener.location.reload();
				window.close();
				break;
			case "-1":
				alert('정상적인 경로가 아닙니다.');
				break;
			default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
				break;
			}
			gSubmit = false;
		}
	});
}