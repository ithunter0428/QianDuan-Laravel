
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


// 확인
function fnChatCfm_M( ChatSeq ){
	if ( confirm('해당 문의내역을 확인처리 하시겠습니까?') ) {
		$.ajax({ url: "./OrderChat_IMD.asp" ,
			method: 'POST',
			data : {sKind:"M", CHAT_SEQ:ChatSeq },
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}
}


// 삭제
function fnChatDel_M( ChatSeq ){
	if ( confirm('해당 문의내역을 삭제하시겠습니까?')) {
		$.ajax({ url: "./OrderChat_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", CHAT_SEQ:ChatSeq },
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}
}