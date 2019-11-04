<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/2/2019
 * Time: 5:38 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    protected $hidden = [
        'type'
    ];
}