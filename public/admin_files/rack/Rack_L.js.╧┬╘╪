
$(document).on("change", "select[name='sCenterSeq']", function() {
	top.location.href = './Rack_L.asp?sCenterSeq='+$(this).val();
});


// 초기화
function fnReset_M(RackCode) {
	var oField = null;

	if ( !confirm("선택 랙코드를 초기화하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./Rack_IMD.asp" ,
		method: 'POST',
		data : {'sKind':'R', 'RACK_CODE':RackCode},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				break;
			case "1":
				alert("사용 중인 랙번호가 없습니다.");
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


// 삭제
function fnDel_M(RackCode) {
	var oField = null;

	if ( !confirm("선택 랙코드를 삭제하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./Rack_IMD.asp" ,
		method: 'POST',
		data : {'sKind':'D', 'RACK_CODE':RackCode},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				break;
			case "1":
				alert("사용 중인 랙번호가 있습니다.\n초기화를 먼저 실행하십시오.");
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