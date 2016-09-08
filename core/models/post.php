<?php

class Post
{
    public $id;
    public $title;
    public $body;

    function __construct($id, $title, $body)
    {
        $this->id    = $id;
        $this->title = $title;
        $this->body  = $body;
    }

    /**
     * Post::getTitle();
     * @desc
     *
     * @return string
     * */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Post::getBody();
     * @desc
     *
     * @return string
     * */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Post::save();
     * @desc Сохранение
     *
     * @return string
     * */
    public function save()
    {
        if (empty($this->id))
        {

        }
    }
}