<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 9:40
 */

class Route
{
    static $controller = "Home";
    static $action = 'view';

    static public function init()
    {
        if ($_SERVER['REQUEST_URI'] != '/') {
            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_parts = explode('/', trim($path, '/'));
            //todo create routing
        }
        $model_name = self::$controller . '.php';
        $controller_name = self::$controller . 'Controller.php';
        if (file_exists('../application/models/' . $model_name)) {
            include_once "../application/models/" . $model_name;
        }
        if (file_exists('../application/controllers/' . $controller_name)) {
            include_once "../application/controllers/" . $controller_name;
        } else {
            var_dump("ERROR");
            //todo return Error
        };
        $class_name = self::$controller . 'Controller';
        $name = self::$action;
        if (method_exists($controller = new $class_name, $name)) {
            $controller->$name();
        } else {
            //todo return Error`
        }
    }
}