<?
    $result = $ipsp->call('checkout',array(
        'order_id'  => uniqid('order'),
        'order_desc'=> 'Test order',
        'currency'  => $ipsp::USD,
        'amount'    => 2000
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
