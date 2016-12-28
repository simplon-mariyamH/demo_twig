<?php

class BlogModel
{

    private $title;

    public function getTitle(){
        return $this->title;
    }

    private $subtitle;

    public function getSubtitle(){
        return $this->subtitle;
    }

    private $articles;

    public function getArticles(){
        return $this->articles;
    }

    public $selectedArticleId;

    public function __construct($title, $subtitle, $articles)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->articles = $articles;
    }
}

?>