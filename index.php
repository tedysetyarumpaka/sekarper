<!DOCTYPE html>
<html lang="en">
<head>
	<title>BENGKEL SEKARPER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<script type = "text/javascript" >
		function preventBack(){window.history.forward();}
		setTimeout("preventBack()", 0);
		window.onunload=function(){null};
	</script>
</head>

<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100" style="background-image: url(green.jpg); background-size:cover">
				<span class="login100-form-title" style="font-size: 40px; color: #FFFFFF; margin-top: -60px; margin-bottom: 10px">
					BENGKEL SEKARPER
					<br>
					<h6 style="font-size: 14px;">Jl. Wonosari Km.7,5 Bantul, Yogyakarta</h6>
				</span>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/sekarper.png" alt="IMG" style="width: 300px; margin-left: 30px">
				</div>

				<form id="login_div" method="get" action="javascript: void(0);" autocomplete="off" role="main" class="login100-form validate-form">
					<span class="login100-form-title" style="margin-bottom: -35px; color: #FFFFFF;">
						LOGIN 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email_field" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password_field" class="input100" type="password" name="pasword" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input onclick="login()" type="submit" value="Login" class="login100-form-btn">
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
	<script>
    // Initialize Firebase
    var config = {
    	apiKey: "AIzaSyCjkjKg4-p3xudOdbkJf7d1maWtJTtYgHU",
    	authDomain: "sekarper-9cf35.firebaseapp.com",
    	databaseURL: "https://sekarper-9cf35.firebaseio.com",
    	projectId: "sekarper-9cf35",
    	storageBucket: "sekarper-9cf35.appspot.com",
    	messagingSenderId: "304432326264"
    };
    firebase.initializeApp(config);
</script>

<script>

	firebase.auth().onAuthStateChanged(function(user) {
		if (user) {
    // User is signed in.

    var user = firebase.auth().currentUser;

    if(user != null){

    	var email = user.email;

    	if(email=="tedibear@gmail.com")
    	{
    		window.location.href="admin/index.php";
    	}
    	else
    	{
    		window.location.href="karyawan/index.php";
    	}

    }

}
});

	function login(){

		var userEmail = document.getElementById("email_field").value;
		var userPass = document.getElementById("password_field").value;

		firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

	window.alert("ANDA GAGAL LOGIN EMAIL ATAU PASSWORD SALAH");

    // ...
});

	}



</script>


<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
