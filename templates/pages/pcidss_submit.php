<?

$urlpattern = 'http://%s/page/result/%s';
$host       = $_SERVER['HTTP_HOST'];
$params = Flight::request()->data;
$params['amount'] = $params['amount'] * 100;
$params['response_url'] = sprintf($urlpattern,$host,$params['order_id']);
$params['expiry_date'] = join('',$params['expiry_date']);
$result = $ipsp->call('pcidss',$params->getData());
$result->acsRedirect();
$data = $result->getResponse();
Flight::render('fragments/response',array('data'=>$data));