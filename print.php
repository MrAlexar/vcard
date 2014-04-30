<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="print">
	<?php
	$side = 'front';
	if (isset($_GET['side']) and in_array($_GET['side'], array('front', 'back'))) {
		$side = $_GET['side'];
	}
	foreach (range(1,8) as $i) {
		include($side . '.php');
	}
	?>
</body>
</html>
