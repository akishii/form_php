<?php 
require_once ('validation.php');
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
        <div><?php echo $error1; ?></div>
        <div><?php echo $error2; ?></div>
        <input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>">
        <div class="form-item">E-mail</div>
        <div><?php echo $error3; ?></div>
        <input type="text" name="email" value="<?php echo $_SESSION["email"]; ?>">
        <input type="hidden" name="send_data" value="12345">
        <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>