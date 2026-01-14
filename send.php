<?php

    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location:contact.php");
        exit;
    }

    $name = $_POST["name"] ?? "";
    $companyName = $_POST["companyName"] ?? "";
    $email = $_POST["email"] ?? "";
    $age = $_POST["age"] ?? "";
    $message = $_POST["message"] ?? "";

    $to ="sogi.haruka0303@gmail.com";
    $subject ="問い合わせ";
    $mailbody =
        "名前：{$name}\n".
        "会社名：{$companyName}\n".
        "メールアドレス：{$email}\n".
        "年齢：{$age}\n".
        "お問い合わせ内容：{$message}\n";
    $headers ="From:{$email}";

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォーム - 送信完了ボタン</title>
    </head>
<body>
    <h1>お問い合わせフォーム - 送信完了ボタン</h1>
    <?php
        if(mail($to,$subject,$mailbody,$headers)){
            echo "<p>お問い合わせが送信されました。ありがとうございます！</p>";
        } else {
            echo "<p>送信失敗しました</p>";
        }
    ?>
    <a href="contact.php">お問い合わせフォームに戻る</a>
</body>