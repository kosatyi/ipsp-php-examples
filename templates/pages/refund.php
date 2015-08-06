<?
    require_once '../init.php';
    $ipsp->setParam('order_id',$_GET['order_id']);
    $ipsp->setParam('currency','UAH');
    $ipsp->setParam('amount','200');
    $result = $ipsp->call('Refund');
    $data = $result->getResponse();
?>
<!doctype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
<header id="header">
    <h1>Reverse Status : <em class="<?=$data->response_status?>"><?=$data->response_status?></em></h1>
</header>
<section id="content">
    <table>
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
