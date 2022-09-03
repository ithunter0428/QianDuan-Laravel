var editingRow;

// Delete
function fnDel() {
    const tabCenter = $('#delete_select').val();
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/dlv_free/${tabCenter.split('/')[0]}/${tabCenter.split('/')[1]}` ,
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
function fnEdit(  ) {
    $('#edit_modal_header').html('中心注册')
    $("#edit_modal").modal('show');
    $("#modal_weight").val('');
    $("#modal_price").val('');
    $("#modal_level").val('');
}

function fnSave() {
    var url = `/admin/environment/dlv_free`;
    var method = 'post';
    var successMessage = 'Successfully Created!'
    // $tabCenter
	$.ajax({ 
        url: url,
		method: method,
		data : {
            city: $tabCenter.split('/')[0],
            shipping_method: $tabCenter.split('/')[1],
            weight: $("#modal_weight").val(),
            price: $("#modal_price").val(),
            level: $("#modal_level").val(),
            _token: $('meta[name="csrf-token"]').attr('content')
		},
		dataType : 'json',
		success: function(data) {
			data = data.data
			if (data.success) {
				alert(successMessage);
				$(".jquery-modal").removeClass("blocker");
				window.location.reload();
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