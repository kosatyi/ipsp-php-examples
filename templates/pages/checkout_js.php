<?
$urlpattern = 'http://%s/page/result/%s';
$host       = $_SERVER['HTTP_HOST'];
$params = Flight::request()->data;
$params['amount'] = $params['amount'] * 100;
$params['response_url'] = sprintf($urlpattern,$host,$params['order_id']);
$result = $ipsp->call('checkout',$params->getData());
$data = $result->getResponse();
?>
<script src="https://api.oplata.com/static/v1/js/oplata.js"></script>
<div id="checkout_wrapper"></div>
<script>

    $oplata('checkout').scope(function(){
        this.setCheckoutWrapper('#checkout_wrapper');
        this.loadUrl('<?=$data->checkout_url?>');
    });

</script>