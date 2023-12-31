<?php

namespace App\Http\Controllers;

use App\Models\category;
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
            'categoryId'=>$id
        ]);
    }

    public function create($id)
    {

        return view('Games.Add',['categoryId'=>$id]);
    }

    public function store(Request $request)
    {
        $games=new game();
        $games->catg_id = $request->categoryId;
        $games->game_name=$request->gameName;
        $games->release_date=$request->releaseDate;
        $games->save();
        return redirect('/categories/'.$request->categoryId.'/games');
    }
    public function edit($id)
    {
        $id=game::find($id);
        return view('Games.Edit',
            [
                'updatedItem'=>$id
            ]
        );
    }


    public function update(Request $request,$id)
    {
        $updateditem=game::find($id);
        $updateditem->game_name=$request->gameName;
        $updateditem->release_date=$request->releaseDate;
        $updateditem->save();
        return redirect('/categories/'.$updateditem->catg_id.'/games');
    }


    public function delete($id)
    {
        $game=game::find($id);
        $game->delete();
        return back();
    }
}
