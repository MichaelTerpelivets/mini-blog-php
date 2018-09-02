<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 18:39
 */

class CommentController extends Controller
{
    /**
     * CommentController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->model = new Comment();
    }

    /**
     * Method add new comment
     */
    public function add()
    {
        if ($article_id = strip_tags(filter_input(INPUT_POST, 'article_id'))) {
            $this->model->addComment(strip_tags(filter_input(INPUT_POST, 'comment')),
                strip_tags(filter_input(INPUT_POST, 'username')), $article_id);
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home/details/id/' . $article_id);
        } else {
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST']);
        }
    }
}