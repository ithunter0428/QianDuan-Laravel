$(document).ready(function() {

	// 달력 Init
	$(".dtPic" ).datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true
	});

	// TollTip
	$('.tipMem').qtip({
		style: {
			classes: 'qtip-blue qtip-rounded'
		},
		show: 'click',
		hide: 'unfocus',
		content: {
			text: function(event, api) {
				$.ajax({
					url: '/Admin/Member/MemPopMenu_S.asp',
					type: 'GET',
					dataType: 'html',
					data: {
						sMemCode: $(this).attr('MemCode')
					},
				})
				.then(function(data) {
					api.set('content.text', data);
				}, function(xhr, status, error) {
					api.set('content.text', status + ': ' + error);
				});

				return 'Loading...'
			}
		}
	});

});


// Enter 검색
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', 1);
	}
});

// 일자 취소
$(document).on("click", ".DtCan", function() {
	$("input[name='"+$(this).attr("rel")+"']").val('');
});

// 숫자
$(document).on("change", "input[name='sUseSeq']", function(idx) {
	$(this).val( fnNumChk($(this).val()) );
});


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}