<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/4/2019
 * Time: 11:03 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abilities extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];
}