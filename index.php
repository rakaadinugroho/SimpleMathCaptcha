<?php
require 'core/mathcaptcha.php';
$captcha=new MathCaptcha();
# Set Captcha Number ( from, to )

$captcha->setCaptcha(1, 25);
?>
<html>
<head>
	<title>Math Captcha</title>
</head>
<body>
	<form action='process.php' method='post'>
		<?= $captcha->getCaptcha(); ?>
		<input type='text' name='verification'>
		<button type='submit'>Check</button>
	</form>
</body>
</html>