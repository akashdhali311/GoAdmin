
@extends('Backend.layouts.app')
@section('content')
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-md-5">           
            <div class="card card-primary">             
              <div class="card-header">               
                <h3 class="card-title">Quick Example</h3>               
              </div>
              <form action="{{route('generalupdate', $formTables->id)}}" method="POST" enctype="multipart/form-data">
                {!! @csrf_field() !!} 
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$formTables->title}}" id="" placeholder="Title">
                    @if ($errors->has('title'))
                      
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                      
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $formTables->subtitle}}" id="" placeholder="Subtitle">
                    @if ($errors->has('subtitle'))
                      
                    <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                      
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">Link</label>
                    <input type="link" name="link" class="form-control" value="{{$formTables->link }}" id="" placeholder="Link">
                    @if ($errors->has('link'))
                      
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                      
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="description" name="description" class="form-control"  rows="7" id="" placeholder="Description"> {{$formTables->description }} </textarea>
                    @if ($errors->has('description'))
                      
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                      
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" id="file" accept="image/*" class="form-control" value="{{ $formTables->image }}">
                        @if ($errors->has('file'))
                      
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                      
                    @endif
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button  type="submit" class="btn btn-primary">Submit</button> 
                </div>
              </form>
            </div>
          </div>       
        </div>
      </div>
         
   
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
@endsection

