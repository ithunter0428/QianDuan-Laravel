var users = [];
var table_users = [];
var mCouponType =  'all' // If value is 'all' coupon is distributed for all member, and if value is 'one' coupon is distributed for only on member
var selected_member = -1;

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

	// 
	$('[name=coupon_radio]').change(function() {
		var value = $(this).val()
		if (value == 'all') {
			$('#sMemberPan').hide();
		}
		else if (value === 'one') {
			$('#sMemberPan').show();
		}
		mCouponType = value;
	})

	// Load Members
	fnGetMemberList()
});

// Load List
function fnGetMemberList () {
	$.post('/api/coupon/member_coupon/members', {}, function(resp){
		if (resp.success == true) {
			users = resp.data;
			table_users = users;
			fnDrawMemberTable();
		}
	})
}

// Draw Member Table
function fnDrawMemberTable () {
	$('#member_table tbody').html('')
	table_users.map(user => {
		$('#member_table tbody').append(`
		<tr uid=${user.id}>
			<td class="alCenter">
				<label class=""><input type="checkbox" name="ckMEM_CODE" value="${user.id}">
					<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${user.id}</font></font></span>
				</label>
			</td>
			<td class="alCenter">
				<font style="vertical-align: inherit;">[Level ${user.grade}]</font>
				<a onclick="fnView(${user.id})" memcode="${user.id}" class="tipMem" data-hasqtip="3">
					<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ${user.name} </font></font></span>
				</a>
			</td>
			<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${user.user_id}</font></font></span></td>
			<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${user.mailbox_number }</font></font></span></td>
			<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${ user.cellphone_number }</font></font></span></td>
			<td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${ user.advance_payment }</font></font></span></td>
			<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">${ user.last_visited_at }</font></font></span></td>
		</tr>`)
	})	
	$('#member_table tbody').find('input[type=checkbox]').click(function(){
		if ($(this).is(':checked')) {
			var selectedCount = $('#member_table').find('input[type=checkbox]:checked').length;
			if (selectedCount > 1) {
				$(this).prop('checked', false);
			}
			else {
				selected_member = $(this).closest('tr').attr('uid')
			}
		} 
	})
} 

// 
function fnMemberSearch() {
	var memId = $('#tMemId').val();
	var memNm = $('#tMemNm').val();
	var grade = $('#tGradeNo').val()
	var postNo = $('#tPostNo').val();
	table_users = users.filter(user => user.name.includes(memNm) && user.user_id.includes(memId) && (grade == 0 || user.grade == grade))
	fnDrawMemberTable()
}

// 
function fnSave()
{
	if (fnVaidateForm() == false)	return;
	var params = $('#frmSmsCont').serialize();
	
	if (mCouponType == 'all') {
		$.ajax({ url: "/api/coupon/member_coupon/distribute_to_all" ,
		method: 'PUT',
		data : params,
		dataType : 'json',
		success: function(resp) {
			if (resp.success == true) {
				alert("分发成功。")
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
		});
	}
	else if (mCouponType == 'one') {
		console.log(params + `&member_id=${selected_member}`)
		$.ajax({ url: "/api/coupon/member_coupon/distribute_to_one" ,
		method: 'PUT',
		data : params + `&member_id=${selected_member}`,
		dataType : 'json',
		success: function(resp) {
			if (resp.success == true) {
				alert("分发成功。")
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
		});
	}
}

function fnVaidateForm() {
	var $form = $('#frmSmsCont')
	// 발급구분
	oField = $("select[name='sIssueDvsCd']", $form);
	if ( !fnFormChk( "select", oField ) ) {
		alert('발급구분을 선택하십시오.'); oField.focus();
		return false;
	}
	// 쿠폰종류
	oField = $("select[name='sChargeDetCd']", $form);
	if ( !fnFormChk( "select", oField ) ) {
		alert('쿠폰종류를 선택하십시오.'); oField.focus();
		return false;
	}
	// 금액 화폐단위
	oField = $("select[name='sCrUnit']", $form);
	if ( !fnFormChk( "select", oField ) ) {
		alert('금액 화폐단위를 선택하십시오.'); oField.focus();
		return false;
	}
	// 금액
	oField = $("input[name='sMny']", $form);
	if ( !fnFormChk( "input", oField ) || Number(oField.val()) <= 0 ) {
		alert('금액을 입력하십시오.'); oField.focus();
		return false;
	}
	// 시작일자
	oField = $("input[name='BEGIN_DT']", $form);
	if ( !fnFormChk( "input", oField ) ) {
		alert('시작일자를 입력하십시오.'); oField.focus();
		return false;
	}
	// 종료일자
	oField = $("input[name='END_DT']", $form);
	if ( !fnFormChk( "input", oField ) ) {
		alert('종료일자를 입력하십시오.'); oField.focus();
		return false;
	}
	if (mCouponType == 'one' && $('#member_table').find('input[type=checkbox]:checked').length != 1) {
		alert('Plz Select Member');
		return;
	}
	return true;
}

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

// Distribute Coupon
function fnOpenCouponModal() {
	$('#distribute_coupon_modal').modal()
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