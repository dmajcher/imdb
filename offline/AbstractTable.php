<?php

/**
 * Created by PhpStorm.
 * User: tich
 * Date: 5/10/17
 * Time: 11:48 AM
 */
class AbstractTable
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}