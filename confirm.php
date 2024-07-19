<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include(dirname(__FILE__) . "/header.php"); ?>

    <?php 
        $name = $_POST["name"]; 
        $seat = $_POST["seat"];
        $email = $_POST["email"];
        $tel = $_POST["tel"]; 
    ?>

    

        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="seat" value="<?php echo $seat; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">

        <div class="confirm">
            <p class="confirm_top">お問い合わせ内容確認</p>

            <form class="content" method="POST" action="./thanks.php">
                <div class="row">
                    <div class="form_title">お名前</div>
                    <div class="value"><?php echo $name; ?></div>
                </div>
                <div class="row">
                    <div class="form_title">希望席</div>
                    <div class="value"><?php echo $seat; ?></div>
                </div>
                <div class="row">
                    <div class="form_title">メールアドレス</div>
                    <div class="value"><?php echo $email; ?></div>
                </div>
                <div class="row">
                    <div class="form_title">電話番号</div>
                    <div class="value"><?php echo $tel; ?></div>
                </div>

                <div class="buttons">
                    <input class="back-button" type="button" value="戻る" onclick="history.back(-1)">
                    <input class="submit-button" type="submit" value="送信">
            </form>
        </div>
    

    <?php include(dirname(__FILE__) . "/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>