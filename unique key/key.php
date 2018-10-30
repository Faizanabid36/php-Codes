<?php 
	function generateKey(){
		$keyLength=8;
		$string="1234567890qwertyuiopasdfghjklzxcvbnm";
		$key=substr(str_shuffle($string),0,$keyLength);
		return $key;
	}