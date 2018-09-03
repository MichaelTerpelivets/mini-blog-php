<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 02.09.2018
 * Time: 10:36
 */

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Method show page contact
     */
    public function view()
    {
        $model = $this->model("Home");
        $data['popular_articles'] = $model->getPopularArticles();
        $this->view->render_view('contact_view.php', null, $data);
    }
}