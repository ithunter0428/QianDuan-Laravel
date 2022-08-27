var FrmNm = "#frmSend";
var gSubmit = false;

$(document).ready(function() {

	$("#SEND_MSG").focus();
});


// 회원선택
function fnChoice(pPhone) {
	var frmObj = document.frmSend;
	var sPhone = fnEB("RECEIVE_MOB_NO");

	sPhone.value = pPhone;
}
// 취소
function fnCnl() {
	var frmObj = document.frmSend;

	fnEB('sByte').innerHTML = '0';
	frmObj.reset();
}

// 수정
function fnMod(pSeq, pVal) {
	var frmObj = document.frmSend;
	var sText = fnEB("SEND_MSG");

	sText.value = pVal;
	frmObj.SMS_SEQ.value = pSeq;
	frmObj.sKind.value = 'M';

	fnLengChk(sText, fnEB('sByte'), 80);
}

// 등록
function fnSend() {
	var oField = null;
	var oField2 = null;


	// 이중 클릭 방지
	if ( gSubmit == true ) {
		alert('문자 발송 중에 있습니다. 잠시만 기다려주십시오.');
		return;
	}

	$("#sKind").val('A');
	
	// 받는사람 유형
	oField = $(':radio[name="SEND_TYPE"]:checked');
	if ( oField.val() == 'P' ) {

		oField2 = $("input[name='RECEIVE_MOB_NO']");

		if ( oField2.val() == '' || oField2.val().length < 10) {
			alert('받는 사람의 전화번호를 10자리 이상 입력하십시오.'); oField2.focus();
			return;
		}

	}else {
		oField2 = $("select[name='GRADE_NO']");
		if ( oField2.val() == '0' ) {
			alert('그룹 옵션을 선택하세요.'); oField2.focus();
			return;
		}
	}

	// 문자내용
	oField = $("textarea[name='SEND_MSG']");
	if ( oField.val() == '' ) {
		alert('내용을 입력하십시오.'); oField.focus();
		return;
	}
	
	if (!confirm('문자를 발송하시겠습니까?')) {
		return;
	}

	

	//$(FrmNm).attr("action", "./Sms_I.asp").submit();
	//return;

	gSubmit = true;

	var NewData = new FormData($(FrmNm)[0]);
	$.ajax({ url: "./Sms_I.asp" ,
		method: 'POST',
		data : NewData,
		processData: false,
		contentType: false,
		cache: false,
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				//alert('문자를 발송하였습니다.');
				//$("input[name='RECEIVE_MOB_NO']").val('');
				break;
			default: alert(data.RST_NO+' 정상적으로 처리되지 않았습니다.\n솔루션 관리자게에 문의하십시오.');
				break;
			}
			gSubmit = false;
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

}
