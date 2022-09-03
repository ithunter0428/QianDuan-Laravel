var editingRow;

// Delete
function fnDel(id) {
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/mem_grade/${id}` ,
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
        $("#edit_modal").modal('show');
        $('#edit_modal_header').html('会员等级设置')
        $("#modal_grade").val(editRow.grade);
        $("#modal_name").val(editRow.name);
        $("#modal_send_amount_from").val(editRow.send_amount_from);
        $("#modal_send_amount_to").val(editRow.send_amount_to);
        $("#modal_purchase_fee").val(editRow.purchase_fee);
        $("#modal_coupon_delivery_count").val(editRow.coupon_delivery_count);
        $("#modal_coupon_value").val(editRow.coupon_value);
        $("#modal_integral").val(editRow.integral);
        $("#modal_status").val(editRow.status);
    }
    else {
        $('#edit_modal_header').html('会员等级注册')
        $("#edit_modal").modal('show');
        $("#modal_grade").val('');
        $("#modal_name").val('');
        $("#modal_send_amount_from").val('');
        $("#modal_send_amount_to").val('');
        $("#modal_purchase_fee").val('');
        $("#modal_coupon_delivery_count").val('');
        $("#modal_coupon_value").val('');
        $("#modal_integral").val('');
        $("#modal_status").val(1);
    }
}

function fnSave() {
    var url = `/admin/environment/mem_grade`;
    var method = 'post';
    var successMessage = 'Successfully Created!'
    if(editingRow) {
        method = 'put';
        url = `/admin/environment/mem_grade/${editingRow.id}`;
        successMessage = 'Successfully Updated!'
    }

	$.ajax({ 
        url: url,
		method: method,
		data : {
			grade: $("#modal_grade").val(),
            name: $("#modal_name").val(),
            send_amount_from: $("#modal_send_amount_from").val(),
            send_amount_to: $("#modal_send_amount_to").val(),
            purchase_fee: $("#modal_purchase_fee").val(),
            coupon_delivery_count: $("#modal_coupon_delivery_count").val(),
            coupon_value: $("#modal_coupon_value").val(),
            integral: $("#modal_integral").val(),
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