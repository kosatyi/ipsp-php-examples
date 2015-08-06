<?

require_once '../init.php';

$ipsp->setParam('order_id',$_GET['order_id']);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/result.php?order_id=%s',$_SERVER['HTTP_HOST'],$_GET['order_id']));

$result = $ipsp->call('PaymentRedirect',array(
    "amount"		=> "200",
    "delayed"		=> "y"
));

print_r($result->getResponse());