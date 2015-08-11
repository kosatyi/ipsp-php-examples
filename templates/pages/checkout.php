<section id="checkout_form">
    <form class="checkout" method="post" action="/page/checkout_js">
        <input type="hidden" name="order_desc" value="Short Order Description">
        <fieldset>
            <select onchange="this.form.action=this.value">
                <option value="/page/checkout_submit">Standalone Page</option>
                <option selected value="/page/checkout_js">JS Widget</option>
            </select>
        </fieldset>
        <fieldset>
            <input type="text" name="order_id" value="order_<?=rand(1111111,9999999)?>">
        </fieldset>
        <fieldset>
            <input type="text" name="order_desc" value="Short Order Description">
        </fieldset>
        <fieldset>
            <input type="text" name="amount" placeholder="0.00" value="20">
            <select name="currency">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="RUB">RUB</option>
                <option value="UAH">UAH</option>
            </select>
        </fieldset>
        <fieldset>
            <button>Proceed to Checkout</button>
        </fieldset>
    </form>
</section>