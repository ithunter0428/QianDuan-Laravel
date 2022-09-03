// Delete
function fnDel(id) {
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/ivc_band_wh/${id}` ,
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
function fnEdit( ) {
	$('#edit_modal_header').html('运单带宽注册')
	$("#edit_modal").modal('show');
	$("#modal_shipping_method").val('');
	$("#modal_city").val('');
	$("#modal_courier_company").val('');
	$("#modal_title").val('');
	$("#modal_bandwidth_bottom").val('');
	$("#modal_bandwidth_top").val('');
	$("#modal_bandwidth_total").val('');
	$("#modal_use_quantity").val('');
	$("#modal_available_quantity").val('');
	$("#modal_status").val(1);
}

function fnUpdate( editRow ) {
	editRow = JSON.parse(editRow)[0];
	editingRow = editRow;
    var url = `/admin/environment/ivc_band_wh/${editingRow.id}`;
    var method = 'put';
    var successMessage = 'Successfully Created!'

	$.ajax({ 
        url: url,
		method: method,
		data : {
            status: 0,
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

function fnSave() {
    var url = `/admin/environment/ivc_band_wh`;
    var method = 'post';
    var successMessage = 'Successfully Created!'

	$.ajax({ 
        url: url,
		method: method,
		data : {
			shipping_method: $("#modal_shipping_method").val(),
			city: $("#modal_city").val(),
            courier_company: $("#modal_courier_company").val(),
            title: $("#modal_title").val(),
            bandwidth_bottom: $("#modal_bandwidth_bottom").val(),
            bandwidth_top: $("#modal_bandwidth_top").val(),
            bandwidth_total: $("#modal_bandwidth_total").val(),
            use_quantity: $("#modal_use_quantity").val(),
            available_quantity: $("#modal_available_quantity").val(),
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