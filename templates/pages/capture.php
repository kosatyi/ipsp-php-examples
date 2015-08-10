<?
    $order_id = implode('_',array('capture',rand(1111111,9999999)));
    $result = $ipsp->call('pcidss',array(
        'order_id'   => $order_id ,
        'order_desc' => 'Test Order Description',
        'amount'     => 200,
        'currency'   => $ipsp::RUB ,
        'expiry_date'=> '1224',
        'card_number'=> 4444555511116666,
        'cvv2'       => 111,
        'preauth'    => 'y'
    ));
    $data = $result->getResponse();
?>

<section id="checkout_form">
    <form class="checkout" method="post" action="/page/capture_submit">
        <input type="hidden" name="currency" value="<?=$data->currency?>">
        <fieldset>
            <input type="text" readonly name="order_id" value="<?=$order_id?>">
        </fieldset>
        <fieldset>
            <input type="text" name="amount" value="<?=$data->amount?>">
        </fieldset>
        <fieldset>
            <button>Proceed Capture</button>
        </fieldset>
    </form>
</section>

