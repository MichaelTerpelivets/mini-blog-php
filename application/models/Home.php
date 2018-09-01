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
        $query_data = "SELECT *,(SELECT COUNT(comments.article_id) FROM comments WHERE articles.id = comments.article_id) as 'comments_count' FROM `articles` ORDER BY `articles`.`date` DESC;";
        $result = $this->db->query($query_data);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    /**
     * Method add new article
     * @param string $user
     * @param string $title
     * @param string $article
     */
    public function addArticle(string $user, string $title, string $article)
    {
        $date = date("Y-m-d H:i:s");
        $query_insert = "INSERT INTO `articles` VALUES (NULL,'$user','$title','$article','$date')";
        $this->db->query($query_insert);
    }

    /**
     * Method show article
     * @param $id
     * @return array
     */
    public function getArticle($id): array
    {
        $result = [];
        $query_article_data = "SELECT * FROM `articles` WHERE `id` = $id";
        $query_comments_data = "SELECT * FROM `comments` WHERE `article_id` = $id";
        $article = $this->db->query($query_article_data);
        $comments = $this->db->query($query_comments_data);
        if ($article) {
            while ($row = $article->fetch_assoc()) {
                $result ['article'] = $row;
            }
        }
        if ($comments) {
            while ($row = $comments->fetch_assoc()) {
                $result ['comments'][] = $row;
            }
        }
        return $result;
    }
}