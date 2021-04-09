<?php

/** 
 * 今日が何年かを取得してdiv class="copyright"にして出力している
 * <?php include('./php/copyright.php'); ?>
 * を打つとechoを入れることができる
 * 
 * cssはstyle.scssに記述してある
 */
$today = date("Y");
echo ('<div class="copyright">©️2021-' . $today . 'GAISEN.</div>');
