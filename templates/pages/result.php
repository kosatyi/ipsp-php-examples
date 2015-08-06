<?

if($ipsp->hasAcsData()){
    $result = $ipsp->call('PaymentPcidssConfirm',array(
        'order_id' => $order_id,
        'pares'    => $_POST['PaRes'],
        'md'       => $_POST['MD'],
        'version'  => '1.0'
    ));
} elseif( $ipsp->hasResponseData() ) {
    $result = $ipsp->call('PaymentResult',$_POST);
} else{
    $result = $ipsp->call('PaymentStatus',array(
        'order_id' => $order_id
    ));
}
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