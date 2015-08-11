<?
$urlpattern = 'http://%s/page/result/%s';
$host       = $_SERVER['HTTP_HOST'];
$order_id   = uniqid('order');
$result = $ipsp->call('checkout',array(
    'order_id'  => $order_id,
    'order_desc'=> 'Test order',
    'currency'  => $ipsp::USD,
    'amount'    => 2000,
    'response_url'=>sprintf($urlpattern,$host,$order_id)
));
$data = $result->getResponse();
?>
<div class="modal-window modal-checkout">
    <div class="modal-header">
            <div class="modal-title">CHECKOUT</div>
            <div class="modal-close">&times;</div>
    </div>
    <div class="modal-content" data-checkout="<?=$data->checkout_url?>">

    </div>
</div>
