<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 02.09.2018
 * Time: 10:35
 */

class AboutController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Method show page about
     */
    public function view()
    {
        $this->view->render_view('about_view.php', null, null);
    }
}