<?php


/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 10:24
 */
class Home extends Model
{
    use DbConnection;

    public function __construct()
    {
        $this->db_connect();
    }

    public function getArticles()
    {

    }

    public function addArticle($user, $title, $article)
    {

    }
}