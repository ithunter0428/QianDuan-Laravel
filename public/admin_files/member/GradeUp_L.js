$(document).ready(function() {

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



// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}


// 회원등업처리
function fnGradeUp_M() {
	var MemCode = '', NextGradeNo = '', CouponYn = '', LimitDay = 30;

	// 회원 등급
	$("input[name='MEM_CODE']").each( function() {
		if ( $(this).prop("checked") == true ) {
			MemCode += MemCode != '' ? ',' + $(this).val() : $(this).val();
			NextGradeNo += NextGradeNo != '' ? ',' + $(this).attr('NextGradeNo') : $(this).attr('NextGradeNo');
		}
	});

	if ( MemCode == '' ) {
		alert('등업할 회원을 선택하십시오.'); return;
	}

	CouponYn = $("select[name='COUPON_YN']").val();
	LimitDay = $("select[name='LIMIT_DAY']").val();

	if ( confirm('선택 회원을 등업처리하시겠습니까?') ) {
		$.ajax({ url: "./Mem_IMD.asp" ,
			method: 'POST',
			data : {sKind: "GU", MEM_CODE: MemCode, NEXT_GRADE_NO: NextGradeNo, COUPON_YN: CouponYn, LIMIT_DAY: LimitDay},
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