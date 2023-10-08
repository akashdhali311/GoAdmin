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
        <div class="text-right">
            {{-- <a href="{{route('')}}" class="btn btn-dark mt-2">New Products</a> --}}
            <a href="{{route('dashboard')}}" class="btn btn-dark mt-2">Dashboard</a>
        </div>
        <h1>Home Setting</h1>
        <table class="table table-bordered table-striped table-hover">
          <thead class="bg-primary text-dark">
            <tr>
              
              <th>Title</th>
              <th>Subtitle</th>
              <th>Link</th>
              <th>Description</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              
              <td>{{ $product->title }}</td>
              <td>{{ $product->subtitle }}</td>
              <td>{{ $product->link }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->image }}</td>
              <td>
                <a href="{{route('productedit', $product->id)}}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{route('productdelete', $product->id)}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
    
     </div>
</body>
</html>