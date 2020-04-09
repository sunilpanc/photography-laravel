<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('weddingimage/menu.css') }}">
  <script src="{{ asset('weddingimage/menu.js') }}"></script>
  

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background: #000046; 
background: -webkit-linear-gradient(to right, #1CB5E0, #000046); 
background: linear-gradient(to right, #1CB5E0, #000046); 
">
@extends('footer')
@extends('navbar')

@section('nav_content')
<div class="container" style="width:55%">
<!-- Material form register -->

<div style="margin:60px auto;" class="card">

    <h5 class="card-header bg-info text-center py-4">
        <strong><h1>Sign up</h1></strong>
    </h5>

    @if(count($errors)>0)
    <div>
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    </div>
    @endif
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="/insertuser" method="POST">
        @csrf
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="fname" placeholder="first name" class="form-control">
                
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" name="lname" placeholder="last name" class="form-control">
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" name="email" placeholder="email" class="form-control">
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" placeholder="password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
            
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters
                </small>
            </div>

         
            <!-- Sign up button -->
            <button name="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Social register -->
         
            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="#" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
</div>
@endsection
</body>
</html>