
// 보기
$(document).on("click", ".BtnView", function() {
	window.open('/Front/Page/HtmlPage.asp?sPageSeq='+$(this).attr("PageSeq"), '_blank');
});

// 삭제
function fnDel_M(PageSeq) {
	var oField = null;

	if ( !confirm("선택 페이지를 삭제하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./HtmlPage_IMD.asp" ,
		method: 'POST',
		data : {'sKind':'D', 'PAGE_SEQ':PageSeq},
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