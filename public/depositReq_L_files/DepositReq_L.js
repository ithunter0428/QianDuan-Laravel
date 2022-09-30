var FrmNm = '#frmDpst';


$(document).ready(function() {

	$(".dtPic").each(function() {
		$(this).ionDatePicker();
	});

});

// 일자 변경 포멧
$(document).on("keyup, keydown", ".dtPic", function(e) {

	fnAutoDateFormat(e, this);

});

// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}


// 예치금 신청
function fnDpst_I() {
	var oField = null;
	var oMoney = $("input[name='MNY']");
	var oMemNm = $("input[name='PAYIN_NM']");
	var oPayInDt = $("input[name='PAYIN_DT']");
	var oPayInAcc = $("select[name='PAYIN_ACC']");

	// 예치금액 확인
	if ( oMoney.val() == '' || oMoney.val() == '0' ) {
		alert('예치금액을 입력해주십시오.\n최소 신청 금액은 0원 이상입니다.'); oMoney.focus();
		return;
	}

	// 입금자명 확인
	if ( oMemNm.val() == '' ) {
		alert('입금자명을 입력해주십시오.'); oMemNm.focus();
		return;
	}

	// 입금일 확인
	if ( oPayInDt.val() == '' || oPayInDt.val() == '0' ) {
		alert('입금일을 확인해주십시오.'); return;
	}

	// 입금계좌 확인
	if ( oPayInAcc.val() == '' ) {
		alert('입금하실 계좌를 선택해주십시오.'); return;
	}

	if ( confirm("예치금 신청을 하시겠습니까?") ) {
		$.ajax({ url: "./Deposit_IMD.asp" ,
			method: 'POST',
			data : $(FrmNm).serialize(),
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		}); 
	}

}


// 예치금 신청 취소
function fnDpst_C(oReqSeq) {

	if ( confirm("선택 예치금 신청을 취소하시겠습니까?") ) {
		$.ajax({ url: "./Deposit_IMD.asp" ,
			method: 'POST',
			data : {sKind: "D", REQ_SEQ: oReqSeq},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		}); 
	}

}