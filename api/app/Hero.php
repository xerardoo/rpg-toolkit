<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/2/2019
 * Time: 12:10 AM
 */

namespace App;

class Hero extends Characters
{
    public static function all(string $search = '', int $limit = 100, $offset = 0)
    {
        return parent::getAll(parent::HERO, $search, $limit, $offset);
    }

    public static function count(string $search = '')
    {
        return parent::countAll(parent::HERO, $search);
    }

}