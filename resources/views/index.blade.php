
<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
  <script src="{{ asset('css/index.js') }}"></script>
</head>

<body>

  <!--this is for navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar1 navbar-always">

      <a href="/index" class="navbar-brand"><img src="images/main-logo.png" alt="AP photography" id="w3s" width="90px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="nav-item list-1"><a href="/prewedding" class="nav-link">Pre Wedding</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-2"><a href="/wedding" class="nav-link">Wedding</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-3"><a href="/modeling" class="nav-link">Modeling</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-4"><a href="/kids" class="nav-link">Kids Shoot</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-5"><a href="/about" class="nav-link">About Us</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-6"><a href="/contactus" class="nav-link">Contact</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-7"><a href="/photography" class="nav-link">Book Now</a><div class="hover-line-1"></div></li>
          @if (session('email'))
              <li class="nav-item list-7"><a href="/logout" class="nav-link">Admin Logout</a><div class="hover-line-1"></div></li>
              @else
               <li class="nav-item list-7"><a href="/admin" class="nav-link">Admin Login</a><div class="hover-line-1"></div></li>
              @endif
           @if (session('userdata'))
              <li class="nav-item list-7"><a href="/logout" class="nav-link">Logout</a><div class="hover-line-1"></div></li>
              @else
               <li class="nav-item list-7"><a href="/createuser" class="nav-link">Sign Up</a><div class="hover-line-1"></div></li>
               <li class="nav-item list-7"><a href="/login" class="nav-link">Login</a><div class="hover-line-1"></div></li>
              @endif

      }
      </ul>
    </div>
  </nav>

  <!--slide show-->
  <div class="outside-carousel">
    <div id="demo" class="carousel slide carousel-modify" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/1.jpg" alt="pre-wedding" width="1100" height="500" />
        </div>
        <div class="carousel-item ">
          <img src="images/2.jpg" alt="pre-wedding" width="1100" height="500" />
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
  
 <!Subscribe or updates-->
 <div class="updates">	
	<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4">  
					<h4 class="sub_title">DON'T MISS OUT OUR LATEST UPDATES</h4>
					<h2 class="sec_title">SUBSCRIBERS </h2> 
				</div>	  
				<div class="col-sm-12 col-md-12 col-lg-8">
                                    <form class="form-inline" action="subscribe.php" method="POST">		
                                        <input type="email" required="kindly fill the field" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email1" class="form-control email" placeholder="Enter your email">

						  <div class="btn_box">
						  	<a href="#">
                                                            <button class="btn btn-dark btn-lg subscribe" type="submit">
								SUBSCRIBE NOW 
							</button>	
                                                       <!--     <div class="hoverlay" >
					    		<div class="text">SUBSCRIBE NOW</div>
					   		</div> -->
                                                        </a>
						  </div><div class="btn_hover"></div>	
							
						 
				</form>		
				</div>
	 
			</div>	
	</div>
</div>	
 
 
  
<!--Services-->
<div class="services">	
	<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">  
					<h4 class="service_title">SERVICES WE ARE OFFERING</h4>
					<h2 class="service_sec">WE ARE PROVIDING BEST SERVICES 
						<br>
					IN INDIA</h2> 
					<p class="service_cont">WE ARE COMMITTED TO PROVIDING OUR CUSTOMERS WITH EXCEPTIONAL SERVICE</p>  
				</div>	  
			</div>
			<div class="row service_images">
				<div class="col-sm-12 col-md-6 col-lg-3 image_1">  
                                    <a href="/prewedding">
						<div class="flip-box">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="images/service0.jpeg" alt="Paris" class="image_service">
						    </div>
						    <div class="flip-box-back">
						      <h2>Pre Wedding</h2>
						      <p>Click below to know more</p>
						      <button type="button" class="btn btn-light">More</button>
						    </div>
						  </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 image_1">  
                                    <a href="/wedding">
						<div class="flip-box">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="/images/service3.jpg" alt="Paris" class="image_service">
						    </div>
						    <div class="flip-box-back">
						      <h2>Wedding</h2>
						      <p>Click below to know more</p>
						      <button type="button" class="btn btn-light">More</button>
						    </div>
						  </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 image_1">  
                                    <a href="/modeling">
						<div class="flip-box">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="/images/service5.jpg" alt="Paris" class="image_service">
						    </div>
						    <div class="flip-box-back">
						      <h2>Modeling</h2>
						      <p>Click below to know more</p>
						      <button type="button" class="btn btn-light">MORE</button>
						    </div>
						  </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 image_1">  
                                    <a href="kids">
						<div class="flip-box">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="/images/service4.jpeg" alt="Paris" class="image_service">
						    </div>
						    <div class="flip-box-back">
						      <h2>Baby Photoshoot</h2>
						      <p>Click below to know more</p>
						      <button type="button" class="btn btn-light">More</button>
						    </div>
						  </div>
						</div>
					</a>
				</div>	  	  	  	  
			</div>		
	</div>
