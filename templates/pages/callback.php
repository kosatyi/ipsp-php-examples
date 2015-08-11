<?

    $mongo = new MongoClient;

    $db  = $mongo->selectDB('shop');
    $collection  = $db->selectCollection('ipsp_callbacks');
    $result = $ipsp->call('result');

    if( $result->getResponse() )
    {
        $collection->insert($result->getResponse());
    }

