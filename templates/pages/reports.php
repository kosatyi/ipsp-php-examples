<?

    $date_from = new DateTime('-2 days');
    $date_to = new DateTime('now');
    $ipsp->setParam('date_from',$date_from->format('d.m.Y'));
    $ipsp->setParam('date_to',$date_to->format('d.m.Y'));
    $result = $ipsp->call('reports');
    $data = $result->getResponse();
    Flight::render('fragments/reports',array('data'=>$data));