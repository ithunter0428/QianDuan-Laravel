

// 삭제
function fnDel_M(BbCode) {
	var oField = null;

	if ( !confirm("선택 게시판을 삭제하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./BbSet_IMD.asp" ,
		method: 'POST',
		data : {'sKind':'D', 'BB_CODE':BbCode},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
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