
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
					$("#emailerr").append("<p>email already exists</p>");
				}
			}
		});
	}


	function checkletters(dis) {
		var passwordnew = $("#npwd").val();
		var passwordconf = $("#cpwd").val();
		$(".error").remove();
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


function validation() {
	var name = $("#name").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var mobile = $("#mobile").val();
	$(".error").remove();

	if(name.length < 3){
		$("#name").after("<span class='error'>Name must be minimum of 3 letters </span>");
		return false

		if{
		var matchname = /^[a-zA-Z]$/;
		var validatename = matchname.test(name);
		if(!validatename) {
			$("#name").after("<spanclass='error'>name is invalid</span>")
		     }
	      }
	}  
	
	if(email.length < 1) {
		$("#email").after("<span class='error'>email must be entered</span>");
	}

	if(password.length < 8) {
          $("#password").after("<span class='error'>password is too short</span>");
          return false;
       
       if{
         var matchpassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
          var validpassword = matchpassword.test(password);
            if(!validpassword) {
              $("#password").after("<span class='error'>password should contain caps small and special charector</span>");
              return false;
              }
          }
        }

	if(mobile.length < 11) {
		$("#mobile").after("<span class='error'>number must be of 10 digits</span>")
	}
	

	
}

});



