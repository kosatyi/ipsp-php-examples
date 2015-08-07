<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?=Flight::get('apptitle')?> | <?=Flight::get('appname')?></title>
		<meta name="description" content="">
		<meta name="author" content="Stepan">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="/static/ipsp-php.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/github.min.css">
		<script>hljs.initHighlightingOnLoad();</script>
	</head>
	<body>
	<header id="header">
			<h1><?=Flight::get('appname')?></h1>
	</header>
	<main id="main">
		<ins class="col nav"></ins>
		<ins class="col content"></ins>
		<nav class="cell nav">
			<ul class="list">
				<li>
					<a href="/page/create">Создать запрос</a>
				</li>
				<li>
					<h3>API</h3>
					<ul>
						<li><a href="/page/checkout">Принять платеж</a></li>
						<li><a href="/page/pcidss">Принять платеж (PCIDSS)</a></li>
						<li><a href="/page/status">Проверить статус платежа</a></li>
						<li><a href="/page/reverse">Возврат платежа</a></li>
						<li><a href="/page/reports">Выписка по платежам</a></li>
						<li><a href="/page/recurring">Принять платеж по токену</a></li>
						<li><a href="/page/verification">Проверка карты</a></li>
						<li><a href="/page/capture">Списание заблокированной суммы</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<section class="cell content">
			<?=$content?>
		</section>
	</main>
	</body>
</html>
