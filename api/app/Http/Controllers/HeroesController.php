<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/1/2019
 * Time: 10:25 PM
 */

namespace App\Http\Controllers;

use App\Classes;
use App\Races;
use App\Weapons;
use Illuminate\Http\Request;
use App\Hero;

class HeroesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $limit = $request->get('limit', 100);
        $offset = $request->get('offset', 0);

        $heroes = Hero::where('lastname', 'LIKE', "$search%")->where('firstname', 'LIKE', "$search%")
            ->limit($limit)->offset($offset)->get();
        $total = Hero::where('lastname', 'LIKE', "$search%")->where('firstname', 'LIKE', "$search%")->count();

        return response()->json(['rows' => $heroes, 'total' => $total], 200);
    }

    public function show(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        return response()->json($hero, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required'
        ]);

        $hero = new Hero([
            'type' => Hero::HERO,
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'level' => 1, // initial level for all heroes
            'racesid' => $request->get('racesid'),
            'classesid' => $request->get('classesid'),
            'weaponsid' => $request->get('weaponsid')
        ]);
        $hero->saveOrFail();

        return response()->json($hero, 201);
    }

    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);
        $this->validate($request, [
            'firstname' => 'required'
        ]);

        $hero->firstname = $request->get('firstname');
        $hero->lastname = $request->get('lastname');
        $hero->racesid = $request->get('racesid');
        $hero->classesid = $request->get('classesid');
        $hero->weaponsid = $request->get('weaponsid');
        $hero->saveOrFail();

        return response()->json($hero, 200);
    }

    public function destroy($id, Request $request)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();

        return response()->json(['msg' => 'Heroe Deleted'], 200);
    }

    public function getRaces()
    {
        $races = Races::where('type', '=', "1")->get();
        return response()->json($races, 200);
    }

    public function getClasses()
    {
        $classes = Classes::all();
        return response()->json($classes, 200);
    }

    public function getWeapons()
    {
        $weapons = Weapons::all();
        return response()->json($weapons, 200);
    }


}