<?php 
require_once ('validation.php');

$errorName[] = '';
$errorEmail[] = '';


  
  //送信ボタンが押下されたら
if (isset($_POST["send_data"]) && $_POST["send_data"] === "入力情報") {
  
      //エラーがなければ確認画面へ
    if (validation_name($name) == false &&
      validation_email($email) == false)
      {
      header('Location: confirm.php');
      exit;
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	  <h2 class="form-title">お問い合わせフォーム</h2>
	  <form method="post" action="input.php">
		<div class="form-item">名前</div>
		  <div>
		  <?php foreach((array)$errorName as $value): ?>
		  <?php if(!empty($value)): ?>
		  <div><?php echo $value[0]; ?></div>
		  <?php else: ?>
		  <div><?php break; ?></div>
		  <?php endif ?>
		  <?php endforeach ?>
		</div> 
		<input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>">
		<div class="form-item">E-mail</div>
		  <div>
		  <?php foreach((array)$errorEmail as $value): ?>
		  <?php if(!empty($value)): ?>
		  <div><?php echo $value[0]; ?></div>
		  <?php else: ?>
		  <div><?php break; ?></div>
		  <?php endif ?>
		  <?php endforeach ?>
		</div>
	  <input type="text" name="email" value="<?php echo $_SESSION["email"]; ?>">
	  <input type="hidden" name="send_data" value="入力情報">
	  <input type="submit" value="送信">
	    </div>
	  </form>
	</body>
</html>