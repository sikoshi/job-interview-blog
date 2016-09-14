<?php

namespace application\models;

class post
{
    public $id;
    public $title;
    public $body;

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
        // Фильтация данных

        // Проверка полей

        return true;
    }
}