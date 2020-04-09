<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
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
{{
  
  Session::reflash()
}}
<form action="/insertcontact" method="POST">
@csrf  
<section class="container my-5" style="padding-top: 80px">
  <div class="card">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body form">
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>
              @if(count($errors)>0)
              @foreach($errors->all() as $error)
              <div class="alert alert-danger">{{$error}}</div>
              @endforeach
              @endif  
            <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name">
                <label for="name" class="">Your name</label>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" class="form-control" name="email" placeholder="Enter Your Email">
                <label for="email" class="">Your email</label>
              </div>
            </div>
            </div>
         
            <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter Your Subject">
                <label for="Subject" class="">Subject</label>
              </div>
            </div>
            </div>
        
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <textarea id="message" class="form-control md-textarea" rows="3" name="message" placeholder="Enter Your Message"></textarea>
                  <label for="message">Your message</label><br>
                  <button name="submit" class="btn btn-outline-info btn-rounded my-4 waves-effect z-depth-0" type="submit">Submit</button>
                </div>
              </div>
            </div>
         

        </div>

      </div>
     
      <div class="col-lg-4" style="color:#fff; background-color: #0061B0;">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>Madhya Pradesh, 457001, INDIA</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>7435977621</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>Kushwahavicky743@gmail.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/ankitphotography_/" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://m.facebook.com/Ankit-AP-Photography-1238841922837251/" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      

    </div>
   

  </div>
  

</section>
@endsection
</form>
</body>

</html>