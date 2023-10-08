@extends('Backend.Container.Tables.category.layouts.app')
@section('content')

<div class="container pt-5">
  <h2> Edit Categorys </h2>
  <div class="row">
    <div class="col-sm-4">
      <form action="{{route('catagory-update', $category->id )}}" method="post">
        @csrf
        @method('put')
        <label for=""> Title </label>
        <input type="text" name="title" class="form-control" value="{{$category->title}}">
        <button class="btn btn-info mt-4" type="submit">Update</button>
      </form>

    </div>
  </div>
              
 
</div>
@endsection
