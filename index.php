<?php

$txt = '{\"statusCode\":\"0000\",\"statusMessage\":\"Successful\",\"paymentID\":\"TR0011ZX1677602501685\",\"bkashURL\":\"https:\/\/sandbox.payment.bkash.com\/redirect\/tokenized\/?paymentID=TR0011ZX1677602501685&hash=l_Xt((jg*5yI_qaN7nJ)i5(S4vEyx5j_r.Yl(HOaF1WGXFZrxrLkmYCYtKEa*e9i*D6OOj1GNg5JRQIec8kKZ.PVcn4mKP3U7IbV1677602501960&mode=0011&apiVersion=v1.2.0-beta\",\"callbackURL\":\"https:\/\/pgwa.durjoysoft.com\/wc-api\/bkash_payment_process?orderId=14&invoiceID=bfw_63fe2ec56e008_14\",\"successCallbackURL\":\"https:\/\/pgwa.durjoysoft.com\/wc-api\/bkash_payment_process?orderId=14&invoiceID=bfw_63fe2ec56e008_14&paymentID=TR0011ZX1677602501685&status=success\",\"failureCallbackURL\":\"https:\/\/pgwa.durjoysoft.com\/wc-api\/bkash_payment_process?orderId=14&invoiceID=bfw_63fe2ec56e008_14&paymentID=TR0011ZX1677602501685&status=failure\",\"cancelledCallbackURL\":\"https:\/\/pgwa.durjoysoft.com\/wc-api\/bkash_payment_process?orderId=14&invoiceID=bfw_63fe2ec56e008_14&paymentID=TR0011ZX1677602501685&status=cancel\",\"amount\":\"30.00\",\"intent\":\"sale\",\"currency\":\"BDT\",\"paymentCreateTime\":\"2023-02-28T22:41:41:960 GMT+0600\",\"transactionStatus\":\"Initiated\",\"merchantInvoiceNumber\":\"bfw_63fe2ec56e008_14\"}';

$tempData = str_replace("\\", "",$txt);

$cleanData = json_decode($tempData);

echo $cleanData->statusCode;

//==========================================

//$cleanData = json_decode( html_entity_decode( stripslashes ($txt ) ) );

print_r($cleanData);



json_decode($_POST['json']);
json_decode($_POST['json'], true);
json_decode(htmlspecialchars_decode($_POST['json']), true);


$a = json_decode(stripslashes($_POST['json']));
var_dump($a);
