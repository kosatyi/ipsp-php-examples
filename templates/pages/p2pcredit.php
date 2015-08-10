<?

$order_id   = rand(121123213,293929039933);

$result = $ipsp->call('p2pcredit',array(
    'order_id'  => $order_id,
    'order_desc'=> 'Test order description',
    'currency'  => $ipsp::RUB,
    'amount'    => 200,
    'receiver_card_number'=> 4444555566661111
));

$data = $result->getResponse();

if( $data->isSuccess() )
    Flight::redirect($data->checkout_url);
else
    Flight::render('fragments/response',array('data'=>$data));