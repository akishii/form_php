<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
</head>
<body>
    <h2 class="confirm-title">内容確認画面</h2>
            <div class="confirm-item">◆名  前　<?php echo $_SESSION["name"]; ?></div>
            <div class="confirm-item">◆E-mail　<?php echo $_SESSION["email"]; ?></div>
              <form method="post" action="input.php">
                <input type="submit" value="戻る">
              </form>
              <form method="post" action="complete.php">
                <input type="submit" value="確定">
              </form>
              
</body>
</html>