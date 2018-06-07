<?php
require_once './vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './compilation_cache',
	'auto_reload' => true,
));

$elements = Yaml::parseFile('./test.yaml');

echo $twig->render('form.html', array('elements' => $elements));
