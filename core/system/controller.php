<?php

namespace core\system;

abstract class controller
{
    /**
     * Controller::render();
     * @desc
     *
     * @param string
     * @param array
     *
     * @return string
     * */

    public function render($view_file = '', $data = [])
    {
        if (is_array($data))
        {
            extract($data);
        }

        require_once dirname(__DIR__) . '/../application/views/' . $view_file .'.php';
    }
}