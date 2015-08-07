<?php
$ipsp->setParam('order_id',$order_id);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/page/result/%s',$_SERVER['HTTP_HOST'],$order_id));
$result = $ipsp->call('Pcidss',array(
    "amount"		=> 1020,
    "card_number"   => 4444555511116666, //4444555566661111
    "cvv2"          => 111,
    "expiry_date"   => 1224
));
$result->acsRedirect();
$data = $result->getResponse();
?>

<header id="response_header">
    <h1>Response Status : <em class="<?=$data->response_status?>"><?=$data->response_status?></em></h1>
</header>
<nav id="response_nav">
    <p><a href="/page/reverse/<?=$order_id?>">Refund</a></p>
    <p><a href=""></a></p>
    <p><a href=""></a></p>
    <p><a href=""></a></p>
</nav>
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