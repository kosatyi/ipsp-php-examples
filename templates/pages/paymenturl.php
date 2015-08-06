<?

$ipsp->setParam('order_id',$order_id);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/page/result/%s',$_SERVER['HTTP_HOST'],$order_id));
$ipsp->setParam('amount',200);

$data = $ipsp->call('PaymentUrl')->getResponse();

if( $data->checkout_url )
    Flight::redirect($data->checkout_url);


