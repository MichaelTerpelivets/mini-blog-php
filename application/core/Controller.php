<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 9:36
 */

abstract class Controller
{
    protected $view;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    public function model($model)
    {
        require_once '../application/models/' . $model . '.php';
        return new $model();
    }
}