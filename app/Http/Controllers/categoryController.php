<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{

    public function index()
    {

        $categories=category::paginate(4);
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
        return view('Category.Edit',['updateditem' => $updateditem]);
    }

    public function update(Request $request,$id)
    {
        $updateditem=category::find($id);
        $updateditem->category_name=$request->UpdatedCatName;
        $updateditem->save();
        return redirect()->route('listOfCategories')
            ->with('success', 'Record updated successfully.');
    }

    public function delete($id)
    {
        $item=category::find($id);
        $item->delete();
        return Redirect('categories');
    }
}
