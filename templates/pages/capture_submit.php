<?

    $order_id = implode('_',array('capture',rand(1111111,9999999)));
    $result = $ipsp->call('pcidss',array(
        'order_id'   => $order_id ,
        'order_desc' => 'Test Order Description',
        'amount'     => 200,
        'currency'   => $ipsp::UAH ,
        'expiry_date'=> '1224',
        'card_number'=> 4444555511116666,
        'cvv2'       => 111,
        'preauth'    => 'y'
    ));

    $urlpattern = 'http://%s/page/result/%s';
    $host       = $_SERVER['HTTP_HOST'];
    $params = Flight::request()->data;
    $params['response_url'] = sprintf($urlpattern,$host,$params['order_id']);
    $result = $ipsp->call('capture',$params->getData());
    $data = $result->getResponse();

    Flight::render('fragments/response',array('data'=>$data));
