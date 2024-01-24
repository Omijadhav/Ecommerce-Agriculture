<!DOCTYPE html>
<html>

<head>
	<title>Password Recover</title>
	<link rel="icon" href="image/title.png" type="image/x-icon">
	<meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body class="home-welcome-text" style="background-image: url(image/homebackgrndimg3.png);">
	<div>
		<div class="homepageheader">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<a style="text-decoration: none;" href="signin.php">SIGN IN</a>
				</div>
				<div class="uiloginbutton signinButton loginButton">
					<a style="text-decoration: none;" href="login.php">LOG IN</a>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="http://www.google.com">
						<input autocomplete="off" type="text" class="srctextinput" name="q" size="21" maxlength="120" placeholder="Search Here..."><input autocomplete="off" type="submit" value="search" class="srcbutton">
					</form>
					<div class="srcclear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="holecontainer" style="float: right; margin-right: 36%; padding-top: 110px;">
		<div class="container">
			<div>
				<div>
					<div class="signupform_content">
						<h2>Find Account!</h2>
						<div class="signupform_text"></div>
						<div>
							<form action="" method="POST" class="registration">
								<div class="signup_form">
									<div>
										<td>
											<input autocomplete="off" type="text" name="username" class="email signupbox" placeholder="Write eBuyBD Email..." size="30" required autofocus>
										</td>
									</div>
									<div>
										<input autocomplete="off" class="uisignupbutton signupbutton" type="submit" name="searchId" id="senddata" value="Search">
									</div>
									<div class="signup_error_msg">
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>
	<hr>
	<center id="google_translate_element"></ce>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>

	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>