<?php
require 'core/mathcaptcha.php';
$captcha=new MathCaptcha();

#Get Post
$verification=$_POST['verification'];

if($captcha->currentCaptcha() == $verification)
{
	echo "Valid, Place Your Action Here";
}
else
{
	echo "Wrong Captcha";
}