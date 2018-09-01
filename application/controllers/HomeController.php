<?php

/**
 * Class HomeControllers
 */
class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Home();
    }

    /**
     *
     */
    public function view()
    {
        $arr_news = $this->model->getAllNews();
        $this->view->render_view('home_view.php', null, $arr_news);
    }
}