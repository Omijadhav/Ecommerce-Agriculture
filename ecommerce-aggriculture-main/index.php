<?php include("inc/connect.inc.php"); ?>
<?php
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
} else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($mysqlCon, "SELECT * FROM user WHERE id='$user'");
	$get_user_email = mysqli_fetch_assoc($result);
	$uname_db = $get_user_email['firstName'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>eBuyAgree</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="/js/homeslideshow.js"></script>
</head>

<body style="min-width: 980px;">
	<div class="homepageheader" style="position: relative;">
		<div class="signinButton loginButton">
			<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
				<?php
				if ($user != "") {
					echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
				} else {
					echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN IN</a>';
				}
				?>

			</div>
			<div class="uiloginbutton signinButton loginButton">
				<?php
				if ($user != "") {
					echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid=' . $user . '">Hi ' . $uname_db . '</a>';
				} else {
					echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
				}
				?>
			</div>
		</div>
		<div style="float: left; margin: 5px 0px 0px 23px;">
			<a href="index.php">
				<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.png">
			</a>
		</div>
		<div class="">
			<div id="srcheader">
				<form id="newsearch" method="get" action="search.php">
					<input autocomplete="off" type="text" class="srctextinput" name="keywords" size="21" maxlength="120" placeholder="Search Here..."><input autocomplete="off" type="submit" value="search" class="srcbutton">
				</form>
				<div class="srcclear"></div>
			</div>
		</div>
	</div>
	<div class="home-welcome">
		<div class="home-welcome-text" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(image/homebackgrndimg.png); height: 380px; ">
			<h1 style="margin: 0px;">Welcome To eBuyAgree</h1>
			<h2>Largest Online Shopping In India</h2>
		</div>
	</div>
	<div class="home-prodlist">
		<div>
			<h3 style="text-align: center;">Products Category</h3>
		</div>
		<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
			<ul style="float: left;">
				<li style="float: left; padding: 25px;">
					<div class="home-prodlist-img"><a href="category/insecticides.php">
							<!-- pesticides -->
							<img src="./image/farmer-sprays-insectides-Japan-rice-paddy.jpg" class="home-prodlist-imgi">
						</a>
					</div>
				</li>
			</ul>
			<ul style="float: left;">
				<li style="float: left; padding: 25px;">
					<div class="home-prodlist-img"><a href="category/herbicides.php">
							<img src="./image/stop-using-glyphosate-img.jpg" class="home-prodlist-imgi">
					</div>
				</li>
			</ul>
			<ul style="float: left;">
				<li style="float: left; padding: 25px;">
					<div class="home-prodlist-img"><a href="category/seeds.php">
							<img src="./image/agro-seeds-1934055.jpg" class="home-prodlist-imgi"></a>
						</a>
					</div>
				</li>
			</ul>
			<ul style="float: left;">
				<li style="float: left; padding: 25px;">
					<div class="home-prodlist-img"><a href="category/sprayer.php">
							<img src="./image/Stihl_Manual_Backpack_Sprayer_SG_20__75242.1570012544.jpg" class="home-prodlist-imgi"></a>
					</div>
				</li>
			</ul>
			<ul style="float: left;">
				<li style="float: left; padding: 25px;">
					<div class="home-prodlist-img"><a href="category/tools.php">
							<img src="./image/images-22.jpeg" class="home-prodlist-imgi"></a>
					</div>
				</li>
			</ul>

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