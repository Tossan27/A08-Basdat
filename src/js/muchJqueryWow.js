$( document ).ready(function() {

});	function login() {
		event.preventDefault();
		var username = $("#login-username").val();
		var password = $("#login-password").val();
		alert(username);
		$.ajax({
			type: "POST",
			url: "./functions.php",
			data: {"username":username, "password":password},
			dataType: "JSON"
		});
	}	