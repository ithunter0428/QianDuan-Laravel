

// 삭제
function fnDel_M(BnrSeq) {
	var oField = null;

	if ( !confirm("선택 상품을 삭제하시겠습니까?") ) {
		return;
	}

	//$(FrmNm).attr("action", "./RecomPro_IMD.asp").submit();
	//return;

	var NewData = new FormData();
	NewData.append('sKind', 'D');
	NewData.append('BNR_SEQ', BnrSeq);
	$.ajax({ url: "./MainRolling_IMD.asp" ,
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


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}