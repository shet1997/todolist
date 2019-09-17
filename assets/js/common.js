$(document).ready(function({

}))

function checkEmail(dis) {
	var email = $(this).val();
	$.ajax({
	method: 'post',
	url: 'checkemail.php',
	data: {email:email},
	dataType: 'json',
	success: function(data) {
	if(data.message == 'failure') {
		cosole.log('already exists')
}
}
});
}

function checkletters(dis) {
	var passwordnew = $("#npwd").val();
	var passwordconf = $("#cpwd").val();
	if(passwordnew != passwordconf) {
		$("#pwderr").after("<span class="error">passwords are not matching</span>")
	}

}


