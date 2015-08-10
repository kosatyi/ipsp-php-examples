<header id="response_header">
    <h1>Reports</h1>
</header>
<section id="response_content" style="overflow:auto;">
    <table class="response">
        <thead>
        <tr>
            <th>ORDER_ID</th>
            <th>RESPONSE_SIGNATURE_STRING</th>
        </tr>
        </thead>
        <tbody>
        <?foreach($data->getData() as $index=>$order):?>
            <tr>
            <td style="white-space:nowrap">
                <a href="/page/status/<?=$order['order_id']?>"><?=$order['order_id']?></a>
            </td>
            <td><?=$order['response_signature_string']?></td>
            </tr>
        <?endforeach;?>
        </tbody>
    </table>
</section>