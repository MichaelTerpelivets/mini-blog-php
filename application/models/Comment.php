<?php


/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 10:24
 */
class Comment extends Model
{
    /**
     * @param string $comment
     * @param string $username
     * @param $article_id
     */
    public function addComment(string $comment, string $username, $article_id)
    {
        $date = date("Y-m-d H:i:s");
        $this->link->query("INSERT INTO `comments` (`id`, `comment`, `user_name`, `date`, `article_id`) VALUES (NULL,'$comment','$username','$date','$article_id')");
    }

}