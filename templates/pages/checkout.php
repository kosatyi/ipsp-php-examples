<?

$ipsp->setParam('order_id',$order_id);
$ipsp->setParam('order_desc','Test Product');
$ipsp->setParam('currency','UAH');
$ipsp->setParam('response_url',sprintf('http://%s/page/result/%s',$_SERVER['HTTP_HOST'],$order_id));
$ipsp->setParam('amount',200);

$data = $ipsp->call('Checkout')->getResponse();

if( $data->checkout_url )
    Flight::redirect($data->checkout_url);

?>

<header id="response_header">
    <h1>Payment Status : <em class="<?=$data->response_status?>"><?=$data->response_status?></em></h1>
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

