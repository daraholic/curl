<?php
include "./common/common.php";


// https://www.php.net/manual/en/function.curl-init.php 
// https://blog.johnsonlu.org/php-curl/ 
// 注意:在<?php以外寫註解會跑不出來

?>

<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://data.ntpc.gov.tw/api/datasets/4A03827A-588B-4058-AB21-EC02283E2BB7/json?page=0&size=5");
// CURLOPT_RETURNTRANSFER ,curl_exe才可以顯示
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);

// grab URL and pass it to the browser
// curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
// echo json_decode($result);
// echo $result;


// 看陣列
// $myArr=json_decode($result);
// dd($myArr[0]);


?>