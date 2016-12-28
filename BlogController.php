<?php

/**
 * Class BlogController
 *
 * renvoie vers la bonne page ( accueil / detail_article )
 * en fonction $_GET
 */
class BlogController
{

    private $model;
    private $viewManager;

    public function __construct(BlogModel $model, ViewManager $viewManager)
    {
        $this->model = $model;
        $this->viewManager = $viewManager;

        // verifier page selectionne
        if( isset($_GET['selected_article_id']) ){
            $model->selectedArticleId = $_GET['selected_article_id'];
            echo $this->openArticle();
        } else
            echo $this->openHome();
    }

    function openHome(): String
    {
        return $this->viewManager->renderHome(
            $this->model->getTitle(),
            $this->model->getSubtitle(),
            $this->model->getArticles()
        );
    }

    function openArticle(): String
    {
        $selectedArticle = current(array_filter(
            $this->model->getArticles(),
            function(Article $article){
               return $article->id == $this->model->selectedArticleId;
            }));

        return $this->viewManager->renderArticle( $selectedArticle );
    }

    function getResponse()
    {

    }
}


?>