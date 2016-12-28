<?php
namespace rxlabz\demo\twig;

class Article
{
    public $id;
    public $title;
    public $content;
    public $author;
    public $publicationDate;

    public function __construct(int $id, String $title, String $content, Author $author, DateTime $date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->publicationDate = $date;
        $this->author = $author;
    }

    function __toString()
    {
        return "Article{ id->". $this->id . ",title->\" $this->title\",author->\" $this->author\" }";
        return $this->title.'('.$this->publicationDate->format('m/d/y').')';
    }
}
?>