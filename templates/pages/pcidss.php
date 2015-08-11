<section id="checkout_form">
    <form class="checkout" method="post" action="/page/pcidss_submit">
        <input type="hidden" name="order_desc" value="Short Order Description">
        <fieldset>
            <input type="text" name="order_id" value="<?=uniqid('order')?>">
        </fieldset>
        <fieldset>
            <input type="text" name="order_desc" value="Short Order Description">
        </fieldset>

        <fieldset>
            <input type="text" name="amount" placeholder="0.00">
            <select name="currency">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="RUB">RUB</option>
                <option value="UAH">UAH</option>
            </select>
        </fieldset>
        <fieldset>
            <label><strong>Checkout Form</strong></label>
        </fieldset>
        <fieldset>
            <input type="text" name="card_number" placeholder="Credit Card Number">
        </fieldset>
        <fieldset>
            <input type="text" class="short" name="expiry_date[]" maxlength="3" placeholder="MM">
            <input type="text" class="short" name="expiry_date[]" maxlength="3" placeholder="YY">
        </fieldset>
        <fieldset>
            <input type="password" name="cvv2" maxlength="3" placeholder="CVV">
        </fieldset>
        <fieldset>
            <button>Checkout</button>
        </fieldset>
    </form>
</section>