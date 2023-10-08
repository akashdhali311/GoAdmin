<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          
        </ul>
      
      </nav>
     <div class="container">
       <div class="row justify-content-center">
             <div class="col-sm-10">
              <div class="card mt-3 p-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                      <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  </div>
                  @endif
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-grup">
                      <label for="">Title</label>
                      <input type="text" name="title"  class="form-control">
                      @if ($errors->has('title'))
          
                              <p class="text-danger">{{$errors->first('title')}}</p>
          
                      @endif
                 </div>
                 <div class="form-grup">
                  <label for="">Subtitle</label>
                  <input type="text" name="subtitle"  class="form-control">
                  @if ($errors->has('subtitle'))
          
                              <p class="text-danger">{{$errors->first('subtitle')}}</p>
          
                  @endif
                 </div>
                 <div class="form-grup">
                  <label for="">Link</label>
                  <input type="link" name="link"  class="form-control">
                  @if ($errors->has('link'))
          
                              <p class="text-danger">{{$errors->first('link')}}</p>
          
                      @endif
                 </div>
                 <br>

                 <div class="form-grup">
                  <textarea class="from-control" name="description"  cols="93" rows="7" placeholder="Description"></textarea> 
                  @if ($errors->has('description'))
          
                              <p class="text-danger">{{$errors->first('description')}}</p>
          
                      @endif
                 </div> 
                 
                 

                 <div class="form-grup">
                  <label for="">Image</label>
                  <input type="file" name="image"  class="form-control">
                  @if ($errors->has('image'))
          
                              <p class="text-danger">{{$errors->first('image')}}</p>
          
                      @endif
                 </div>

                 <br>

                 <button type="submit" class=" btn btn-dark">Submit</button>
                    
                </form>
              </div>
             </div>
       </div>
    
     </div>
</body>
</html>