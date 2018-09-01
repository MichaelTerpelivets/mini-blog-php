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
        $params = [];
        if ($_SERVER['REQUEST_URI'] != '/') {
            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_parts = explode('/', trim($path, '/'));
            self::$controller = ucfirst(array_shift($uri_parts));
            if (!empty($uri_parts)) {
                self::$action = array_shift($uri_parts);
            }
            for ($i = 0; $i < count($uri_parts); $i++) {
                $params[$uri_parts[$i]] = $uri_parts[++$i];
            }
            $_REQUEST = array_merge($_REQUEST, $params);
            //todo create routing
        }
        $class_name = self::$controller . 'Controller';
        $action_name = self::$action;
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
        if (method_exists($controller = new $class_name, $action_name)) {
            $controller->$action_name();
        } else {
            //todo return Error
        }
    }
}