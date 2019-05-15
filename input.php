<?php
 
 $page_flag = 0;　//_page_flagは使わない？
 $clean = array();
 $error = array();
 
   //サニタイズ　　←課題ではないから必要ない？
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      $clean[$key] = htmlspecialchars($value, ENT_QUOTES, 'utf-8');
    }
  }
  
  //バリデーション
  function validation ($data) {  
  
    //$data=$_POSTがブランクだったらメッセージを表示
  if (empty($data['name'])) {
    $error['name'] = "名前を入力してください";
  }

  if (empty($data['email'])) {
    $error['email'] = "住所を入力してください";
  }
  return $error;
}

  //エラーがあったら入力画面から移動しない
if　(!empty($error) ) {
  $page_flag = 0;
} else {
  $page_flag = 1;
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
    <div class="main">
        <h2 class="form-title">お問い合わせフォーム</h2>
          <form method="post" action="confirm.php">
            <div class="form-item">名前</div>
              <!--$errorがあったらメッセージを表示-->
            <input type="text" name="name" value="<?php echo $name; ?>">
            <p><?php if(isset($error['name'])) echo $error["name"]; ?></p>
            <div class="form-item">E-mail</div>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <p><?php if(isset($error['email'])) echo $error['email']; ?></p>
            <div class="form-btn"> 
              <input type="submit" value="送信">
            </div>          
          </form>
    </div>
</body>
</html>