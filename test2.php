<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './compilation_cache',
	'auto_reload' => true,
));
//$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array('name' => 'Fabien', 'a_variable' => 'a orange'));
