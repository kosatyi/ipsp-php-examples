<?
if($ipsp->hasAcsData()){
    $result = $ipsp->call('pcidssConfirm',array(
        'order_id' => $order_id,
        'pares'    => $_POST['PaRes'],
        'md'       => $_POST['MD'],
        'version'  => '1.0'
    ));
} elseif( $ipsp->hasResponseData() ) {
    $result = $ipsp->call('result');
} else{
    $result = $ipsp->call('status',array(
        'order_id' => $order_id
    ));
}

$data = $result->getResponse();

Flight::render('fragments/response',array('data'=>$data));