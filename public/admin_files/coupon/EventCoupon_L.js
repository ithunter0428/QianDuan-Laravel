var gFrmNm = '#frmReg';
var gSubmit = false;


// Focus
$(document).on("focus", "input", function(event) {
	$(this).select();

	// 달력 Init
	$(".dtPic" ).datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true
	});
});

// 단가/수량 변경
$(document).on("change", ".Cal", function(idx) {
	$(this).val( fnNumChiper($(this).val(), 0) );
});


// 쿠폰 등록
function fnReg_M() {
	var oField = null;

	// 이중 클릭 방지
	if ( gSubmit == true ) {
		alert('등록 중에 있습니다. 잠시만 기다려주십시오.');
		return;
	}

	// 발급구분
	oField = $("select[name='ISSUE_DVS_CD']");
	if ( !fnFormChk( "select", oField ) ) {
		alert('발급구분을 선택하십시오.'); oField.focus();
		return false;
	}
	// 쿠폰종류
	oField = $("select[name='CHARGE_DET_CD']");
	if ( !fnFormChk( "select", oField ) ) {
		alert('쿠폰종류를 선택하십시오.'); oField.focus();
		return false;
	}
	// 금액 화폐단위
	oField = $("select[name='CRR_CD']");
	if ( !fnFormChk( "select", oField ) ) {
		alert('금액 화폐단위를 선택하십시오.'); oField.focus();
		return false;
	}
	// 금액
	oField = $("input[name='MNY']");
	if ( !fnFormChk( "input", oField ) || Number(oField.val()) <= 0 ) {
		alert('금액을 입력하십시오.'); oField.focus();
		return false;
	}
	// 시작일자
	oField = $("input[name='BEGIN_DT']");
	if ( !fnFormChk( "input", oField ) ) {
		alert('시작일자를 입력하십시오.'); oField.focus();
		return false;
	}
	// 종료일자
	oField = $("input[name='END_DT']");
	if ( !fnFormChk( "input", oField ) ) {
		alert('종료일자를 입력하십시오.'); oField.focus();
		return false;
	}
	// 유효일
	oField = $("input[name='VALID_DAY']");
	if ( !fnFormChk( "input", oField ) || Number(oField.val()) <= 0 ) {
		alert('유효일을 입력하십시오.'); oField.focus();
		return false;
	}

	//$(gFrmNm).attr("action", "./EventCoupon_IM.asp").submit();
	//return;

	gSubmit = true;

	$.ajax({ url: "./EventCoupon_IM.asp" ,
		method: 'POST',
		data : $(gFrmNm).serialize(),
		dataType : 'json' , 
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
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


// 사용/중지 변경
function fnUse_M(IssueDvsCd, UseYn) {
	if ( confirm('해당 이벤트의 사용 변경을 하시겠습니까?') ) {

		$.ajax({ url: "./EventCoupon_IM.asp" ,
			method: 'POST',
			data : {sKind: "P", ISSUE_DVS_CD: IssueDvsCd, USE_YN: UseYn},
			dataType : 'json' , 
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
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
}