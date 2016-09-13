<?php

// Anyone can post comments

namespace application\controllers;

class AccountController
{
    /**
     * Posts::actionIndex();
     * @desc Главная страница
     *
     * @param integer $page Страница
     *
     * @return string
     * */
    public function actionIndex($page = 1)
    {
        return 'posts/index';
    }
}