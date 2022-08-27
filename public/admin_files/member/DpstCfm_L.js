
$(document).ready(function() {

	// 달력 Init
	$(".dtPic" ).datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true
	});

});


$(function() {
	var DpstStateCd = '';

	$("select[name='DPST_STATE_CD']").on("focus", function() {
		DpstStateCd = $(this).val();
	}).change( function() {
		var CfmSeq = $(this).attr('CfmSeq');

		if ( $(this).val() != '' ) {
			if ( confirm('선택한 상태로 변경하시겠습니까?') ) {

				$.ajax({ url: "./DpstCfm_IM.asp" ,
					method: 'POST',
					data : {sKind: "S", CFM_SEQ: CfmSeq, DPST_STATE_CD: $(this).val()},
					dataType : 'html',
					success: function(data) { 
						top.location.reload();
					},
					error: function(e) {
						alert( e.responseText );
					}
				});

			} else {
				$(this).val(DpstStateCd);
			}
		}

	});

});

// 일자 취소
$(document).on("click", ".DtCan", function() {
	$("input[name='"+$(this).attr("rel")+"']").val('');
});


// 페이지 이동
function fnSearch(sObj, sGo) {
	var frmObj = "#"+sObj;
	$(frmObj + " input[name='sGo']").val(sGo);

	$(frmObj).attr("method", "get").attr("action", "./DpstCfm_L.asp").attr("target", "");
	$(frmObj).submit();

}


// 결제, 예치금 검색
function fnPaySearch(CfmSeq, SearchTy, PayTy, Val) {

	$.ajax({ url: "./DpstSearch_L.asp" ,
		method: 'POST',
		data : {CFM_SEQ: CfmSeq, SEARCH_DVS: SearchTy, PAYMENT_DVS: PayTy, VALUE: Val},
		dataType : 'html',
		success: function(data) { 
			$("#dvSearch").html(data);
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

}


// 무통장 입금 강제확인 체크박스
function fnDpstCfmCkBox() {
	var FrmNm = "#frmList";
	var CfmSeq = $("#frmHid input[name='CFM_SEQ']").val();
	var PmtSeq = fnCkBoxVal($("input[name='ckPAYMENT_SEQ']"));

	if ( PmtSeq == '' ) {
		alert('결제(예치금) 신청 번호를 선택해주십시오.');
	} else {

		if ( confirm('선택 결제(예치금)을 무통장입금 번호(' + CfmSeq + ')에 연결시키시겠습니까?') ) {
			$("#frmHid input[name='PAYMENT_SEQ']").val(PmtSeq);
			$.ajax({ url: "./DpstCfm_IM.asp" ,
				method: 'POST',
				data : $("#frmHid").serialize(),
				dataType : 'json' , 
				success: function(data) { 
					switch ( data.RST_NO ) {
					case "0":
						top.location.reload();
						break;
					case "-1":
						alert('정상적인 경로가 아닙니다.');top.location.reload();
						break;
					default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
						break;
					}
					SubmitChk = true;
				}
			});
		}

	}
}


// 무통장 입금 강제확인
function fnDpstCfm(PmtSeq) {
	var FrmNm = "#frmList";
	var CfmSeq = $("#frmHid input[name='CFM_SEQ']").val();

	if ( PmtSeq == '' ) {
		alert('결제(예치금) 신청 번호를 선택해주십시오.');
	} else {

		if ( confirm('선택 결제(예치금)을 무통장입금 번호(' + CfmSeq + ')에 연결시키시겠습니까?') ) {

			$("#frmHid input[name='PAYMENT_SEQ']").val(PmtSeq);
			$.ajax({ url: "./DpstCfm_IM.asp" ,
				method: 'POST',
				data : $("#frmHid").serialize(),
				dataType : 'json' , 
				success: function(data) { 
					switch ( data.RST_NO ) {
					case "0":
						top.location.reload();
						break;
					case "-1":
						alert('정상적인 경로가 아닙니다.');top.location.reload();
						break;
					default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
						break;
					}
					SubmitChk = true;
				}
			});

		}

	}
}


// 엑셀다운로드
function fnExcelDown() {
	var FormData = $("#frmSearch").serialize();
	var $DynFrm	= fnDnyamicForm( 'frmExcel', 'post' )

	if ( !confirm('출고완료 건 다운로드 시 일자 검색을 통하여 최소한의 주문 건만 다운로드 하십시오.\n다운로드 하시겠습니까?') ) {
		return;
	}

	$DynFrm.attr('action', '/Admin/DpstCfm/DpstCfm_X.asp').submit();

}