<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/2/2019
 * Time: 12:10 AM
 */

namespace App;

use Illuminate\Support\Facades\DB;

class Hero extends Characters
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
    ];

    protected $hidden = [
        'type',
        'picturesid',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the race associated with the hero.
     */
    public function race()
    {
        return $this->hasOne('App\Races', 'foreign_key', 'racesid');
    }

    /**
     * Get the race associated with the hero.
     */
    public function weapon()
    {
        return $this->hasOne('App\Weapons', 'foreign_key', 'weaponsid');
    }

    /**
     * Get the class associated with the hero.
     */
    public function clas()
    {
        return $this->hasOne('App\Classes', 'foreign_key', 'classesid');
    }

    /**
     * Get stats associated with the hero.
     */
    public function stats()
    {
        //TODO
    }

    public static function getTotal()
    {
        return self::where('type', '=', self::HERO)->count();
    }

    public static function getPopularRace()
    {
        $result = DB::table('characters')->select(DB::raw('`races`.`name`,COUNT(*)as total'))
            ->where('characters.type', '=', self::HERO)
            ->join('races', 'races.id', '=', 'characters.racesid')
            ->groupBy('characters.racesid')->orderBy('total', 'DESC')->limit(1)->first();

        if (is_null($result)) $result = (object)['name' => '', 'total' => 0];
        return $result;
    }

    public static function getPopularClass()
    {
        $result = DB::table('characters')->select(DB::raw('`classes`.`name`,COUNT(*)as total'))
            ->where('characters.type', '=', self::HERO)
            ->join('classes', 'classes.id', '=', 'characters.classesid')
            ->groupBy('characters.classesid')->orderBy('total', 'DESC')->limit(1)->first();

        if (is_null($result)) $result = (object)['name' => '', 'total' => 0];
        return $result;
    }

    public static function getPopularWeapons()
    {
        $result = DB::table('characters')->select(DB::raw('`weapons`.`name`,COUNT(*)as total'))
            ->where('characters.type', '=', self::HERO)
            ->join('weapons', 'weapons.id', '=', 'characters.weaponsid')
            ->groupBy('characters.weaponsid')->orderBy('total', 'DESC')->limit(1)->first();

        if (is_null($result)) $result = (object)['name' => '', 'total' => 0];
        return $result;
    }
}