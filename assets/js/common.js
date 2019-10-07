
$(document).ready(function() {

	function checkEmail(dis,email) {
		var email = $(this).val();
		$.ajax({
			method: 'post',
			url: 'email/checkemail.php',
			data: {email:email},
			dataType: 'json',
			success: function(data) {
				if(data.message == 'failure') {
					cosole.log('already exists');
					$("#emailerr").text("email already exists");
				}
			}
		});
	}


	function checkletters(dis) {
		var passwordnew = $("#npwd").val();
		var passwordconf = $("#cpwd").val();
		if(passwordnew != passwordconf) {
			$("#password").after("<span class='error'>passwords are not matching</span>");
			return false;
		}

	}
// })

	



function deletetask(dis,id) {
	$.ajax({
		method:'post',
		url: 'crud-operation/deletetask.php',
		data: {id:id},
		dataType: json,
		success: function(data) {
			if (data.message == "success") {
				window.location.href = "edittask.php";
			} else {
				alert("something went wrong");
			}

		}
	})
}

});



