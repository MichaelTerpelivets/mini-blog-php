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
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    /**
     * Route constructor.
     */
    public function __construct()
    {
        $url = $this->parserUrl();
        if (file_exists('../application/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
        require_once '../application/controllers/' . ucfirst($this->controller) . 'Controller.php';
        $class_name = $this->controller . 'Controller';
        $this->controller = new $class_name;
        if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Method parser Url
     * @return array
     */
    public function parserUrl(): array
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}