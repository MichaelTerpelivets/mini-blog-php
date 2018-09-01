<?php

/**
 * Class HomeControllers
 */
class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->model = new Home();
    }

    /**
     *Method show articles
     */
    public function view()
    {
        $arr_news = $this->model->getArticles();
        $this->view->render_view('home/home_view.php', null, $arr_news);
    }

    /**
     * Method create article
     */
    public function create()
    {
        $this->model->addArticle(strip_tags(filter_input(INPUT_POST, 'user_name')), strip_tags(filter_input(INPUT_POST, 'title')), strip_tags(filter_input(INPUT_POST, 'article')));
        header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home');
    }
}