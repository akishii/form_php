<?php
session_start();

//送信ボタンが押下されたら
if (isset($_POST["send_data"]) && $_POST["send_data"] === "入力情報") {
    
    $_SESSION["name"] = "";
    $_SESSION["email"] = "";
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$name = $_POST["name"];
	$email = $_POST["email"];

//name属性のバリデーリョン
function validation_name($name) {
	$errorName = array();
    
    //blankのバリデーション
	if (empty($name)) { 
	    $errorName[] = "名前が入力されてません";
	}
    
    //文字数のバリデーション
	if (mb_strlen($name) >= 10) { 
	    $errorName[] = "10文字以上入力されています";
	}
	return $errorName;
}
$errorName[] = validation_name($name);

//E-mail属性のバリデーション
function validation_email($email) {
	$errorEmail = array();
	//blankのバリデーション
	if (empty($email)) {
	$errorEmail = "E-mailが入力されてません";
	}
	//文字数のバリデーション
	if (mb_strlen($email) >= 30) {
	$errorEmail = "30文字以上入力されています";
	}
	return $errorEmail;
}
$errorEmail[] = validation_email($email);

//エラーがなければ確認画面へ
if (validation_name($name) == false &&
	validation_email($email) == false)
	{
	header('Location: confirm.php');
	exit;
}
}
?>


