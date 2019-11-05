<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/4/2019
 * Time: 10:47 PM
 */

namespace App;

use Illuminate\Support\Facades\DB;

class Monster extends Characters
{
    protected $table = 'characters';

    protected $fillable = [
        'firstname',
        'lastname',
        'type',
        'level',
        'racesid',
        'classesid',
        'weaponsid',
        'pictureid',
    ];

    protected $hidden = [
        'type',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    /**
     * Get stats associated with the monter.
     */
    public function abilities()
    {
        return $this->hasMany('App\Abilities');
    }

    public static function getTotal()
    {
        return self::where('type', '=', self::MONSTER)->count();
    }

    public static function getPopularRace()
    {
        $result = DB::table('characters')->select(DB::raw('`races`.`name`,COUNT(*)as total'))
            ->where('characters.type', '=', self::MONSTER)
            ->join('races', 'races.id', '=', 'characters.racesid')
            ->groupBy('characters.racesid')->orderBy('total', 'DESC')->limit(1)->first();

        if (is_null($result)) $result = (object)['name' => '', 'total' => 0];
        return $result;
    }

}