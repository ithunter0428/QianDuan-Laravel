var DialogNm = "#NotePop";

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

// 알림메시지 클릭
function fnNoteView(NoteSeq) {
	var url = "/Admin/Member/Note_V.asp?sNoteSeq="+NoteSeq;

	$('.opened-dialogs'+NoteSeq).dialog("close");

	$('<div class="opened-dialogs'+NoteSeq+'">').html('loading...').dialog({
		open: function () {
			$(this).load(url);
		},
		close: function(event, ui) {
			$(this).remove();
		},
		title: "알림메시지내용",
		modal: true,
		minWidth: 800,
		//minHeight: 220
		height: "auto"
	});

	return false;

}

// 알림메시지 팝업 닫기
function fnNoteClose() {
	$(".opened-dialogs").remove();
}

// 삭제
function fnNoteDel_M() {
	var oNoteSeq = $("input[name='ckNOTE_SEQ']");

	if ( fnCkBoxVal(oNoteSeq) == '' ) {
		alert('알림메시지를 선택하십시오.');
		return;
	}

	if ( confirm('선택 알림메시지 건을 삭제하시겠습니까?') ) {
		$.ajax({ url: "./Note_ID.asp" ,
			method: 'POST',
			data : {sKind:"ND", NOTE_SEQ:fnCkBoxVal(oNoteSeq)},
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