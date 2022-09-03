var editingRow;

// Delete
function fnDel(id) {
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/center/${id}` ,
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
        $('#edit_modal_header').html('中心设置')
        $("#edit_modal").modal('show');
        $("#modal_country").val(editRow.country);
        $("#modal_city").val(editRow.city);
        $("#modal_zipcode").val(editRow.zipcode);
        $("#modal_measurement_unit").val(editRow.measurement_unit);
        $("#modal_shipping_method").val(editRow.shipping_method);
        $("#modal_address").val(editRow.address);
        $("#modal_phone").val(editRow.phone);
        $("#modal_shipping_center").val(editRow.shipping_center);
        $("#modal_status").val(editRow.status);
    }
    else {
        $('#edit_modal_header').html('中心注册')
        $("#edit_modal").modal('show');
        $("#modal_country").val('');
        $("#modal_city").val('');
        $("#modal_zipcode").val('');
        $("#modal_measurement_unit").val('');
		$("#modal_shipping_method").val('');
        $("#modal_address").val('');
        $("#modal_phone").val('');
        $("#modal_shipping_center").val('');
        $("#modal_status").val(1);
    }
}

function fnSave() {
    var url = `/admin/environment/center`;
    var method = 'post';
    var successMessage = 'Successfully Created!'
    if(editingRow) {
        method = 'put';
        url = `/admin/environment/center/${editingRow.id}`;
        successMessage = 'Successfully Updated!'
    }

	$.ajax({ 
        url: url,
		method: method,
		data : {
			country: $("#modal_country").val(),
            city: $("#modal_city").val(),
            zipcode: $("#modal_zipcode").val(),
            measurement_unit: $("#modal_measurement_unit").val(),
            shipping_method: $("#modal_shipping_method").val(),
            address: $("#modal_address").val(),
            phone: $("#modal_phone").val(),
            shipping_center: $("#modal_shipping_center").val(),
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