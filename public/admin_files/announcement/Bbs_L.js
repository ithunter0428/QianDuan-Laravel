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
					type: 'POST',
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


// Search when press enter
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', '1');
	}
});

// Cancel date selecting
$(document).on("click", ".DtCan", function() {
	$("input[name='"+$(this).attr("rel")+"']").val('');
});


// Search
function fnSearch( FrmNm, Go ) {
	if ( Go != '' ) {
		$("#"+FrmNm + " input[name='sGo']").val(Go);
	}

	var oBbbSeq = $("#"+FrmNm + " input[name='sId']");
	oBbbSeq.val(fnNumChk(oBbbSeq.val()));

	$("#"+FrmNm).submit();
}

// writing
function fnBbs_W( BbCode, BbsSeq ) {
	$("#frmSearch input[name='sBbsSeq']").remove();
	fnDnyamicInput( "#frmSearch", "sBbsSeq", BbsSeq );
	$("#frmSearch").attr("action", "./Bbs_W.asp").submit();
}

// View
function fnView_S( current ) {
	current = JSON.parse(current)[0];
	$("#view_modal").modal('show');
	$("#modal_title")[0].innerHTML = current.title;
	$("#modal_content")[0].innerHTML = current.content;
	$("#modal_creator")[0].innerHTML = current.creator;
	$("#modal_view_count")[0].innerHTML = current.view_count;
	$("#modal_created_at")[0].innerHTML = current.created_at;
}

function fnViewModalClose() {
	$(".jquery-modal").removeClass("blocker");
}