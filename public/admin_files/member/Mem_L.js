$(document).ready(function() {
    $('#example').DataTable();

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


// Enter Search
$(document).on("keydown", ".EnterKey", function(key) {
	if ( key.keyCode == 13 ) {
		fnSearch('frmSearch', '1');
	}
});

// Search
function fnSearch( FrmNm, Go ) {
	if ( Go != '' ) {
		$("#"+FrmNm + " input[name='sGo']").val(Go);
	}

	$("#"+FrmNm).submit();
}

// 보기
function fnView( MainCd ) {
	top.location.href='./CommCd_V.asp?'+$("#frmSearch").serialize()+"&MAIN_CD="+MainCd;
}

// 등급변경
function fnGradeChg_M() {
	var oMemCode = $("input[name='ckMEM_CODE']");
	var oGradeNo = $("select[name='GRADE_NO']");

	if ( fnCkBoxVal(oMemCode) == '' ) {
		alert('회원을 선택하십시오.');
		return;
	}
	if ( oGradeNo.val() == '' ) {
		alert('변경할 등급을 선택하십시오.');
		return;
	}

	if ( confirm('선택 회원의 등급을 변경시키시겠습니까?') ) {
		$.ajax({ url: "./Mem_IMD.asp" ,
			method: 'POST',
			data : {sKind:"G", MEM_CODE:fnCkBoxVal(oMemCode), GRADE_NO:oGradeNo.val()},
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

// 탈퇴취소
function fnOutCan_M() {
	var oMemCode = $("input[name='ckMEM_CODE']");

	if ( fnCkBoxVal(oMemCode) == '' ) {
		alert('회원을 선택하십시오.');
		return;
	}

	if ( confirm('선택 회원의 탈퇴를 취소시키시겠습니까?') ) {
		$.ajax({ url: "./Mem_IMD.asp" ,
			method: 'POST',
			data : {sKind:"C", MEM_CODE:fnCkBoxVal(oMemCode)},
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

// 최종탈퇴
function fnFinalOut_M() {
	var oMemCode = $("input[name='ckMEM_CODE']");

	if ( fnCkBoxVal(oMemCode) == '' ) {
		alert('회원을 선택하십시오.');
		return;
	}

	if ( confirm('선택 회원을 최종 탈퇴시키시겠습니까?') ) {
		$.ajax({ url: "./Mem_IMD.asp" ,
			method: 'POST',
			data : {sKind:"F", MEM_CODE:fnCkBoxVal(oMemCode)},
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

// 注销会员 （Kick out the user)
function fnOut_M(MemCode) {
	var oMemCode = $("input[name='ckMEM_CODE']");
	/*
	if ( fnCkBoxVal(oMemCode) == '' ) {
		alert('请选定成员吧。');
		return;
	}*/

	if ( confirm('您确定要取消选定的成员吗') ) {
		$.ajax({ url: "./Mem_IMD.asp" ,
			method: 'POST',
			data : {sKind: "D", MEM_CODE: MemCode},
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
