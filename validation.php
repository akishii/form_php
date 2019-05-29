<?php
session_start();

class Validation {

    $_SESSION["name"] = "";
    $_SESSION["email"] = "";
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	
//name属性のバリデーリョン
public function validation_name($name) {
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
	$errorEmail[] = "E-mailが入力されてません";
	}
	//文字数のバリデーション
	if (mb_strlen($email) >= 30) {
	$errorEmail[] = "30文字以上入力されています";
	}
	return $errorEmail;
}
$errorEmail[] = validation_email($email);

}
?>


