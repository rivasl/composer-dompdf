<?php

// reference the Dompdf namespace
use Dompdf\Dompdf;


class Pdf
{
	protected static $configured = false;


	public static function configure()
	{
		if (static::$configured) return;

		// disable DOMPDF's internal autoloader if you are using Composer
		define('DOMPDF_ENABLE_AUTOLOAD', false);

		static::$configured = true;
	}


	public static function render($file, $html)
	{
		static::configure();
		$dompdf = new Dompdf();
		$dompdf->load_html($html);
		$dompdf->set_paper("letter","landscape");
		$dompdf->render();
		$dompdf->stream("$file");
	}

}