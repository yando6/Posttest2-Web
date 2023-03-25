<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="png" href="iconarha.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/loginStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/js/log_reg.js"></script>
		<script type="text/javascript" src="./assets/js/script.js"></script>

</head>
<body>
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
			<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
		</div>
		<div class="social-icons">
			<img src="./assets/images/icon/fb2.png">
			<img src="./assets/images/icon/insta2.png">
			<img src="./assets/images/icon/tt2.png">
		</div>
<!-- Login Form -->
<form id="login" class="input-group">
  <div class="inp">
    <img src="./assets/images/icon/user.png">
    <input type="text" id="email_login" name="email_login" class="input-field" placeholder="Email Address" style="width: 88%; border:none;" required="required">
  </div>
  <div class="inp">
    <img src="./assets/images/icon/password.png">
    <input type="password" id="passwordLogin" name="password_login" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
  </div>
  <input type="checkbox" class="check-box">Remember Password
  <button type="submit" class="submit-btn">Log In</button>
</form>
           <div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="./assets/images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>
<!-- Registration Form -->
<form id="register" class="input-group">
  <input type="name" class="input-field" placeholder="Full Name" id="name">
  <input type="email" class="input-field" placeholder="Email Address" id="email_regis">
  <input type="password" class="input-field" placeholder="Create Password" name="Password" id="passwordRegis">
  <input type="password" class="input-field" placeholder="Confirm Password" name="confirm_password">
  <input type="checkbox" class="check-box" id="chkAgree">I agree to the Terms & Conditions
  <button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
</form>

	</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/log_reg.js"></script>
		<script type="text/javascript" src="./script.js"></script>

</body>
</html>