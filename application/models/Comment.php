<?php


/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 10:24
 */
class Comment extends Model
{
    use DbConnection;

    /**
     * Comment constructor.
     */
    public function __construct()
    {
        $this->db_connect();
    }

    /**
     * @param string $comment
     * @param string $username
     * @param $article_id
     */
    public function addComment(string $comment, string $username, $article_id)
    {
        $date = date("Y-m-d H:i:s");
        $query_add_comment = "INSERT INTO `comments` (`id`, `comment`, `user_name`, `date`, `article_id`) VALUES (NULL,'$comment','$username','$date','$article_id');";
        $this->db->query($query_add_comment);
    }

}