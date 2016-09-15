<?php

namespace core\system;

class app
{
    private $_params;

    /**
     * application::init();
     * @desc Инициализация приложения
     *
     * @return void
     * */
    public function init()
    {
        $params_file = __DIR__ . 'params.php';

        if (file_exists($params_file))
        {
            $params = require_once $params_file;

            if (is_array($params))
            {
                $this->_params = $params;
            }
        }

        print_r($this->_params);

        $routing = new \core\system\routing();

        $routing->run();

        $class      = "application\\controllers\\" . $routing->getControllerClass();
        $controller = new $class;

        echo $controller->{$routing->getControllerAction()}();
    }
}