<?php

namespace App\Http\Controllers;

use App\Models\FormTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\FormTableRequest;
use Illuminate\Support\Facades\Storage;

class FormTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function general()
    {
        $formTables = FormTable::all();
        return view('Backend.Container.forms.general')->with('formTables' , $formTables);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Container.forms.general');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormTableRequest $request)
    {
        //   dd($request->all());
        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'link'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ]);  
        $path = "";
        if($request->hasFile('image')){
            $path = $request->file('image')->store('category/subcategory');
        }

        $requestData = FormTable::create([

            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'link' => $request->get('link'),
            'description' => $request->get('description'),
            'image' => $path,
        ]);

         return redirect('/forms/general')->with('SUCCESS_MASSAGE',' Created sucessfully!');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(FormTable $formTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
        $formTables = FormTable::where('id',$id)->first();
        return view('Backend.Container.forms.editors',['formTables' => $formTables]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormTableRequest $request, FormTable $formTable)
    {       
        $formTable->title = $request->get('title');
        $formTable->subtitle = $request->get('subtitle');
        $formTable->link = $request->get('link');
        $formTable->description = $request->get('description');
        

        if($request->hasFile('image')){
            $imageName = $formTable->image;
            if(Storage::exists($imageName))
            {
               Storage::delete($imageName);           
            }
            $formTable->image = $request->file('image')
            ->store('category/subcategory');
        }
        $formTable->update();
        return redirect('/forms/general');
           
        // $formTable->update();
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(FormTable $formTable)
    {
        

         $imageName = $formTable->image;
        // dd($imageName);
        if(Storage::exists($imageName))
        {
           Storage::delete($imageName);           
        }
        $formTable->delete();     
        return redirect('/forms/general');
    }
}
