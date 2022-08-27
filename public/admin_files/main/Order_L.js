
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

	// 검색 시 상품보기 펼치기
	if ( $("#frmSearch input[name='sTrkNo']").val() != '' || $("#frmSearch input[name='sProNo']").val() != '' ) {
		$("#frmList input[name='ckORDER_NO']").each( function() {
			top.fnProView($(this).val());
		});
	}

	// 검색 시 색상 변경
	if ( $("#frmSearch input[name='sOrderNo']").val() != '' || $("#frmSearch input[name='sIvcNo']").val() != '' ) {
		var oItem = '';

		// 주문번호
		oItem	= $("#frmSearch input[name='sOrderNo']");
		if ( oItem.val() != '' ) {
			fnColorChg(oItem.val(), 'shOrderNo');
		}

		// 운송장번호
		oItem	= $("#frmSearch input[name='sIvcNo']");
		if ( oItem.val() != '' ) {
			fnColorChg(oItem.val(), 'shIvcNo');
		}
	}

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

// 상품보기
$(document).on("click", ".BtnProView", function() {
	fnProView($(this).attr("OrderNo"));
});

// 상품이미지 Viewer
$(document).on("mouseover", ".ProImg", function(event) {
	var realSize = Number($(this).attr("width")) + 10;
	var RealHeight = $(this).attr("height");
	var name = $(this).data("name");

	var PositionX = $(this).offset().left + realSize;
	var PositionY =  $(this).offset().top - 200;

	//console.log(event.pageY + "/" + $(this).offset().top + "/" +RealHeight );

	$("#vwProImg_"+name).css("position", "absolute");
	$("#vwProImg_"+name).css("top", PositionY);
	$("#vwProImg_"+name).css("left", PositionX);
	$("#vwProImg_"+name).css("display", "");
});

// 상품이미지 Out
$(document).on("mouseout", ".ProImg", function(event) {
	var name = $(this).data("name");
	$("#vwProImg_"+name).css("display", "none");
});

// 이미지 클릭
$(document).on("click", ".ProImg", function(event) {
	var url = $(this).attr('src');
	window.open(url, '_blank');
});

// 상품취소
$(document).on("click", ".BtnProCan", function() {
	var ProNo = $(this).attr('ProNo');
	var CanQty = $(this).parent().parent().find("select[name='CAN_QTY']").val();

	if ( CanQty == '' || CanQty == '0' ) {
		alert('취소할 상품 수량을 선택하십시오.'); return;
	} else {
		fnProSoldOut( ProNo, CanQty );
	}
});

