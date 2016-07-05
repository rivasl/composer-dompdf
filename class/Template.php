<?php

/**
* 
*/
class Template
{
	
	public static function render($file, array $data = array())
	{
		ob_start();
		extract($data);
		include '../templates/'.$file.'.php'; 
		// exit();
		return ob_get_clean();
	}

}