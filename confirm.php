<?php

    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location:contact.php");
        exit;
    }

    $name=htmlspecialchars($_POST["name"],ENT_QUOTES);
    $companyName=htmlspecialchars($_POST["companyName"],ENT_QUOTES);
    $email=htmlspecialchars($_POST["email"],ENT_QUOTES);
    $age=htmlspecialchars($_POST["age"],ENT_QUOTES);
    $message=htmlspecialchars($_POST["message"],ENT_QUOTES);

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォーム-確認画面</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="layout">
                <header>
                    <h2>お問い合わせフォーム-確認画面</h2>
                </header>

            <div class="main">
                <div class="sidebar">
                    <ul>
                        <li><a href="">トップページ</a></li>
                        <li><a href="">人気投稿</a></li>
                        <li><a href="">エンジニアおすすめ商品</a></li>
                        <li><a href="">エンジニアおすすめ記事</a></li>
                        <li><a href="">投稿ページ</a></li>
                    </ul>
                </div>
            
                <div class ="content">
                        <table border="3">
                            <tr>
                                <th>お名前</th>
                                <td><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <th>会社名</th>
                                <td><?php echo $companyName; ?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <th>年齢</th>
                                <td><?php echo $age; ?></td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容</th>
                                <td><?php echo $message; ?></td>
                            </tr>
                        </table>
                    <div class ="btn-area">
                        <form action="send.php" method="POST">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" name="age" value="<?php echo $age; ?>">
                            <input type="hidden" name="message" value="<?php echo $message; ?>">
                            <input type="submit">
                        </form>
                        <button type="button" onclick="history.back()">戻る</button>
                    </div>
                </div>
            </div>
        </div>
        <footer></footer>
    </body>
</html>