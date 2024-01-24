<?php include("../inc/connect.inc.php"); ?>
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
    <title>Tools</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php include("../inc/mainheader.inc.php"); ?>
    <div class="categolis">
        <table>
            <tr>
                <th><a href="insecticides.php" style="text-decoration: none;color: #fff;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Insecticides</a></th>
                <th><a href="herbicides.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Herbicides</a></th>
                <th><a href="seeds.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Seeds</a></th>
                <th><a href="tools.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a64a;border-radius: 12px;">Tools</a></th>
                <th><a href="sprayer.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #87a77e;border-radius: 12px;">Sprayer</a></th>
            </tr>
        </table>
    </div>
    <div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
        <div>
            <?php
            $getposts = mysqli_query($mysqlCon, "SELECT * FROM products WHERE available >='1' AND item ='tools' ORDER BY id DESC LIMIT 10");
            if (mysqli_num_rows($getposts)) {
                echo '<ul id="recs">';
                while ($row = mysqli_fetch_assoc($getposts)) {
                    $id = $row['id'];
                    $pName = $row['pName'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $picture = $row['picture'];

                    echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="view_product.php?pid=' . $id . '">
										<img src="../image/product/tools/' . $picture . '" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">' . $pName . '</span><br> Price: ' . $price . ' Tk</div>
									</div>
									
								</li>
							</ul>
						';
                }
            } else {
                echo "<h3>No Products added yet.</h3>";
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