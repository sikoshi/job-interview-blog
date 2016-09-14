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
        $data = [];

        $data['time'] = time();

        // Обработка нового комментария
        $this->render('index', $data);
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
        $data = [];

        $data['time'] = time();

        // Обработка нового комментария
        $this->render('post', $data);
    }

    /**
     * Posts::actionCreate();
     * @desc Создание нового поста
     *
     * @return string
     * */
    public function actionCreate()
    {
        $data = [];

        $data['time'] = time();

        // Обработка нового комментария
        $this->render('create', $data);
    }
}