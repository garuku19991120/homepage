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
    <link rel="stylesheet" href="./css/index.min.css">
    <!--メニュー用css -->
    <script src="./js/none.js"></script><!-- transitionの動作無効用js -->
    <title>GAISEN|凱旋</title>
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
        <tr>
            <td class="main_contents" colspan="2">
            </td>
        </tr>
    </table>
    <div class="image_space"></div>
    <div class="center absolute gaisen"><img src="./img/logo.png" class="center-logo"></div>

    <div class="circleinfo">
        <table class="circleinfo-table">
            <th class="ciecle-info-th">サークル情報</th>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date">2020/11/23:</td>
                <td class="circleinfo-detail">COMITIA134 サークル参加</td>
            </tr>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date">2020/11/23:</td>
                <td class="circleinfo-detail">COMITIA134 頒布本「GAISEN No1」発売</td>
            </tr>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date">2021/05/04</td>
                <td class="circleinfo-detail">COMIC1 サークル参加予定</td>
            </tr>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date">2021/06/04</td>
                <td class="circleinfo-detail">COMITIA134 サークル参加予定</td>
            </tr>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date"></td>
                <td class="circleinfo-detail"></td>
            </tr>
            <tr class="circleinfo-tr">
                <td class="circleinfo-date"></td>
                <td class="circleinfo-detail"></td>
            </tr>
        </table>
    </div>
    <?php include('./php/copyright.php'); ?>
</body>

</html>