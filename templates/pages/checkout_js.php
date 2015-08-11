<?
$host       = $_SERVER['HTTP_HOST'];
$params = Flight::request()->data;
$params['amount'] = $params['amount'] * 100;
$params['response_url'] = sprintf('http://%s/page/result/%s',$host,$params['order_id']);
$params['server_callback_url'] = sprintf('http://%s/page/callback',$host);
$result = $ipsp->call('checkout',$params->getData());
$data = $result->getResponse();

?>
<?if($data->isSuccess()):?>
<style>
#checkout_wrapper{
    position:fixed;
    width:400px;
    height:560px;
    z-index:100;
    top:100px;
    left:50%;
    margin-left:-240px;
    border:1px solid #dfdfdf;
    padding:5px;
    overflow:hidden;
    box-shadow:1px solid #ccc;
}
#checkout_wrapper iframe{
    overflow:hidden;
}
</style>
<div id="checkout_wrapper"></div>

<script>
    $oplata('checkout').scope(function(){
        this.setCheckoutWrapper('#checkout_wrapper');
        this.setModal(false);
        this.setCssStyle({
            '.page-section-tabs':{
              'display':'none'
            },
            '.pages-checkout':{
                'background':'transparent'
            },
            'html,body':{
              'overflow':'hidden',
              'padding':0,
              'margin':0
            },
            '.page-section-shopinfo .col-login,.gui_input_suggest .arrow':{
                'display':'none'
            }
        });
        this.action('show',function(){
            console.log('show',arguments);
        });
        this.loadUrl('<?=$data->checkout_url?>');
    });
</script>
<?else:?>
    <?
        Flight::render('fragments/response',array('data'=>$data));
    ?>
<?endif;?>