</div>



  
  <!--meet the expert people-->
  <div class="Team">	
	<div class="container">
		<div class="row">
				<div class="col-lg-12 text-center">  
					<h4 class="Team_title">MEET THE TEAM</h4>
					<h2 class="Team_sec">EXPERT PEOPLE</h2> 
					<p class="Team_cont">WE ARE COMMITTED TO PROVIDING OUR CUSTOMERS WITH EXCEPTIONAL SERVICE</p>  
				</div>	  
		</div>
		<div class="row team_images">
				<div class="col-sm-12 col-md-6 col-lg-3">  
					
					 <div class="slide_box"> 
					  <img src="images/teem1.jpg" alt="Avatar" class="image_slide" height="350px">
					  <div class="overlay">
                                              <a href="/about"><div class="text">Kushwaha Vikash</div></a>
					  </div>
					</div>
					
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">  
					
					<div class="slide_box">
					  <img src="images/teem2.jpg" alt="Avatar" class="image_slide" height="350px">
					  <div class="overlay">
                                              <a href="/about"><div class="text">Sunil Panchal</div></a>
					  </div>
					</div>
					
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">  
					
					 <div class="slide_box">
					  <img src="images/teem3.jpg" alt="Avatar" class="image_slide" height="350px">
					  <div class="overlay">
                                              <a href="about"><div class="text">Vikram Singh</div></a>
					  </div>
					 </div>
					
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">  
					
					 <div class="slide_box">
					  <img src="images/teem6.jpg" alt="Avatar" class="image_slide" height="350px">
					  <div class="overlay">
					      <a href="/aboutus"> <div class="text">Ankit Panchal</div></a>
					  </div>
					 </div>	
					
				</div>	  	  	  	  
			</div>		
	</div>
</div>
  
  
  
  <!--contact-->
  
  <div class="Contact">	
	<div class="container"> 
			<div class="row">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<h2 class="Contact_title">LET'S GET STARTED</h2>
				</div>	
				<div class="col-sm-12 col-md-3 col-lg-3">
					
					<div class="Contact_box">
                                            <a href="contactus.php">
							<button type="button" class="btn btn-dark btn-lg contact">
								CONTACT US 
							</button>	
							 <div class="coverlay">
					    		<div class="Contact_text">CONTACT US</div>
					   		 </div> 
					   	</a>	 
					</div>
					
				</div> 
			</div>	
	</div>
</div>		
  
  
  <div class="bottom-bar">
      <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 bottom-side-space">
        <img src="images/main-logo.png" alt="AP photography" width="90px" height="60px"/>
        <p class="bottom-bar-text">
          Welcome to our photography world. Our team foucus on quality images. We capture every moment of your life.
          Our mission is to provide best quality images. We care to our customer. We are working on how we can
          give best service and provide to best class service to our customer.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12">
          <h3 class="bottom-bar-text-h3">CONTACT<h3>
            <p class="bottom-bar-text">
               Pithampur, Sector No.3, Dhar,<br/>Madhya Pradesh, India
            </p>
            <p class="bottom-bar-text">
                M:+919977959596 <br>
                M:+917697666611
            </p>
            <p class="bottom-bar-text">
                <a href="mailto:Ankit333panchal@gmail.com" class="bottom-email" target="_blank" rel="noopener noreferrer">Email us</a>
            </p>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-12 ">
          <h3 class="bottom-bar-text-h3">Social<h3>
          <p class="bottom-bar-text">
            <i class="fa fa-instagram distance-icon"></i><a href="https://www.instagram.com/ankitphotography_/" class="bottom-email">Instagram</a><br>
            <i class="fa fa-facebook distance-icon"></i><a href="https://www.facebook.com/Ankit-AP-Photography-1238841922837251/" class="bottom-email">Facebook</a><br>
            <i class="fa fa-twitter distance-icon"></i><a href="#" class="bottom-email">Twitter</a><br>
          </p>
      </div>
      </div>

      <div class="row bottom-last">
        <div class="col-lg-12 text-center">
          <p class="copyright">
              © COPYRIGHT 2019 BY ANKITPHOTOGRAPHY.COM
          </p>
        </div>
      </div>
  </div>
</body>

</html>
