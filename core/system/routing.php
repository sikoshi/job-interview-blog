<?php

namespace core\system;

class routing
{
    private $_request_string    = '';
    private $_routes            = [];
    private $_controller_class  = 'PostsController';
    private $_controller_action = 'index';

    /**
     * routing::__construct();
     * @desc
     *
     * @return mixed
     * */
    public function __construct()
    {
        // loading routes
        $this->_routes = require_once __DIR__ . '/../config/routes.php';
    }

    /**
     * bootstrap::checkRoute();
     * @desc
     *
     * @return void
     * */
    public function run()
    {
        // Проверка строки
        $this->_request_string = $this->_process_uri();

        if (!empty($this->_request_string))
        {
            $this->_applyRoute($this->_request_string);
        }
    }

    /**
     * bootstrap::_process_uri();
     * @desc
     *
     * @return string
     * */
    private function _process_uri()
    {
        // Удаление первого слеша
        $request_string = ltrim($_SERVER['REQUEST_URI'], '/');

        if (!empty($request_string))
        {
            $request_string = preg_replace("#([a-zA-Z0-9\/]+)(\?.*)?#","$1",$request_string);
        }

        return $request_string;
    }

    /**
     * bootstrap::_applyRoute();
     * @desc
     *
     * @param string $url
     *
     * @return void
     * */
    private function _applyRoute($url)
    {
        if (sizeof($this->_routes) > 0)
        {
            array_walk($this->_routes, function($route) use($url)
            {
                if ($url == $route['route'])
                {
                    $this->_controller_class  = $route['controller'];
                    $this->_controller_action = $route['action'];

                    return true;
                }
            });
        }
    }

    /**
     * bootstrap::getControllerClass();
     * @desc
     *
     * @return string
     * */
    public function getControllerClass()
    {
        return $this->_controller_class;
    }

    /**
     * bootstrap::getControllerAction();
     * @desc
     *
     * @return string
     * */
    public function getControllerAction()
    {
        return $this->_controller_action;
    }
}