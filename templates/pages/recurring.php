<?
    $result = $ipsp->call('Recurring');
    $data = $result->getResponse();
?>
<header id="response_header">
    <h1>Reverse Status : <em class="<?=$data->response_status?>"><?=$data->response_status?></em></h1>
</header>
<section id="response_content">
    <table class="response">
        <tbody>
        <?$reports=$data->getData();?>
        <?foreach($reports as $item):?>
        <tr>
           <td><?print_r($item)?></td>
        </tr>
        <?endforeach;?>
        </tbody>
    </table>
</section>