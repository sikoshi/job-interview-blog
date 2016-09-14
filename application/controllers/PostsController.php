<?php

// Anyone can post comments

namespace application\controllers;

use core\system\controller;

class PostsController extends controller
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
        echo 'posts/index';
    }

    /**
     * Posts::actionIndex();
     * @desc Страница просмотра поста
     *
     * @param integer $id Идентификатор
     *
     * @return string
     * */
    public function actionView($id = 1)
    {
        // Обработка нового комментария
        $this->render('post');
    }

    /**
     * Posts::actionCreate();
     * @desc Создание нового поста
     *
     * @return string
     * */
    public function actionCreate()
    {
        // Обработка нового комментария
        return 'posts/create';
    }
}