<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    public function index($id)
    {
        $gamesByCategory = DB::select('SELECT * FROM games WHERE catg_id = ?', [$id]);
        return view('Games.index', [
            'listOfGames' => $gamesByCategory,
        ]);
    }
    public function create()
    {
        return view('Games.Add');
    }
    public function store(Request $request)
    {
        $games=new game();
        $games->game_name=$request->gameName;
        $games->release_date=$request->releaseDate;

        $games->save();
        return redirect('/games');
    }
}
