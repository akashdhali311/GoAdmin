<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dataTables(){
         return view('Backend.Container.Tables.category.dataTables');
    }
}
