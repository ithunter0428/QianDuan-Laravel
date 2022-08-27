
$(document).ready(function() {

	// 달력 Init
	$(".dtPic" ).datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true
	});

});

// Enter 검색
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch');
	}
});

// 일자 취소
$(document).on("click", ".DtCan", function() {
	$("input[name='"+$(this).attr("rel")+"']").val('');
});



// 검색
function fnSearch( FrmNm ) {
	$("#"+FrmNm).submit();
}


// 삭제
function fnDel_M(ScheduleSeq) {

	if ( confirm('선택 출항 스케쥴 건을 삭제시키시겠습니까?') ) {
		$.ajax({ url: "./Departure_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", SCHEDULE_SEQ:ScheduleSeq},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}