
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
	//window.open(url, '_blank');
});



// 검색
function fnSearch( FrmNm, Go ) {
	$("#"+FrmNm + " input[name='sGo']").val(Go);

	$("#"+FrmNm).submit();
}



// 노데이타 삭제
function fnDel_M(NoDataSeq) {

	if ( confirm('선택 노데이타 건을 삭제시키시겠습니까?') ) {
		$.ajax({ url: "./NoData_IMD.asp" ,
			method: 'POST',
			data : {sKind:"D", NODATA_SEQ:NoDataSeq},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					//$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
					break;
				case "1":
					alert('존재하지 않는 노데이타 정보입니다.');
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

// 노데이타 폐기
function fnDel_M2(NoDataSeq) {

	if ( confirm('선택 노데이타 건을 폐기시키시겠습니까?') ) {
		$.ajax({ url: "./NoData_IMD.asp" ,
			method: 'POST',
			data : {sKind:"OD", NODATA_SEQ:NoDataSeq},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					//$("#frmSearch").attr("action", "./"+gListUrl).attr("target", "").submit();
					break;
				case "1":
					alert('존재하지 않는 노데이타 정보입니다.');
					location.reload();
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

// 노데이타 매칭 해제
function fnNodataMacth_D(NoDataSeq) {

	if ( confirm('선택 노데이타를 매칭 해제시키시겠습니까?\n매칭 해제를 하면 매칭된 상품은 모두 입고대기로 변경됩니다.') ) {
		$.ajax({ url: "./NoData_IMD.asp" ,
			method: 'POST',
			data : {sKind: "MD", NODATA_SEQ: NoDataSeq},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					location.reload();
					break;
				case "1":
					alert('무게측정 이후의 상품은 매칭 해제할 수 없습니다.');
					location.reload();
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

// 노데이타 자동 매칭
function fnNodataAutoMatch_M() {

	if ( confirm('매미칭 노데이타 건 중 주문 상품에 해당 트래킹번호가 있는 상품만 찾아서 자동 매칭을 합니다.\n매칭 하시겠습니까?') ) {
		$.ajax({ url: "./NoData_IMD.asp" ,
			method: 'POST',
			data : {sKind: "NA"},
			dataType : 'json',
			success: function(data) {
				switch ( data.RST_NO ) {
				case "0":
					if ( data.MATCH_CNT == 0 ) {
						alert('매칭 상품이 없습니다.');
					} else {
						alert('총 ' + data.MATCH_CNT + '건의 상품을 찾아 매칭하였습니다.');
					}

					location.reload();
					break;
				case "1":
					alert('무게측정 이후의 상품은 매칭 해제할 수 없습니다.');
					location.reload();
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

// 오래된 노데이타 삭제
function fnNodataOld_M() {
	var Tit = $("select[name='DEL_DATE'] option:selected").text();
	var Kind = $("select[name='DEL_DATE'] option:selected").val();
	var Day = 365;

	if ( confirm('[' + Tit + ']를 삭제하시겠습니까?') ) {
		$.ajax({ url: "./NoData_IMD.asp" ,
			method: 'POST',
			data : {sKind: Kind, DAY: Day},
			dataType : 'json',
			success: function(data) {
				alert(data.DEL_CNT + '건의 [' + Tit + ']를 삭제하였습니다.');
				top.location.reload();
			},
			error: function(e) {
				alert( e.responseText );
			}
		});
	}

}