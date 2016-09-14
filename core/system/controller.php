<?php

namespace core\system;

abstract class controller
{
    private $_views_dir = '';
    private $_views_sub_dir = '';

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
        // Присвоение общей папки с файлами представления
        if (empty($this->_views_dir))
        {
            $this->_views_dir = dirname(dirname(__DIR__)) . '/application/views/';

            $class_exp  = explode("\\", get_called_class());

            $this->_views_sub_dir = strtolower(str_replace('Controller', '', end($class_exp))) . '/';
        }

        $content = '';

        if (is_array($data))
        {
            extract($data);
        }

        // Check view file for existance
        if (file_exists($this->_views_dir . $this->_views_sub_dir . $view_file .'.php'))
        {
            ob_start();

            require_once $this->_views_dir . $this->_views_sub_dir . $view_file .'.php';

            $content = ob_get_clean();
        }
        else
        {
            $content = 'no view file found: ' . $this->_views_dir . $this->_views_sub_dir . $view_file .'.php';
        }

        require_once $this->_views_dir . '/layout.php';
    }
}