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
    }

    /**
     * Method show articles
     */
    public function index()
    {
        $model = $this->model("Home");
        $data = [];
        $data['popular_articles'] = $model->getPopularArticles();
        $data['arr_news'] = $model->getArticles();
        $this->view->render_view('home_view.php', null, $data);
    }

    /**
     * Method create article
     */
    public function create()
    {
        $model = $this->model("Home");
        if (isset($_POST['user_name']) && isset($_POST['title']) && isset($_POST['article'])) {
            $model->addArticle(strip_tags($_POST['user_name']), strip_tags($_POST['title']), strip_tags($_POST['article']));
        }
        header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home');
    }

    /**
     * Method details article
     */
    public function details($id)
    {
        $model = $this->model("Home");
        if ($id) {
            $data = $model->getArticle($id);
            if ($data) {
                $data['popular_articles'] = $model->getPopularArticles();
                $this->view->render_view('details_article.php', null, $data);
            } else {
                header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/');
            }
        } else {
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/');
        }
    }
}