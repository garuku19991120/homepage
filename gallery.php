<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.min.css"><!-- 全体css -->
    <link rel="stylesheet" href="./css/gallery.min.css">
    <link rel="stylesheet" href="./css/menu.min.css">
    <!--メニュー用css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
    <script src="./js/none.js"></script><!-- transitionの動作無効用js -->
    <title>GALLERY|ギャラリー</title>
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
    <div class="center">
        <ul>
            <li>
                <ol>
                    <li><a href="./img/image1.png" data-lightbox="group"><img src="./img/image1.png" width="500"></a></li>
                    <li><a href="./img/image3.png" data-lightbox="group"><img src="./img/image3.png" width="500"></a></li>
                    <li><a href="./img/image5.png" data-lightbox="group"><img src="./img/image5.png" width="500"></a></li>
                    <li><a href="./img/image7.png" data-lightbox="group"><img src="./img/image7.png" width="500"></a></li>
                    <li><a href="./img/image9.png" data-lightbox="group"><img src="./img/image9.png" width="500"></a></li>
                </ol>
            </li>
            <li>
                <ol>
                    <li><a href="./img/image2.png" data-lightbox="group"><img src="./img/image2.png" width="500"></a></li>
                    <li><a href="./img/image4.png" data-lightbox="group"><img src="./img/image4.png" width="500"></a></li>
                    <li><a href="./img/image6.png" data-lightbox="group"><img src="./img/image6.png" width="500"></a></li>
                    <li><a href="./img/image8.png" data-lightbox="group"><img src="./img/image8.png" width="500"></a></li>
                    <li><a href="./img/image10.png" data-lightbox="group"><img src="./img/image10.png" width="500"></a></li>

                </ol>
            </li>
        </ul>
    </div>
</body>

</html>