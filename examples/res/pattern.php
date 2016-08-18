<html>
<head>
	<title><?= $title ? $title : "jquery-mosaic plugin example" ?></title>
	<link rel="stylesheet" type="text/css" href="res/css/main.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../jquery.mosaic.css"/>
	<script type="text/javascript" src="../jquery.mosaic.js"></script>
</head>
<body>

<?= $header ? "<header>$header".($headerSubtitle ? "<h2>$headerSubtitle</h2>" : null)."".($headerSubSubtitle ? "<h3>$headerSubSubtitle</h3>" : null)."</header>" : null ?>

<?= $mosaic ? "$mosaic" : null ?>

<?= $content ? "<div class=\"content\">$content</div>" : null ?>

</body>
</html>