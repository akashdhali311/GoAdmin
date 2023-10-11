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
        // $path="";
        // if($request->hasFile('image')){
        //     $path = $request->file('image')->store('app/public/photos');
        // }
        $imageName = "";
        if($request->image){
            $imageName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(storage_path('app/public/category/subcategory/'),$imageName);
        }
        
        
        $requestData = ['title'=>$request->title,'subtitle'=>$request->subtitle,'link'=>$request->link,'description'=>$request->description,'image'=>$imageName];

        FormTable::create($requestData);

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
    public function update(Request $request, string $id)
    {
        $formTables = FormTable::where('id',$id)->first();

        $imageName = "";
        if($request->image){
            
            $imageName = storage_path('app/public/category/subcategory/'.$formTables->image);
            if(is_file($imageName))
        {
            File::delete($imageName);           
        }
        $imageName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(storage_path('app/public/category/subcategory/'),$imageName);
        $formTables->image=$imageName;
        $formTables->update();
        }
        $requestData = ['title'=>$request->title,'subtitle'=>$request->subtitle,'link'=>$request->link,'description'=>$request->description];

        $formTables->update($requestData);

        return redirect('/forms/general');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete( $id)
    {
        $formTable = FormTable::where('id',$id)->first();

        $imageName = storage_path('app/public/category/subcategory/'.$formTable->image);

        if(is_file($imageName))
        {
            unlink($imageName);            
        }
        $formTable->delete();
        return redirect('/forms/general');
    }
}
