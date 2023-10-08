<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function simpletable()
    {
        $categoris = Category::all();

        return view('Backend.Container.Tables.simpletable',['categoris' => $categoris]);
    }

    public function created()
    {
        return view('Backend.Container.Tables.category.new');
    }
    public function stored(Request $request)
    {
        // $request->validated([
        //     'title' => 'required|unique:Category,column,max:200'
        // ]);



        $category = new Category;

        $category->title = $request->title;

        $category->save();

        return redirect('table/simpletable');

    }
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();

        return view('Backend.Container.Tables.category.edit',['category' => $category]);
        

    }
    public function update(Request $request , $id)
    {
        $category = Category::where('id',$id)->first();

        $category->title = $request->title;

        $category->save();

        return redirect('table/simpletable');

    }
    public function delete($id)
    {
        $category = Category::where('id',$id)->first();

        $category->delete();

        return redirect('table/simpletable');

    }
}
