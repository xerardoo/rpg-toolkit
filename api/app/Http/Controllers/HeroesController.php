<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/1/2019
 * Time: 10:25 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroesController extends Controller
{
    public function index(Request $req)
    {
        $search = $req->get('search', '');
        $limit = $req->get('limit', 100);
        $offset = $req->get('offset', 0);

        $heroes = Hero::all($search, $limit, $offset);
        $total = Hero::count($search);

        return response()->json(['rows' => $heroes, 'total' => $total], 200);
    }

    public function store(Request $request)
    {

    }


}