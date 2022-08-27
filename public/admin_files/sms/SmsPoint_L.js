
$(document).ready( function() {

	// 달력 Init
	$(".dtPic" ).datepicker({
        currentText: "이번달",
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true,
		closeText: '선택',
		dateFormat:'yy-mm',
		minDate: new Date(2018, 1 - 1, 1),
		maxDate: "+1m +1w",
		monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		onClose: function (dateText, inst) {
			var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
			var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
			$(this).datepicker( "option", "defaultDate", new Date(year, month, 1) );
			$(this).datepicker('setDate', new Date(year, month, 1));
		},
		firstDay: 0,
		showMonthAfterYear: true,
		isRTL: false,
		yearSuffix: '',
		weekHeader: 'Wk'
	});

});


// Enter 검색
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', 1);
	}
});

// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}