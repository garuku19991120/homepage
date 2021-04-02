<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.min.css"><!-- 全体css -->
    <link rel="stylesheet" href="./css/menu.min.css">
    <!--メニュー用css -->
    <script src="./js/none.js"></script><!-- transitionの動作無効用js -->
    <title>CONTACT|お問い合わせ</title>
</head>

<body>
    <!--あとあとこのファイルはphpファイルにするつもりです。今のところ作りやすいという点からhtmlになっています。 -->
    <table class="width-max absolute z-index-100" border="0">
        <tr>
            <td>
                <a href="index.php">
                    <img src="./img/logo.png" class="logo"></img>
                </a>
            </td>
            <td>
                <div class="right">
                    <?php include('./php/menu.php'); ?>
                </div>
            </td>
        </tr>
    </table>

    <table border="1" class="width-max height-max contact-table-master">
        <tr>
            <td class="contact-sub">

            </td>
            <td class="contact-main">
                <table class="contact-table" border="1">
                    <tr class="contact-tr">
                        <td class="contact-td">お名前</td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td">メールアドレス</td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td">電話番号</td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td">貴社のホームページ</td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td">ご予算</td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td"></td>
                        <td class="contact-td-input"><input type="text" class="contact-input"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>