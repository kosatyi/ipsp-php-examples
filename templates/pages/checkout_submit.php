<?
$host       = $_SERVER['HTTP_HOST'];
$params = Flight::request()->data;
$params['amount'] = $params['amount'] * 100;
$params['response_url'] = sprintf('http://%s/page/result/%s',$host,$params['order_id']);
$params['server_callback_url'] = sprintf('http://%s/page/callback',$host);
$result = $ipsp->call('checkout',$params->getData());
$data = $result->getResponse();
if( $data->isSuccess() )
    Flight::redirect($data->checkout_url);
