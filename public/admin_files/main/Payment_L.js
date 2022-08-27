
$(document).ready(function() {

	// 달력 Init
	$(".dtPic" ).datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true,
		yearRange:"1940:"+new Date().getFullYear()
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

// 숫자
$(document).on("change", "input[name='sPaymentSeq']", function(idx) {
	$(this).val( fnNumChk($(this).val()) );
});


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}

// 무통장 취소
function fnBankCal_M(PaymentSeq) {

	if ( confirm("무통장입금 건을 취소하시겠습니까?") ) {

		$.ajax({ url: "./Payment_IMD.asp" ,
			method: 'POST',
			data : {sKind:"C", PAYMENT_SEQ:PaymentSeq},
			dataType : 'json' , 
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');top.location.reload();
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
					break;
				}
				SubmitChk = true;
			}
		});
	}

}

// 무통장 입금확인
function fnPaymentCfm_M(PaymentSeq) {

	if ( confirm("선택 무통장입금 건을 입금확인하시겠습니까?") ) {

		$.ajax({ url: "./Payment_IMD.asp" ,
			method: 'POST',
			data : {sKind:"M", PAYMENT_SEQ:PaymentSeq, SMS_SEND_YN:$("#SMS_SEND_YN").val()},
			dataType : 'json' , 
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "1":
					alert('무통장 입금대기중인 결제 건이 아닙니다.\n이미 결제된 건이 있는 경우 [무통장입금 취소]후 개별 진행해주십시오.');
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');top.location.reload();
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
					break;
				}
				SubmitChk = true;
			}
		});
	}

}

// 결제 취소
function fnPaymentCan_M(PaymentSeq) {

	if ( confirm("결제완료 건을 취소하시겠습니까?\n취소하시면 결제내역은 삭제되며, 미입금 건으로 되돌려집니다.") ) {

		$.ajax({ url: "./Payment_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", PAYMENT_SEQ:PaymentSeq},
			dataType : 'json' , 
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');top.location.reload();
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
					break;
				}
				SubmitChk = true;
			}
		});
	}

}