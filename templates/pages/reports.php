<?
    $date_from = new DateTime('-2 days');
    $date_to = new DateTime('now');
    $ipsp->setParam('date_from',$date_from->format('d.m.Y'));
    $ipsp->setParam('date_to',$date_to->format('d.m.Y'));
    $result = $ipsp->call('Reports');
    $data = $result->getResponse();

?>
<!doctype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
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
</body>
</html>
