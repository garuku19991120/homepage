<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.min.css"><!-- 全体css -->
    <link rel="stylesheet" href="./css/shop.min.css">
    <link rel="stylesheet" href="./css/menu.min.css">
    <!--メニュー用css -->
    <script src="./js/none.js"></script><!-- transitionの動作無効用js -->
    <title>SHOP|グッズ販売</title>
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

    <!--
         ここからメインコンテンツ 
        liを追加すると画像が一枚分追加される。
        

        -->
    <div class="center">
        <ul>
            <li>
                <ol>
                    <li>
                        <a href="//garuku1120.booth.pm/items/1780418">
                            <div class="shop_contents">
                                <img src="./img/shop1.jpg" alt="" class="shop_kyanbasu">
                                <!-- <div class="test"></div> -->
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="//garuku1120.booth.pm/items/2474058">
                            <div class="shop_contents">
                                <img src="./img/shop2.jpg" alt="" class="shop_tsyatu">
                                <!-- <div class="test"></div> -->
                            </div>
                        </a>
                    </li>
                </ol>
            </li>
            <li>
                <ol>
                    <li>
                        <a href="//garuku1120.booth.pm/items/2718777">
                            <div class="shop_contents">
                                <img src="./img/shop3.jpg" alt="" class="shop_kyanbasu">
                                <!-- <div class="test"></div> -->
                            </div>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="//garuku1120.booth.pm/items/1780418">
                            <div class="shop_contents">
                                <img src="./img/shop4.png" alt="" class="shop_kyanbasu">
                            </div>
                        </a>
                    </li> -->
                </ol>
            </li>
            <!--   <li>
        <ol>
            <li><div class="shop_contents"></div></li>
            <li><div class="shop_contents"></div></li>
        </ol>
    </li> -->
        </ul>
    </div>
</body>

</html>