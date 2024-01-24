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

if (isset($_REQUEST['keywords'])) {

	$epid = mysqli_real_escape_string($mysqlCon, $_REQUEST['keywords']);
	if ($epid != "" && ctype_alnum($epid)) {
	} else {
		header('location: index.php');
	}
} else {
	header('location: index.php');
}

$search_value = "";
$search_value = trim($_GET['keywords']);

?>

<!DOCTYPE html>
<html>

<head>
	<title>eBuyAgree</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="homepageheader">
		<div class="signinButton loginButton">
			<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
				<?php
				if ($user != "") {
					echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
				} else {
					echo '<a style="text-decoration: none; color: #fff;" href="signin.php">SIGN IN</a>';
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
		<div id="srcheader">
			<form id="newsearch" method="get" action="search.php">
				<?php
				echo '<input autocomplete="off" type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..." value="' . $search_value . '"><input autocomplete="off" type="submit" value="search" class="srcbutton" >';
				?>
			</form>
			<div class="srcclear"></div>
		</div>
	</div>
	<div class="categolis">
		<table>
		<tr>
				<th><a href="category/insecticides.php" style="text-decoration: none;color: #fff;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Insecticides</a></th>
				<th><a href="category/herbicides.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Herbicides</a></th>
				<th><a href="category/seeds.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Seeds</a></th>
				<th><a href="category/tools.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Tools</a></th>
				<th><a href="category/sprayer.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Sprayer</a></th>
			</tr>
		</table>
	</div>
	<div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<div>
			<?php
			if (isset($_GET['keywords']) && $_GET['keywords'] != "") {
				$search_value = trim($_GET['keywords']);
				$getposts = mysqli_query($mysqlCon, "SELECT * FROM products WHERE pName like '%$search_value%'  ORDER BY id DESC");
				if ($total = mysqli_num_rows($getposts)) {
					echo '<ul id="recs">';
					echo '<div style="text-align: center;"> ' . $total . ' Products Found... </div><br>';
					while ($row = mysqli_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['pName'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['picture'];
						$item = $row['item'];

						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="women/view_product.php?pid=' . $id . '">
										<img src="image/product/' . $item . '/' . $picture . '" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">' . $pName . '</span><br> Price: ' . $price . ' Tk</div>
									</div>
									
								</li>
							</ul>
						';
					}
				} else {
					echo "Nothing Found!";
				}
			} else {
				echo "Input Someting...";
			}

			?>

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