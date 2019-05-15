<?php
session_start();

$_SESSION["post"] = $_POST;
$data = $_POST;  //不必要？

$name = "";
$email = "";

if ( isset( $_POST["name"] ) == true ) {
	$name = htmlspecialchars( $_POST["name"], ENT_QUOTES, 'UTF-8');
}
if ( isset( $_POST["email"] ) == true ) {
	$email = htmlspecialchars( $_POST["email"], ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
</head>
<body>
    <div class="main">
        <h2 class="confirm-title">内容確認画面</h2>
            <div class="confirm-item">◆名  前　<?php echo $_POST['name']; ?></div>
            <div class="confirm-item">◆E-mail　<?php echo $_POST['email']; ?></div>
            <div calss="confirm-btn">
            <div class="back-btn">
            <div style="display:inline-flex">
              <form method="post" action="input.php">
                <input type="submit" value="戻る">
              </form>
              <form method="post" action="complete.php">
                <input type="submit" value="確定">
              </form>
            </div>    
            </div>
            </div>    
    </div>
</body>
</html>