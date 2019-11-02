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
}