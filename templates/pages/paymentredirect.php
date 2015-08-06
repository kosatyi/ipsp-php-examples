<?

$ipsp->setParam('order_id',$order_id);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/page/result/%s',$_SERVER['HTTP_HOST'],$order_id));

$result = $ipsp->call('PaymentRedirect',array(
    "amount"		=> "200",
    "delayed"		=> "y"
));

print_r($result->getResponse());