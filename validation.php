<?php
session_start();

$error1 = '';
$error2 = '';
$error3 = '';


if (isset($_POST["send_data"]) && $_POST["send_data"] === "12345") {  //送信ボタン押下
    $_SESSION["name"] = "";
    $_SESSION["email"] = "";

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
      //function validation(name)で関数化
    if ($_POST["name"] == '') { //nameが入力されていない
        $error1 = "名前が入力されてません";  // 処理を記述
    } elseif (mb_strlen($_POST["name"]) >= 10) { //nameが入力されている
        $error2 = "10文字以上入力されています";  // 処理を記述
    }
      //function validation(email)で関数化
    if ($_POST["email"] == '') {  //emailが入力されていない
        $error3 = "E-mailが入力されてません";  // 処理を記述
    } elseif (mb_strlen($_POST["email"]) >= 30) { //nameが入力されている
        $error2 = "10文字以上入力されています";  // 処理を記述
    }

    if ($_POST["name"] != '' &&
        mb_strlen($_POST["name"]) <= 9 &&
        $_POST["email"] != '' &&
        mb_strlen($_POST["email"]) <= 29)
    {
        header('Location: confirm.php');
        exit;
    }
}
?>


