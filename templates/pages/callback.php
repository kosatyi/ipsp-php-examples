<?

    $mongo = new MongoClient;
    $db  = $mongo->selectDB('shop');
    $collection  = $db->selectCollection('ipsp_callbacks');
    $collection->insert($ipsp->call('result'));