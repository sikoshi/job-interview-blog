<?php

namespace core\system;

class bootstrap
{
    /**
     * bootstrap::init();
     * @desc
     *
     *
     * */
    public function init()
    {
        $routing = new \core\system\routing();

        $routing->run();

        $class      = "application\\controllers\\" . $routing->getControllerClass();
        $controller = new $class;

        echo $controller->{$routing->getControllerAction()}();

        //echo $controller->actionView();
    }
}