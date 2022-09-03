// Delete
function fnDel(id) {
	if ( !confirm("Are you really going to delete it?") ) {
		return;
	}

	$.ajax({ url: `/admin/environment/app_exg_rt/${id}` ,
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
    $('#edit_modal_header').html('汇率确认')
	$("#edit_modal").modal('show');
	$("#modal_country").val('');
	$("#modal_round").val('');
	$("#modal_period").val('');
	$("#modal_exchange_rate").val('');
}

function fnSave() {
    var url = `/admin/environment/app_exg_rt`;
    var method = 'post';
    var successMessage = 'Successfully Created!'

	$.ajax({ 
        url: url,
		method: method,
		data : {
			country: $("#modal_country").val(),
            round: $("#modal_round").val(),
            period: $("#modal_period").val(),
            exchange_rate: $("#modal_exchange_rate").val(),
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