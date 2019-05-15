<?php
session_start();

$name = "";
$email = "";

if ( isset($_SESSION["post"]) == true ) {
	$post = $_SESSION["post"];
	if ( isset( $post["name"] ) == true ) {
		$name = $post["name"];
	}
	if ( isset( $post["email"] ) == true ) {
		$email = $post["email"];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
</head>
<body>
    <div class="main">
        <h2 class="form-title">お問い合わせフォーム</h2>
          <form method="post" action="confirm.php">
            <div class="form-item">名前</div>
              <input type="text" name="name" value="<?php echo $name; ?>">
            <div class="form-item">E-mail</div>
              <input type="text" name="email" value="<?php echo $email; ?>">
            <div class="form-btn"> 
              <input type="submit" value="送信">
            </div>          
          </form>
    </div>
</body>
</html>