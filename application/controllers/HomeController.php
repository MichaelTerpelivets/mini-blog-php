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
     * Method show articles
     */
    public function view()
    {
        $data = [];
        $arr_news = $this->model->getArticles();
        $data['arr_news'] = $arr_news;
        $this->view->render_view('home_view.php', null, $data);
    }

    /**
     * Method create article
     */
    public function create()
    {
        $this->model->addArticle(strip_tags(filter_input(INPUT_POST, 'user_name')), strip_tags(filter_input(INPUT_POST, 'title')), strip_tags(filter_input(INPUT_POST, 'Home')));
        header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home');
    }


    public function details()
    {
        if($_REQUEST['id']){
            $data = $this->model->getArticle($_REQUEST['id']);
            if($data){
                $this->view->render_view('details_article.php', null, $data);
            }
            //todo return error
        }
        //todo return error
    }
}