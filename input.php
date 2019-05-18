<?php

$error1 = '';
$error2 = ''; 
$error3 = ''; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {  //送信ボタン押下
    $name = $_POST["name"];
    
    if ($_POST["name"] == null) { //nameが入力されていない
      $error1 = "名前が入力されてません";  // 処理を記述                
      }

    if ($_POST["name"] != null && mb_strlen($name) >= 10) { //nameが入力されている                            
      $error2 = "10文字以上入力されています";  // 処理を記述
      }           
    
    if ($_POST["email"] == null) {  //emailが入力されていない
      $email = $_POST["email"];   
      $error3 = "E-mailが入力されてません";  // 処理を記述
    }    
    //if (name,emailともに入力されている) {
         // confirm.phpに推移させる処理を記述
    //}
 }
 
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
  unset($_SESSION["post"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
</head>
<body>
    <!--
    エラーメッセージがあった場合にここに表示する
    -->
    <div class="main">
        <h2 class="form-title">お問い合わせフォーム</h2>
          <form method="post" action="input.php">
            <div class="form-item">名前</div>
              <!--$errorがあったらメッセージを表示-->
              <div><?php echo $error1; ?></div>
              <div><?php echo $error2; ?></div>
            <input type="text" name="name">
            <div class="form-item">E-mail</div>
              <div><?php echo $error3; ?></div>
            <input type="text" name="email">
            <input type="submit" value="送信">
            </div>          
          </form>
    </div>
</body>
</html>