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


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}

// 삭제
function fnCouponDel_M() {
	var oCouponSeq = $("input[name='ckCOUPON_SEQ']");

	if ( fnCkBoxVal(oCouponSeq) == '' ) {
		alert('쿠폰을 선택하십시오.');
		return;
	}

	if ( confirm('선택 쿠폰을 삭제하시겠습니까?') ) {
		$.ajax({ url: "./Coupon_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", COUPON_SEQ:fnCkBoxVal(oCouponSeq)},
			dataType : 'json',
			success: function(data) { 
				top.location.reload();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}
}