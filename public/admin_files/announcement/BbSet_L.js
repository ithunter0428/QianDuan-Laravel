var editingSetting;

// 삭제
function fnDel_M(BbCode) {
	var oField = null;

	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: "./BbSet_IMD.asp" ,
		method: 'POST',
		data : {'sKind':'D', 'BB_CODE':BbCode},
		dataType : 'json',
		success: function(data) { 
			switch ( data.RST_NO ) {
			case "0":
				top.location.reload();
				break;
			default: alert(data.RST_NO+' Storing failed\nContact the solution administrator.');
				break;
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
	}); 
}

// Edit
function fnEdit( setting ) {
	setting = JSON.parse(setting)[0];
	editingSetting = setting;
	$("#edit_modal").modal('show');
	$("#modal_name")[0].innerHTML = setting.board_name;
	$("#modal_type")[0].innerHTML = setting.type;
	$("#modal_use_password").val(setting.use_password);
	$("#modal_use_title").val(setting.use_title);
	$("#modal_use_state").val(setting.use_state);
	$("#modal_write_permission").val(setting.write_permission);
	$("#modal_view_all").val(setting.view_all);
	$("#modal_comment_permission").val(setting.comment_permission);
	$("#modal_is_using").val(setting.is_using);
}

function fnSave() {
	$.ajax({ url: `/api/announcement/setting/${editingSetting.id}`,
		method: 'PUT',
		data : {
			use_password: $("#modal_use_password").val(),
			use_title: $("#modal_use_title").val(),
			use_state: $("#modal_use_state").val(),
			write_permission: $("#modal_write_permission").val(),
			view_all: $("#modal_view_all").val(),
			comment_permission: $("#modal_comment_permission").val(),
			is_using: $("#modal_is_using").val(),
		},
		dataType : 'json',
		success: function(data) {
			data = data.data
			if (data.success) {
				alert("Successfully updated");
				$(".jquery-modal").removeClass("blocker");
				window.location.reload();
			} else {
				alert("Update failed");
			}
		},
		error: function(e) {
			alert( e.responseText );
		}
	}); 
}

function fnEditModalClose() {
	$(".jquery-modal").removeClass("blocker");
}