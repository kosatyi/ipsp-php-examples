<?

    $mongo = new MongoClient;
    $db  = $mongo->selectDB('shop');
    $collection  = $db->selectCollection('ipsp_callbacks');
    $cursor = $collection->find();
    foreach($cursor as $item)
    {
        print_r($item);
    }