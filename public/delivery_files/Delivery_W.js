var gSubmit = false;

$(document).ready(function() {

	fnCenterSel_S();

});



// Focus
$(document).on("focus", "input", function(event) {
	$(this).select();
});

// 주의사항 동의
$(document).on("click", ".BtnYack", function(event) {
	$("#frmAgree").attr("action", "./Delivery_W.asp").submit();
});

// 센터 선택
$(document).on("change", "input[name='SEND_CENTER_SEQ']", function() {
	fnCenterSel_S();
});


// 센터 선택
function fnCenterSel_S() {
	$("input[name='SEND_CENTER_SEQ']").each( function() {
		if ( $(this).prop("checked") == true ) {
			var aShipCd = $(this).attr("ShipCd").split(','); // 운송방식 코드
			var aShipNm = $(this).attr("ShipNm").split(','); // 운송방식 이름
			gListCtmsMny = $(this).attr("ListCtmsMny"); // 목록통관 금액
			gGenCtmsMny = $(this).attr("GenCtmsMny"); // 일반통관 금액
			gNationSeq	= $(this).attr("NationSeq"); // 국가

			$("#vw_CrrCd").text( $(this).attr("CrrEnNm") ); // 화폐단위

			$("#vw_DLVR_WAY_CD").html('');
			if ( aShipCd.length == 1 ) {
				$("#vw_DLVR_WAY_CD").append('<div class="radio"><input type="radio" name="DLVR_WAY_CD" id="DLVR_WAY_CD_'+aShipCd[0]+'" value="'+aShipCd[0]+'" /><label for="DLVR_WAY_CD_'+aShipCd[0]+'"><span class="radio-label"></span>'+aShipNm[0]+'</label></div>');
			} else {
				for (var i = 0; i < aShipCd.length; i++) {
					$("#vw_DLVR_WAY_CD").append('<div class="radio"><input type="radio" name="DLVR_WAY_CD" id="DLVR_WAY_CD_'+aShipCd[i]+'" value="'+aShipCd[i]+'" /><label for="DLVR_WAY_CD_'+aShipCd[i]+'"><span class="radio-label"></span>'+aShipNm[i]+'</label></div>');
				}
			}
		}
	});
}

// 다음 단계
function fnNext() {
	var oField = null;
	var FailCnt = 0;

	// Service application notes
	oField = $("input[name='ServerAgree']");
	if ( fnCkBoxVal(oField) == '' ) {
		alert('Agree to the service precaution and content.'); $("input[name='SEND_CENTER_SEQ']").focus(); FailCnt = 1;
		return;
	}

	// Center
	oField = $("input[name='SEND_CENTER_SEQ']");
	if ( fnCkBoxVal(oField) == '' ) {
		alert('Select delivery center.');oField.focus(); FailCnt = 1;
		return;
	}
	// Delivery method
	oField = $("input[name='DLVR_WAY_CD']");
	if ( fnCkBoxVal(oField) == '' ) {
		alert('Select delivery method.');oField.focus(); FailCnt = 1;
		return;
	}

	$(gFrmNm).attr('target', '').attr('action', './Delivery_W1.asp').submit();
}