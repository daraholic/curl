<?php

$page=file_get_contents("https://www.taiwanlottery.com.tw/index_new.aspx");
$file=fopen("lotto.text","w");
fwrite($file)