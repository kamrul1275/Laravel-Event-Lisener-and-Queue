<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>event and lisener!</title>
  </head>
  <body>
    
<div class="container">

    <h2>Laravel Event & Lisener</h2>

    <div class="row">
<div class="col-md-5">
  
@if (Session::has('success'))
<h4 class="text-success">{{ Session::get('success')}}</h4>
  
@endif



    <form action="{{url('/email/store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>



</div>
<div class="col-md-7"></div>

    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>