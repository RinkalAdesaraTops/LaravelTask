<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Products</title>
  <style>
    form{
        display: inline;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('products.index') }}>CRUD Products</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('products.create') }}>Add Product</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
        <h3>All Products List</h3>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $pr)
              <tr>
                <th scope="row">{{$pr->id}}</th>
                <td><img src="upload/{{$pr->image}}" height="30px" width="50px"/></td>
                <td>{{$pr->name}}</td>
                <td>{{$pr->price}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href={{ route('products.edit', $pr->id) }}>Edit</a>
                    <form action="{{ route('products.destroy', $pr->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                </td>
              </tr>
                @endforeach
            </tbody>
          </table>
    </div>
  </div>

</body>
</html>
