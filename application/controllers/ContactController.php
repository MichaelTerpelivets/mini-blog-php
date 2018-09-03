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
        $this->model = new Contact();
    }

    /**
     * Method show page contact
     */
    public function view()
    {
        $data['popular_articles'] = $this->model->getPopularArticles();
        $this->view->render_view('contact_view.php', null, $data);
    }
}