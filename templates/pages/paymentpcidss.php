<?php

$ipsp->setParam('order_id',$order_id);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/page/result/%s',$_SERVER['HTTP_HOST'],$order_id));

$result = $ipsp->call('PaymentPcidss',array(
    "amount"		=> 1020,
    "card_number"   => 4444555566661111,
    "cvv2"          => 111,
    "expiry_date"   => 1224
));

$result->acsRedirect();