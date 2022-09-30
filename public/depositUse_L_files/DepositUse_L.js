var FrmNm = '#frmSearch';

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