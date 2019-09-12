<script src="assets/js/jquery.min.js"></script>
function checkEmail(dis) {
	var email = $(this).val();
	$.ajax({
	method: 'post',
	url: 'select.php',
	data: {email,email},
	dataType: 'json',
	function: success(data) {
	if(data.message == 'success') {
	echo "email is unique";
}
else {
	alert("already exists");
}

}
});
}
