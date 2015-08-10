<?

    $result = $ipsp->call('pcidss',array(
        'order_id'   => implode('_',array('recurring',rand(1111111,9999999))),
        'order_desc' => 'Test Order Description',
        'amount'     => 200,
        'currency'   => $ipsp::UAH ,
        'expiry_date'=> '1224',
        'card_number'=> 4444555511116666,
        'cvv2'       => 111,
        'required_rectoken'=>'y'
    ));

    $data = $result->getResponse();

?>

<section id="checkout_form">
    <form class="checkout" method="post" action="/page/recurring_submit">
        <input type="hidden" name="currency" value="<?=$data->currency?>">
        <input type="hidden" name="amount" value="<?=$data->amount?>">
        <fieldset>
            <input type="text" readonly name="rectoken" value="<?=$data->rectoken?>">
        </fieldset>
        <fieldset>
            <input type="text" name="order_id" value="<?=implode('_',array('recurring',rand(1111111,9999999)))?>">
        </fieldset>
        <fieldset>
            <input type="text" name="order_desc" value="Test Order Description">
        </fieldset>
        <fieldset>
            <button>Proceed Recurring</button>
        </fieldset>
    </form>
</section>