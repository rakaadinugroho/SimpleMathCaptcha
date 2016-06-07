<?php
session_start();
# Author Raka Adi Nugroho
# Simple MathCaptcha
class MathCaptcha{
	var $start;
	var $end;
	var $show;
	var $currvalue;
	
	public function __construct()
	{
		$this->start=1;
		$this->end	=20;
	}
	public function execCaptcha()
	{
		$firstdigit		= mt_rand($this->start, $this->end);
		$seconddigit	= mt_rand($this->start, $this->end);
		
		if(mt_rand(0,1) === 1)
		{
			$this->show				= "$firstdigit + $seconddigit";
			$_SESSION['captcha']	= $firstdigit+$seconddigit;
		}
		else
		{
			$this->show				= "$firstdigit - $seconddigit";
		}
	}
	
	public function getCaptcha()
	{
		MathCaptcha::execCaptcha();
		return $this->show;
	}
	
	public function setCaptcha($first, $end)
	{
		$this->start=$first;
		$this->end	=$end;
	}
	public function currentCaptcha()
	{
		return $_SESSION['captcha'];
	}
}