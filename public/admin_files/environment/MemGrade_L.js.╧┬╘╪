

// 삭제
function fnDel_M(GradeNo) {
	var oField = null;

	if ( !confirm("선택 등급을 삭제하시겠습니까?") ) {
		return;
	}


	$.ajax({ url: "./MemGrade_IMD.asp" ,
		method: 'POST',
		data : {sKind:"D", GRADE_NO:GradeNo},
		dataType : 'json' , 
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				break;
			default: alert('정상적으로 저장되지 않았습니다.\n솔루션 관리자에게 문의하십시오.');
				break;
			}
		}
	}); 
}