// 트래킹번호 저장
$(document).on("click", ".BtnProTrk", function() {
	var oTrkNo = $(this).parent().parent().find("input[name='TRK_NO']");
	var OrderNo = $(this).attr('OrderNo');
	var ProNo = $(this).attr('ProNo');

	$.ajax({ url: "./OrderPro_IMD.asp" ,
		method: 'POST',
		data : {sKind: "TA", ORDER_NO:OrderNo, PRO_NO: ProNo, TRK_NO: oTrkNo.val()},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				alert('수정 완료되었습니다.');
				top.location.reload();
				break;
			case "1":
				alert('이미 입고된 트래킹번호입니다.\n문제 시 1:1문의에 문의해주십시오.');
				break;
			case "2":
				alert('해당 상품은 수정이 불가능합니다.');
				break;
			case "-1":
				alert('정상적인 경로가 아닙니다.');
				break;
			default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
				break;
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

});

// 오더번호 저장
$(document).on("click", ".BtnProShopNo", function() {
	var oShopOrderNo = $(this).parent().parent().find("input[name='SHOP_ORDER_NO']");
	var OrderNo = $(this).attr('OrderNo');
	var ProNo = $(this).attr('ProNo');

	$.ajax({ url: "./OrderPro_IMD.asp" ,
		method: 'POST',
		data : {sKind: "OA", ORDER_NO:OrderNo, PRO_NO: ProNo, SHOP_ORDER_NO: oShopOrderNo.val()},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				alert('수정 완료되었습니다.');
				//top.location.reload();
				break;
			case "-1":
				alert('정상적인 경로가 아닙니다.');
				break;
			default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
				break;
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

});



// 입고스캔
function fnOrdSkan(){

	fnPopWinCT('/M_Admin/WareScan_L.asp', 'WareScan', 500, 600, 'Y');

}


// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}


// 상태검색
function fnSearchStep(StateSeq, DocUrl) {
	location.href = './'+DocUrl+'?sStateSeq='+StateSeq;
}


// 검색 시 색상 변경
function fnColorChg(Key, ClassNm) {

	if ( Key != '' ) {
		$("."+ClassNm).each( function() {
			var text = $(this).text();
			var reg = new RegExp(Key, "g");

			$(this).html( text.replace(reg, '<span class="SearchChg">'+Key+'</span>'));
		});
	}

}


// 관리자 메모 등록
function fnMngMemo_M(OrderNo) {
	var oField = $("input[name='ADM_MEMO_"+OrderNo+"'");

	//$(FrmNm).attr("action", "./BankAcc_IMD.asp").submit();
	//return;

	$.ajax({ url: "./Order_IMD.asp" ,
		method: 'POST',
		data : {sKind:"AM", ORDER_NO:OrderNo, ADM_MEMO:oField.val()},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
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


// 관리자 상품 메모 등록
function fnProMngMemo_M(ProNo) {
	var oField = $("input[name='ADM_MEMO_"+ProNo+"'");

	$.ajax({ url: "./Order_IMD.asp" ,
		method: 'POST',
		data : {sKind:"CM", PRO_NO:ProNo, COMMENT:oField.val()},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
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


// 상품 보기
function fnProView(OrderNo) {
	var oDiv = $("#vwPro_"+OrderNo);

	if ( oDiv.html() != '' ) {
		oDiv.html('');
	} else {
		$.ajax({ url: "./OrderPro_S.asp" ,
			method: 'POST',
			data : {ORDER_NO:OrderNo},
			dataType : 'html',
			success: function(data) { 
				oDiv.html(data);

				var oItem = '';

				// 트래킹번호
				oItem	= $("#frmSearch input[name='sTrkNo']");
				if ( oItem.val() != '' ) {
					fnColorChg(oItem.val(), 'shTrkNo');
				}

				// 상품번호
				oItem	= $("#frmSearch input[name='sProNo']");
				if ( oItem.val() != '' ) {
					fnColorChg(oItem.val(), 'shProNo');
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}
}


// 전체 상품 상태변경
function fnProStateAll_M(OrderNo) {
	var oProAll = $("select[name='PRO_STATE_CD_ALL_"+OrderNo+"']");
	var oProNo = $("input[name='ckPRO_NO_"+OrderNo+"']");

	if ( fnCkBoxVal(oProNo) == '' ) {
		alert('상품을 선택하십시오.');
		return;
	}
	if ( oProAll.val() == '' ) {
		alert('상품입고상태를 선택하십시오.');
		return;
	}

	if ( !confirm("선택 상품의 상태를 일괄 변경하시겠습니까?") ) {
		return;
	}

	$.ajax({ url: "./OrderPro_IMD.asp" ,
		method: 'POST',
		data : {sKind:"SA", ORDER_NO:OrderNo, PRO_NO:fnCkBoxVal(oProNo), PRO_STATE_CD:oProAll.val()},
		dataType : 'json',
		success: function(data) { 
			$("#vwSTATE_NM_"+OrderNo).text(data.WARE_STATE_NM);
			fnProView(OrderNo);
			fnProView(OrderNo);
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

}


// 단일 상품 상태변경
function fnProState_M(OrderNo, ProNo) {
	var oProAll = $("select[name='PRO_STATE_CD_"+OrderNo+"_"+ProNo+"']");

	if ( !confirm("선택 상품의 상태를 변경하시겠습니까?") ) {
		$("#frmList")[0].reset();
		return;
	}

	$.ajax({ url: "./OrderPro_IMD.asp" ,
		method: 'POST',
		data : {sKind:"SA", ORDER_NO:OrderNo, PRO_NO:ProNo, PRO_STATE_CD:oProAll.val()},
		dataType : 'json',
		success: function(data) { 
			$("#vwSTATE_NM_"+OrderNo).text(data.WARE_STATE_NM);
			fnProView(OrderNo);
			fnProView(OrderNo);
		},
		error: function(e) {
			alert( e.responseText );
		}
	});

}


// 주문 상태변경
function fnOrderState_M() {
	var oOrder = $("input[name='ckORDER_NO']");
	var oState = $("select[name='STATE_SEQ']");

	if ( fnCkBoxVal(oOrder) == '' ) {
		alert('주문 건을 선택하십시오.');
		return;
	}
	if ( oState.val() == '' ) {
		alert('변경할 주문상태를 선택하십시오.');
		return;
	}

	if ( confirm('선택 주문 건을 이동시키시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"OS", ORDER_NO:fnCkBoxVal(oOrder), STATE_SEQ:oState.val(), SMS_SEND_YN:$("#SMS_SEND_YN").val()},
			dataType : 'json',
			success: function(data) { 
				$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 개별 주문 상태변경
function fnOrderStateOne_M(oThis, OrderNo) {
	var StateSeq = oThis.val();

	if ( StateSeq == '' ) {
		alert('변경할 주문상태를 선택하십시오.');
		return;
	}

	if ( confirm('선택 주문 건을 이동시키시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind: "OS", ORDER_NO: OrderNo, STATE_SEQ: StateSeq, SMS_SEND_YN: 'N'},
			dataType : 'json',
			success: function(data) { 
				$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	} else {
		oThis.val(oThis.attr('OrgStateSeq'));
	}

}


// 주문 삭제
function fnOrderDel_M(OrderNo) {

	if ( confirm('선택 주문 건을 삭제시키시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"OD", ORDER_NO:OrderNo},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					//$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
					break;
				case "1":
					alert('입고완료된 건이 있는 경우 삭제할 수 없습니다.\n신청취소로 이동시키십시오');
					break;
				case "2":
					alert('해당 주문 상태에서는 삭제할 수 없는 주문 건입니다.'); location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 주문 복사
function fnOrderCopy_M(OrderNo) {

	if ( confirm('선택 주문 건을 복사하시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"OC", ORDER_NO:OrderNo},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.href = './Order_L.asp?sStateSeq='+data.STATE_SEQ;
					//$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자게에 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 예치금 결제
function fnDpst_M() {
	var oOrder = $("input[name='ckORDER_NO']");

	if ( fnCkBoxVal(oOrder) == '' ) {
		alert('주문 건을 선택하십시오.');
		return;
	}

	if ( confirm('선택 주문 건을 예치금으로 결제하시겠습니까?\n회원의 예치금이 모자르면 결제가 되지 않습니다.') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"PA", ORDER_NO:fnCkBoxVal(oOrder), SMS_SEND_YN:$("#SMS_SEND_YN").val()},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				case "1":
					alert('예치금이 부족한 주문 건이 있습니다.\n주문번호 : '+ data.RTN_ORDER_NO);
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 비용 리셋
function fnCharge_D(ChargeSeq) {

	if ( confirm('선택 비용을 리셋하시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"CD", CHARGE_SEQ:ChargeSeq},
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


// 상품 전체 취소
function fnProTotalCan( OrderNo ) {

	if ( confirm('선택 주문 건의 모든 상품을 환불 처리하시겠습니까?\n환불하시면 구매비용의 모든 금액을 예치금으로 적립합니다.') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind: "TC", ORDER_NO: OrderNo},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				case "1":
					alert('상품환불된 상품이 있는 건은 전체환불이 안됩니다.\n개별 상품환불 진행하십시오.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 상품 취소
function fnProSoldOut( ProNo, CanQty ) {

	if ( confirm('선택 상품을 취소 처리하시겠습니까?\n취소하시면 상품금액과 상품수수료를 예치금으로 적립합니다.') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind: "ST", PRO_NO: ProNo, CAN_QTY: CanQty},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				case "1":
					alert('상품 상태가 잘못되었습니다.\n확인 후 다시 시도해 주십시오.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 엑셀다운로드
function fnExcelDown(ExcelTy) {
	var OrderArr = fnCkBoxVal($("#frmList input[name='ckORDER_NO']"));
	var FormData = $("#frmSearch").serialize();
	var $DynFrm	= fnDnyamicForm( 'frmExcel', 'post' )

	if ( ExcelTy == 'X0' ) {
		if ( !confirm('출고완료 건 다운로드 시 일자 검색을 통하여 최소한의 주문 건만 다운로드 하십시오.\n다운로드 하시겠습니까?') ) {
			return;
		}
	}

	$DynFrm.attr('action', '/Admin/Acting/Order_'+ExcelTy+'.asp?sExcelTy='+ExcelTy+'&sOrderNoArr='+OrderArr+'&'+FormData).submit();

}


// 출고취소
function fnReleaseCan_M(){
	var oOrder = $("input[name='ckORDER_NO']");

	if ( fnCkBoxVal(oOrder) == '' ) {
		alert('주문 건을 선택하십시오.');
		return;
	}

	if ( confirm('선택 주문 건을 출고취소 하시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"RC", ORDER_NO:fnCkBoxVal(oOrder)},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "1":
					alert('예치금이 부족한 주문 건이 있습니다.\n주문번호 : '+ data.RTN_ORDER_NO);
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 라벨 출력
function fnLabelPrt_S(){

	var sORDER_NO = fnCkBoxVal($("#frmList input[name='ckORDER_NO']"));

	if ( sORDER_NO == '' ) {
		alert('주문을 선택하십시오.');
		return;
	}

	fnPopWinCT("/M_Admin/LabelPrt_S.asp?sOrderNo=" + sORDER_NO, "LabelPrt", 400, 250, "N");
}


// 입금요청
function fnDpstReq_M(StateSeq) {
	var oOrder = $("input[name='ckORDER_NO']");

	if ( fnCkBoxVal(oOrder) == '' ) {
		alert('주문 건을 선택하십시오.');
		return;
	}

	if ( confirm('선택 주문 건의 회원에게 SMS를 발송하시겠습니까?.') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"PR", ORDER_NO:fnCkBoxVal(oOrder), SMS_SEND_YN:"Y", STATE_SEQ: StateSeq},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				case "1":
					alert('예치금이 부족한 주문 건이 있습니다.\n주문번호 : '+ data.RTN_ORDER_NO);
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}


// 무통장 강제 처리
function fnPaymentBank_I(OrderNo, ChargeCd) {

	if ( confirm('선택 주문번호 ['+ OrderNo +']의 결제 건을 무통장 입금확인 처리하시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"AP", ORDER_NO: OrderNo, CHARGE_CD: ChargeCd},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					top.location.reload();
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				case "1":
					alert('이미 결제가 완료된 건입니다.');top.location.reload();
					break;
				case "2":
					alert('비용 결제 건이 없습니다.');top.location.reload();
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}



// 운송장발급
function fnOrderIvcAuto_I( Kind, OrderNo ){

	if ( confirm('해당 주문 건 운송장 발급을 진행하시겠습니까?') ) {
		$.ajax({ url: "./OrderDet_M.asp" ,
			method: 'POST',
			data : {sKind:Kind, ORDER_NO:OrderNo},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				case "1":
					alert('잘못된 주문서입니다.');location.reload();
					break;
				case "2":
					alert('대여폭 잔여량이 없습니다.');
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}

// 반품취소
function fnOrderReturnCan_I( OrderNo ){

	if ( confirm('해당 주문 건 반품 취소 처리 하시겠습니까?') ) {
		$.ajax({ url: "./Order_IMD.asp" ,
			method: 'POST',
			data : {sKind:"RZ", ORDER_NO:OrderNo},
			dataType : 'json',
			success: function(data) { 
				switch ( data.RST_NO ) {
				case "0":
					alert('복구되었습니다.');
					location.href = './Order_L.asp?sOrderNo=' + data.RTN_ORDER_NO;
					break;
				case "1":
					alert(OrderNo + ' 주문서는 잘못된 주문서입니다.\n확인 후 다시 시도해주십시오.');
					break;
				case "2":
					alert(OrderNo + ' 주문서는 반품대행건이 아닙니다..\n확인 후 다시 시도해주십시오.');
					break;
				case "3":
					alert(OrderNo + '반품비용이 존재합니다.\n비용 리셋 후 다시 시도해주십시오.');
					break;
				case "-1":
					alert('정상적인 경로가 아닙니다.');
					break;
				default: alert('정상적으로 저장되지 않았습니다.\n관리자에게 문의하십시오.');
					break;
				}
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}