<?php

namespace App\Http\Controllers;

use App\Models\FormTable;
use Illuminate\Http\Request;
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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('app/public/photos'),$imageName);

        $formtable = new FormTable;
        $formtable->title = $request->title;
        $formtable->subtitle = $request->subtitle;
        $formtable->link = $request->link;
        $formtable->description = $request->description;
        $formtable->image = $imageName;
        $formtable->save();


        
        // $requestData =$request->all();
        // $imageName =time().$request->file('image')->getClientOriginalName();
        // $path =$request->file('image')->storeAs('images' , $imageName ,'public');     
        // $requestData["image"] = $path;
        //  $requestData = ['title'=>$request->title,'subtitle'=>$request->subtitle,'link'=>$request->link,'description'=>$request->description,'image'=>$imageName];

        //  FormTable::create($requestData);

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

        $formTables->title = $request->title;
        $formTables->subtitle = $request->subtitle;
        $formTables->link = $request->link;
        $formTables->description = $request->description;
        $formTables->image = $request->image;

        $formTables->save();

        return redirect('/forms/general');

    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function delete( $id)
    {
        $formTable = FormTable::where('id',$id)->first();

        $formTable->delete();

        return redirect('/forms/general');
    }
}
