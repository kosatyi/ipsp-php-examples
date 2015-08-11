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

		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<link rel="stylesheet" href="/static/ipsp-php.css">
		<script src="/static/base.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/github.min.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>
		<script src="https://api.oplata.com/static/v1/js/oplata.js"></script>
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
					<h3><a href="/page/callback_list">Callback List</a></h3>
				</li>
				<li>
					<h3>API</h3>
					<ul>
						<li><a href="/page/checkout">Accept purchase<br><small>(hosted payment page)</small></a></li>
						<li><a href="/page/pcidss">Accept purchase <br><small>(merchant payment page)</small></a></li>
						<li><a href="/page/status">Check orders status <br><small>(using order_id)</small></a></li>
						<li><a href="/page/reverse">Order reversal <br><small>(by order_id)</small></a></li>
						<li><a href="/page/reports">Payment report</a></li>
						<li><a href="/page/recurring">Purchase by card token</a></li>
						<li><a href="/page/verification">Card verification</a></li>
						<li><a href="/page/capture">Payment capture</a></li>
						<li><a href="/page/p2pcredit">P2P credit card</a></li>
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
