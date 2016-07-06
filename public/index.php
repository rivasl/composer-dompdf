<?php

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

$data = array(
	'name'	=>'Luis A. Rivas',
	'course'=>'Curso básico de Laravel 5'
);

require '../class/Template.php';
require '../class/Pdf.php';


$html=certificate\Template::render('pdf/certificate',$data);

certificate\Pdf::render('certificate',$html);