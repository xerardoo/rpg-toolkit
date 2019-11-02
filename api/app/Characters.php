<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/1/2019
 * Time: 10:27 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Characters extends Model
{
    use SoftDeletes;

    const HERO = 1, MONSTER = 2;

    protected $dates = ['deleted_at'];
}
