<?php


/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 10:24
 */
class Home extends Model
{

    /**
     * Method get articles
     * @return array
     */
    public function getArticles(): array
    {
        $result = $this->link->query("SELECT *,(SELECT COUNT(comments.article_id) FROM comments WHERE articles.id = comments.article_id) as 'comments_count' FROM `articles` ORDER BY `articles`.`date` DESC;");
        return $result;
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
        $this->link->execute("INSERT INTO `articles` VALUES (NULL,'$user','$title','$article','$date')");
    }

    /**
     * Method show article
     * @param $id
     * @return array
     */
    public function getArticle($id): array
    {
        $query_article_data = "SELECT * FROM `articles` WHERE `id` = $id";
        $query_comments_data = "SELECT * FROM `comments` WHERE `article_id` = $id";
        $result ['article'] = $this->link->query($query_article_data);
        $result ['comments'] = $this->link->query($query_comments_data);
        return $result;
    }

    /**
     * Method get popular articles for slider
     * @return array|null
     */
    public function getPopularArticles()
    {
        $result = $this->link->query("SELECT *, (SELECT COUNT(comments.article_id) FROM comments WHERE articles.id=comments.article_id) as 'comments_count' FROM articles ORDER BY `comments_count` DESC LIMIT 5;");
        return $result;
    }
}