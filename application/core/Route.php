<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 9:40
 */

/**
 * Class Route
 */
class Route
{
    static $controller = "Home";
    static $action = 'view';


    /**
     * Bad routing method
     */
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
            self::show_error_404();
        };
        if (method_exists($controller = new $class_name, $action_name)) {
            $controller->$action_name();
        } else {
            self::show_error_404();
        }
    }

    /**
     * Show 404 Error
     */
    static private function show_error_404()
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        die();
    }
}