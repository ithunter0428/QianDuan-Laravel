
//바이트수 계산
 function chkStrByte(val) {
	var str = $("#CONT_"+val).val();
	var strLen = 0;
 
	strLen = fnLengRtn(str); 

	if (strLen > 80) {
		alert('더이상 입력하실 수 없습니다');
		$("#CONT_"+val).val(cutStr(str, 80));
		$("#SBYTE_"+val).val("80");
	}else{
		$("#SBYTE_"+val).val(strLen);
	}
}
// 문자저장
function fnSmsSetEtc(val){
  
	if ( !fnFormChk( "input", $("#CONT_"+val) ) ) {
		alert('내용을 입력하세요.'); $("#CONT_"+val).focus();
		return;
	} 
  
	var val1 = "sKind=A"
	val1 += "&TRAN_TMPL_CD="+val+"&SBYTE="+$("#SBYTE_"+val).val()+"&CONT="+escape($("#CONT_"+val).val())+"&SEND_YN="+$("#SEND_YN_"+val).val();  
  
	$.ajax({ url: "./SmsSetEtc_A.asp" ,
		method: 'GET',
		data : val1,
		processData: false,
		contentType: false,
		cache: false,
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "":
				alert('성공적으로 등록되었습니다.');  
				document.location.href="SmsSetEtc_S.asp";
				break; 
			default: alert(data.RST_NO+' 정상적으로 저장되지 않았습니다.\n솔루션 관리자게에 문의하십시오.');
				break;
			}
		},
		error: function(error) {
			alert( error );
		}
	}); 
}
 