<?php

require_once 'vendor/autoload.php';


//require_once 'vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
//require_once 'vendor/twig/twig/lib/Twig/Environment.php';

$loader = new Twig_Loader_Filesystem('templates/');

$twig = new Twig_Environment($loader);

$articles = ['article 1','article 2','article 3'];


$template = $twig->load("index.html.twig");
$template->render([
    'title' => 'welcome to twig',
    'welcome_message'=>'Bienvenue sur cette demo',
    'articles' => $articles
]);

?>