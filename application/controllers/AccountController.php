<?php

// Anyone can post comments

namespace application\controllers;

use core\system\controller;

class AccountController extends controller
{
    /**
     * Posts::actionSignin();
     * @desc Страница входа
     *
     * @return string
     * */
    public function actionSignin()
    {
        $data = [];

        $this->render('signin', $data);
    }

    /**
     * Posts::actionSignOut();
     * @desc Страница выхода
     *
     * @param integer $page Страница
     *
     * @return string
     * */
    public function actionSignOut()
    {
        $data = [];

        $this->render('signout', $data);
    }
}