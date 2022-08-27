

// Enter 검색
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', 1);
	}
});

$(document).on("click", ".js-layer-close", function() {
	$("#js-layer"+$(this).attr('Seq')).addClass('hidden');

	// 오늘하루 열지않음 체크 : frmLayerPop

});

$(document).on("click", ".js-open", function() {
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();

	fnLayerPop($(this).attr("Seq"));
});

// 레이어 팝업
function fnLayerPop(PopupSeq) {
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();


	$.ajax({ url: "./Popup_S.asp" ,
		method: 'POST',
		data : {sPopupSeq:PopupSeq},
		dataType : 'html',
		success: function(data) { 
			$("#js-layer-cont"+PopupSeq).html(data);
		},
		error: function(e) {
			alert( e.responseText );
		}
	});


	$("#js-layer"+PopupSeq).removeClass('hidden');
}


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}


// 삭제
function fnDel_M(PopupSeq) {
	var oField = null;

	if ( !confirm("선택 팝업을 삭제하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./Popup_IMD.asp" ,
		method: 'POST',
		data : {sKind: "D", POPUP_SEQ: PopupSeq},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				break;
			default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자게에 문의하십시오.');
				break;
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

}

// 레이어 숨기기
function fnMPopClose(PopNm) {
	fnCookieControl( $("#frm" + PopNm + " input[name='closeEvent']:checkbox"), PopNm);
	$("#" + PopNm).hide("slow");
}