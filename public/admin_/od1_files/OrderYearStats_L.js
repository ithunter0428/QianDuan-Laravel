
// 년/월별 년도 변경
$(document).on("change", "select[name='sYear'], select[name='sMonth'], select[name='sSendCenterSeq']", function() {
	fnSearch();
});



// 검색
function fnSearch() {
	$("#frmSearch").submit();
}