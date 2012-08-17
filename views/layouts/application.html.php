<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css"/>
		<script type="text/javascript" src="/assets/js/vendor/jquery.min.js"></script>		
		<?php if (file_exists("assets/js/$controllerName/$actionName.js")) { ?>
		<script type="text/javascript" src="/assets/js/<?php echo $controllerName; ?>/<?php echo $actionName; ?>.js"></script>
		<?php } ?>
	</head>
	<body>
		<?php include('views/layouts/_menu.html.php'); ?>
		<?php echo $content; ?>
	</body>
</html>