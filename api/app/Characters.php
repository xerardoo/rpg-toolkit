<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/1/2019
 * Time: 10:27 PM
 */

namespace App;

use Illuminate\Support\Facades\DB;

class Characters
{
    const HERO = 1, MONSTER = 2;

    public static function getAll(int $type, string $search = '', int $limit = 100, $offset = 0)
    {
        return DB::table("characters")
            ->whereRaw("(lastname LIKE '?%' OR firstname LIKE '?%') AND `type`=?", [$search, $search, $type])
            ->limit($limit)->offset($offset)->get();
    }

    public static function countAll(int $type, string $search = '')
    {
        return DB::table("characters")
            ->whereRaw("(lastname LIKE '?%' OR firstname LIKE '?%') AND `type`=?", [$search, $search, $type])->count();
    }
}
