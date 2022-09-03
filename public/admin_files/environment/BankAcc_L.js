var editingRow;

// Delete
function fnDel(id) {
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/bank_acc/${id}` ,
		method: 'DELETE',
		data : {
            _token: $('meta[name="csrf-token"]').attr('content'),
            '_METHOD': 'DELETE'
        },
		dataType : 'json',
		success: function(data) { 
			window.location.reload();
		},
		error: function(e) {
			alert( e.responseText );
		}
	}); 
}

// Edit
function fnEdit( editRow ) {
    if(editRow) {
        editRow = JSON.parse(editRow)[0];
        editingRow = editRow;
        $('#edit_modal_header').html('存款账户设置')
        $("#edit_modal").modal('show');
        $("#modal_round").val(editRow.round);
        $("#modal_bank_name").val(editRow.bank_name);
        $("#modal_account_number").val(editRow.account_number);
        $("#modal_account_owner").val(editRow.account_owner);
        $("#modal_status").val(editRow.status);
    }
    else {
        $('#edit_modal_header').html('存款账户注册')
        $("#edit_modal").modal('show');
        $("#modal_round").val('');
        $("#modal_bank_name").val('');
        $("#modal_account_number").val('');
        $("#modal_account_owner").val('');
        $("#modal_status").val(1);
    }
}

function fnSave() {
    var url = `/admin/environment/bank_acc`;
    var method = 'post';
    var successMessage = 'Successfully Created!'
    if(editingRow) {
        method = 'put';
        url = `/admin/environment/bank_acc/${editingRow.id}`;
        successMessage = 'Successfully Updated!'
    }

	$.ajax({ 
        url: url,
		method: method,
		data : {
			round: $("#modal_round").val(),
            bank_name: $("#modal_bank_name").val(),
            account_number: $("#modal_account_number").val(),
            account_owner: $("#modal_account_owner").val(),
            status: $("#modal_status").val(),
            _token: $('meta[name="csrf-token"]').attr('content')
		},
		dataType : 'json',
		success: function(data) {
			data = data.data
			if (data.success) {
				alert(successMessage);
				$(".jquery-modal").removeClass("blocker");
				window.location.reload();
                editingRow = null;
			} else {
				alert("Failed!");
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