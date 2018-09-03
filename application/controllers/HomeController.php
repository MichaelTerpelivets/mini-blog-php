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
        $data['popular_articles'] = $this->model->getPopularArticles();
        $data['arr_news'] = $this->model->getArticles();
        $this->view->render_view('home_view.php', null, $data);
    }

    /**
     * Method create article
     */
    public function create()
    {
        if (isset($_POST['user_name']) && isset($_POST['title']) && isset($_POST['article'])) {
            $this->model->addArticle(strip_tags($_POST['user_name']), strip_tags($_POST['title']), strip_tags($_POST['article']));
        }
        header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home');
    }

    /**
     * Method details article
     */
    public function details()
    {
        if ($_REQUEST['id']) {
            $data = $this->model->getArticle($_REQUEST['id']);
            if ($data) {
                $data['popular_articles'] = $this->model->getPopularArticles();
                $this->view->render_view('details_article.php', null, $data);
            } else {
                header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/');
            }
        } else {
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/');
        }
    }
}