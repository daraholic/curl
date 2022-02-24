<?php 
// header("Access-Control-Allow-Origin: *");
// * 星號是開放給所有人
header("Access-Control-Allow-Origin: http://localhost");
include "./common/common.php";
?>

<?php
$input = $_POST;
// dd($input);
echo json_encode($input);

?>