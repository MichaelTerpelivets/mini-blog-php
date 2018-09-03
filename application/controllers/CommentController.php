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
    }

    /**
     * Method add new comment
     */
    public function add()
    {
        $model = $this->model('Comment');
        if ($article_id = strip_tags($_POST['article_id'])) {
            $model->addComment(strip_tags($_POST['comment']),
                strip_tags($_POST['username']), $article_id);
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/home/details/' . $article_id);
        } else {
            header('Location: ' . 'http://' . $_SERVER['HTTP_HOST']);
        }
    }
}