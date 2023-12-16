<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{

    public function index()
    {

        $categories=category::all();
        return view('Category.index',
        [
                'categories'=>$categories
        ] );
    }
    public function create()
    {
        return view('Category.Add');
    }
    public function store(Request $request)
    {
        $catg = new category();
        $catg->category_name = $request->CatName;
        $catg->save();
        return Redirect('categories');
    }
    public function edit($id)
    {
        $updateditem=category::find($id);
        return view('Category.Edit');
    }
    public function update(Request $request)
    {

    }
    public function delete($id)
    {
        $item=category::find($id);
        $item->delete();
        return Redirect('categories');
    }
}
