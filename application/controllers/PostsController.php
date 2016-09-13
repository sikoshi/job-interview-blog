<?php

// Anyone can post comments

namespace application\controllers;

class PostsController
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
        return 'posts/view';
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