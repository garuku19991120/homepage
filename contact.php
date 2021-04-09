<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.min.css"><!-- 全体css -->
    <link rel="stylesheet" href="./css/contact.min.css">
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
    <div class="menu-space-main"></div>

    <table border="0" class="width-max height-max contact-table-master">
        <tr>
            <td class="contact-sub">
                <div class="contact-info-master">

                    <div class="contact-info-header">
                        お問い合わせ
                    </div>
                    <div class="contact-info">

                        現在お仕事を募集しております。<br>

                        ご用がありましたらお手数をお掛け致しますが こちらのページのご記入をお願いいたします。<br>

                        ご質問の場合は必須以外の項目を空欄で、ご依頼の場合は全ての項目を記入お願いいたします。<br>
                        ホームページがない場合は「なし」とご記入ください<br><br>
                        ■お引き受けできるもの<br>
                        ライトノベルの挿絵<br>
                        キャラクターデザイン<br>
                        キャラクター立ち絵<br>
                        一枚絵<br>
                        SNSアイコン作成<br>
                        Live2Dモデルイラスト<br>
                        Live2Dモデル作成<br>
                        <br>
                        上記の案件以外の場合はお問い合わせください。<br>
                    </div>
                </div>
            </td>
            <td class="contact-main">
                <table class="contact-table" border="0">
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
                        <td class="contact-td">お問い合わせ内容</td>
                        <td class="contact-td-input">
                            <textarea class="contact-textarea"></textarea>
                        </td>
                    </tr>
                    <tr class="contact-tr">
                        <td class="contact-td"></td>
                        <td class="contact-td-input">
                            <a type="submit" value="送信" class="contact-input-submit">送信</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>