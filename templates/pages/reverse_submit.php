<?

    $params = Flight::request()->data;
    $result = $ipsp->call('reverse',$params->getData());
    $data = $result->getResponse();

    Flight::render('fragments/response',array('data'=>$data));
