var DialogNm = "#NotePop";

$(document).ready(function() {
	// 달력 Init
	$(".dtPic").datepicker({
		dateFormat:'yy-mm-dd',
		changeMonth:true,
		changeYear:true
	});
    $('#ui-datepicker-div').css('clip', 'auto');


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
$(document).on("change", "input[name='sReqSeq']", function(idx) {
	$(this).val( fnNumChk($(this).val()) );
});


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}

// 전체 변경
function fnCompYnAll_M(CompYn) {
	var oReqSeq = $("input[name='ckREQ_SEQ']");

	if ( fnCkBoxVal(oReqSeq) == '' ) {
		alert('신청 건을 선택하십시오.');
		return;
	}

	if ( confirm('선택 신청 건을 완료 하시겠습니까?') ) {
		$.ajax({ url: "./DepositReq_IMD.asp" ,
			method: 'POST',
			data : {sKind:"M", REQ_SEQ:fnCkBoxVal(oReqSeq), COMP_YN:CompYn},
			dataType : 'json',
			success: function(data) {
				if ( data.RST_MSG != '' ) {
					alert('예치금신청 번호 : ' + data.RST_MSG + '는 환불 처리되지 않았습니다.');
				}
				top.location.reload();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}
}

// 완료 처리
function fnCompYes(ReqSeq) {
	if ( confirm('해당 신청 건을 완료 하시겠습니까?') ) {

		$.ajax({ url: "./DepositReq_IMD.asp" ,
			method: 'POST',
			data : {sKind:"M", REQ_SEQ:ReqSeq, COMP_YN:"Y"},
			dataType : 'json',
			success: function(data) {
				if ( data.RST_MSG != '' ) {
					alert('예치금신청 번호 : ' + data.RST_MSG + '는 환불 처리되지 않았습니다.');
				}
				top.location.reload();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});

	}
}

// 삭제 처리
function fnCompDel(ReqSeq) {
	if ( confirm('해당 신청 건을 취소 하시겠습니까?') ) {

		$.ajax({ url: "./DepositReq_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", REQ_SEQ:ReqSeq},
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
