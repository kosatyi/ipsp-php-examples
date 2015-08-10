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

    $ipsp->setParam('order_id',$order_id);
    $ipsp->setParam('currency','UAH');
    $ipsp->setParam('amount','200');
    $result = $ipsp->call('capture');
    $data = $result->getResponse();
?>
<!doctype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
<header id="response_header">
    <h1>Reverse Status : <em class="<?=$data->response_status?>"><?=$data->response_status?></em></h1>
</header>
<section id="response_content">
    <table class="response">
        <tr>
            <th>Property</th>
            <th>Value</th>
        </tr>
        <tbody>
        <?foreach($data->getData() as $key=>$value):?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value?></td>
            </tr>
        <?endforeach;?>
        </tbody>
    </table>
</section>
</body>
</html>
