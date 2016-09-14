<?php

// Anyone can post comments

namespace application\controllers;

use core\system\controller;
use application\models\post;

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
        if (!empty($_POST))
        {
            $model = new post();

            $model->title = $_POST['create_title'];
            $model->text  = $_POST['create_text'];

            if ($model->save())
            {
                die();
            }

            die();
        }

        $data = [];

        $data['time'] = time();

        // Обработка нового комментария
        $this->render('create', $data);
    }
}