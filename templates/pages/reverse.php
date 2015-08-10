<?
    $order_id = implode('_',array('recurring',rand(1111111,9999999)));
    $result = $ipsp->call('pcidss',array(
        'order_id'   => $order_id ,
        'order_desc' => 'Test Order Description',
        'amount'     => 2000,
        'currency'   => $ipsp::UAH ,
        'expiry_date'=> '1224',
        'card_number'=> 4444555511116666,
        'cvv2'       => 111
    ));
    $data = $result->getResponse();
?>
<section id="checkout_form">
    <form class="checkout" method="post" action="/page/reverse_submit">
        <fieldset>
            <input type="text" name="order_id" value="<?=$order_id?>">
        </fieldset>
        <fieldset>
            <input type="text" name="amount" value="<?=$data->amount?>">
        </fieldset>
        <fieldset>
            <input type="text" name="currency" readonly value="<?=$data->currency?>">
        </fieldset>
        <fieldset>
            <button>Proceed to Reverse</button>
        </fieldset>
    </form>
</section>