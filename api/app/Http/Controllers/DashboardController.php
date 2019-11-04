<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/4/2019
 * Time: 2:56 PM
 */

namespace App\Http\Controllers;


use App\Hero;

class DashboardController
{

    public function getHeroeStats()
    {
        $total = Hero::getTotal();
        $popularRace = Hero::getPopularRace();
        $popularClass = Hero::getPopularClass();
        $popularWeapons = Hero::getPopularWeapons();

        $data = [
            'count' => $total,
            'popular-race' => [
                'count' => $popularRace->total,
                'name' => $popularRace->name
            ],
            'popular-class' => [
                'count' => $popularClass->total,
                'name' => $popularClass->name
            ],
            'popular-weapon' => [
                'count' => $popularWeapons->total,
                'name' => $popularWeapons->name
            ],
        ];
        return response()->json($data, 200);
    }
}