<?php

class AvengerQuote
{
    protected $id;
    protected $author;
    protected $quote;
    protected $photos;
    protected $date;
    protected $comments = [];

    public function __construct($id, $author, $quote, $photos)
    {
        $this->id = $id;
        $this->author = $author;
        $this->quote = $quote;
        $this->photos = $photos;
        $this->date = date('Y-m-d');
    }
    public function getdate()
    {
        return $this->date;
    }
    public function addComment($text)
    {
        array_push($this->comments, new Comment($text));
    }
    public function getComments()
    {
        return $this->comments;
    }
    public function getPhotos()
    {
        return $this->photos;
    }
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getQuote()
    {
        return $this->quote;
    }
}