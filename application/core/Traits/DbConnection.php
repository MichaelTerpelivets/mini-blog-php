<?php
/**
 * Created by PhpStorm.
 * User: Michael Terpelyvets
 * Date: 01.09.2018
 * Time: 14:31
 */

trait DbConnection
{
    protected $db;

    /**
     * Db connecting
     */
    protected function db_connect()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->db->query("SET CHARSET utf8");
    }
}