<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 14:31
 */

class DbConnection
{
    private $link;

    /**
     * DbConnection constructor.
     */
    public function __construct()
    {
        $this->db_connect();
    }

    /**
     * Db connecting
     */
    private function db_connect()
    {
        $dsn = "mysql:host=" . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;';
        $this->link = new PDO($dsn, DB_USER, DB_PASS);
        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false) {
            return [];
        }
        return $result;
    }
}