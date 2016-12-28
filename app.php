<?php
require_once 'vendor/autoload.php';

include_once 'BlogModel.php';
include_once 'BlogController.php';
include_once 'ViewManager.php';
include_once 'Author.php';
include_once 'Article.php';

$authors=[
    new Author(1, 'A', 'B'),
    new Author(2, 'C', 'D'),
];

$articles = [
    new Article(1, 'article 1', 'un super article 1', $authors[0], new DateTime() ),
    new Article(2, 'article 2', 'un super article 2', $authors[0], new DateTime() ),
    new Article(3, 'article 3', 'un super article 3', $authors[1], new DateTime() ),
    new Article(4, 'article 4', 'un super article 4', $authors[1], new DateTime() ),
];

$model = new BlogModel('mon super blog', "en mvc", $articles);
$viewManager = new ViewManager();

$controller = new BlogController($model, $viewManager);

//echo $viewManager->getHome('yo', 'test', ['A','B']);
?>