<?php

/**
 * Class ViewManager
 * renvoyer le bon template
 */
class ViewManager
{
    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('templates/');
        $this->twig = new Twig_Environment($this->loader);
    }

    public function renderHome($title, $subtitle, $articles)
    {
        $template = $this->twig->load("index.html.twig");
        return  $template->render([
            'title' => $title,
            'subtitle' => $subtitle,
            'articles' => $articles,
            'SELF' => $_SERVER['PHP_SELF']
        ]);
    }

    public function renderArticle(Article $article)
    {
        return  $this->twig->render("article.twig", [
            'article' => $article,
            'SELF' => $_SERVER['PHP_SELF']
        ]);
    }
}

?>