<?php

class Comment
{
    public $author_name;
    public $body;

    function __construct($author, $body)
    {
        $this->author_name = $author;
        $this->body        = $body;
    }

    /**
     * post::getAuthor();
     * @desc
     *
     * @return string
     * */
    public function getAuthor()
    {
        return $this->author_name;
    }

    /**
     * post::getBody();
     * @desc
     *
     * @return string
     * */
    public function getBody()
    {
        return $this->body;
    }
}