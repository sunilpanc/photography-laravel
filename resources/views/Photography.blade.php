<html>
<head>
<title>Ankit Photography</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/navbar2.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('modelingimage/menu.css') }}">
  <script src="{{ asset('modelingimage/menu.js') }}"></script>
  <!--script src="Sample.js"></script>-->
</head>
<body class="booking">

@extends('footer')
@extends('navbar')
@section('nav_content')
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="booking-cta">
<h1>Book your order today</h1>
<p>We Believe in giving our best.That's Why we are best</p>
</div>
</div>
<div class="col-md-7 col-md-offset-1">
<form action="/Booking" method="POST">
	@csrf
<div class="form-group">
<div class="radio">
<label class="radio-inline" >
<input type="radio" name="opt" value="Fashion Shoot" checked>
<span>Fashion Shoot</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="Wedding">
<span>Wedding</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="PreWedding">
<span>PreWedding</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="Baby-Shoot">
<span>Baby Shoot</span>
</label> 
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Name</span>
<input class="form-control" type="text" name="name" placeholder="Enter Your Name" value="">
</div>
<div><h5 style="color:red">@error('name'){{$message}} @enderror</h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Email</span>
<input class="form-control" type="text" name="email" placeholder="Enter Your Email" value="">
</div>
<div><h5 style="color:red">@error('email'){{$message}} @enderror</h5></div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Mobile No</span>
<input class="form-control" type="Telephone" name="Mobile" placeholder="Enter your Mobile Number" value="">
</div>
<div><h5 style="color:red">@error('Mobile'){{$message}} @enderror</h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Reference No</span>
<input class="form-control" type="Telephone" name="Reference" placeholder="Enter Your Reference Number" value="">
</div>
<div><h5 style="color:red">@error('Reference'){{$message}} @enderror</h5></div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Home Address</span>
<input class="form-control" type="Address" name="Home" placeholder="Enter  Address" value="">
</div>
<div><h5 style="color:red">@error('Home'){{$message}} @enderror</h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Venue Address</span>
<input class="form-control" type="Address" name="Venue" placeholder="Enter Venue Address" value="">
</div>
<div><h5 style="color:red">@error('Venue'){{$message}} @enderror</h5></div>
</div>
</div>
<div class="row">    
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Other</span>
<input class="form-control" type="Address" name="Others" placeholder="Enter Your Shoot type" value="">
</div>
<div><h5 style="color:red">@error('Others'){{$message}} @enderror</h5></div>
</div> 
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Date</span>
<input class="form-control" type="Date" name="date" placeholder="Enter Date" value="">
</div>
<div><h5 style="color:red">@error('date'){{$message}} @enderror</h5></div>
</div>
</div>
<div class="row">
<div class="container1">
  <button class="pack" name="submit">Submit</button>
  <div class="overlay">
      <div class="text"><button type="Submit" class="button1" name="submit">Submit</button></div>
  </div>
</div>
</div>    
</form>
</div>
</div>
</div>  
<br><br><br><br>
@endsection  
</body>
</html>