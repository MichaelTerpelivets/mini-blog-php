<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 03.09.2018
 * Time: 9:55
 */

class Contact extends Model
{
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