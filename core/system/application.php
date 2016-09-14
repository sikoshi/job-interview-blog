<?php

namespace core\system;

class application
{
    var $params;

    var $db;

    /**
     * application::init();
     * @desc Инициализация приложения
     *
     * @return void
     * */
    public function init()
    {
        if (file_exists(__DIR__ . 'params.php'))
        {
            $params = require_once __DIR__ . 'params.php';

            if (is_array($params))
            {
                $this->params = $params;
            }
        }

        // Подключение к базе данных

        $this->_init_database();
    }

    /**
     * application::init();
     * @desc Инициализация базы данных
     *
     * @return void
     * */
    private function _init_database ()
    {
        $this->db = new SQLite3(__DIR__ . '/../database/mysqlitedb.db');

        $results = $this->db->query('SELECT * FROM sqlite_master');

        while ($row = $results->fetchArray())
        {
            var_dump($row);
        }

        //$this->db->query('CREATE TABLE posts(id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT, title VARCHAR(255) NOT NULL, body TEXT NOT NULL)');
        //$this->db->query('CREATE TABLE comments(id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT, post_id INTEGER NOT NULL, author_name VARCHAR(255) NOT NULL, body TEXT NOT NULL)');
    }
}

$app = new Application();

$app->init();