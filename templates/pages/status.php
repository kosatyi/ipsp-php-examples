<?

if(!$order_id){
    $date_from = new DateTime('-2 days');
    $date_to = new DateTime('now');
    $result = $ipsp->call('reports',array(
        'date_from'=>$date_from->format('d.m.Y'),
        'date_to'=>$date_to->format('d.m.Y')
    ));
    $data = $result->getResponse();
    Flight::render('fragments/reports',array('data'=>$data));
} else{
    $result = $ipsp->call('status',array(
        'order_id'=>$order_id
    ));
    $data = $result->getResponse();
    Flight::render('fragments/response',array('data'=>$data));
}