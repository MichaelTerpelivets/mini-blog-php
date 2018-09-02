<?php
include_once '../application/core/DbConnection.php';

/**
 * Base Class
 * Class Model
 */
abstract class Model
{
    /**
     * @var DbConnection
     */
    public $link;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->link = new DbConnection();
    }
}