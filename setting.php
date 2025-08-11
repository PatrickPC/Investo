<?php
include 'buy.php';
include 'failed.php';
?>

<?php 


$epay_url = "https://rc-epay.esewa.com.np/api/epay/main/v2/form";
$pid = "Investo";
$successurl = "php/success.php?q=su";
$failedurl = "php/failed.php?q=fu";
$merchant_code = "epay_payment"; 
$fraudcheck_url = "https://uat.esewa.com.np/epay/transrec";

// For Amount Check
$actualamount = 1000;

?>