
// Enter 검색
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', 1);
	}
});

// 국가 선택
$(document).on("change", "input[name='sNationSeq']", function() {
	$("#frmSearch").submit();
});



// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}


// 삭제
function fnDel_M(SiteSeq) {
	var oField = null;

	if ( !confirm("선택 사이트를 삭제하시겠습니까?") ) {
		return;
	}

	//$(FrmNm).attr("action", "./ShopSite_IMD.asp").submit();
	//return;

	var NewData = new FormData();
	NewData.append('sKind', 'D');
	NewData.append('SITE_SEQ', SiteSeq);
	$.ajax({ url: "./ShopSite_IMD.asp" ,
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