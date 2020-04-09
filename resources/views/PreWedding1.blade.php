<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="{{asset('css/Pre_Wedding.css')}}"/>
        <script> 
    $(document).ready(function(){
     $("#flip").click(function(){
    $("#panel").slideToggle("slow");  
  });
  $("#slice").click(function(){
    $("#Ray").slideToggle("slow");  
  });
    }
  );
</script>
<style>
#panel{
  padding: 10px;
  display: none;
  background-color:#3e485c;
}
#Ray
{
    padding:10px;
    display:none;
    background-color:#3e485c;
}
p
{
    color:white;
}
</style>
</head>
<body class="booking">
<div class="container">
<div class="row">
<div class="col-md-7 col-md-push-5">
<div class="booking-cta">
<h1>PREWEDDING</h1>
</div>
</div>
<div class="col-md-4 col-md-pull-7">
<form method="POST" action="/Success">
  @csrf
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="checkbox-inline">
    <input type="checkbox" value="Normal Shoot" name="education[]" id="flip"/><label>Normal Photoshoot</label><br>
<caption class="colors">Rs 20000</caption>
<div id="panel">
    <p>20 best Photo added</p><p>+</p><p>data</p><p>+</p><p>10 Page Album</p>.
</div>
</label>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="checkbox-inline">
    <input type="checkbox" value="cinematography" name="education[]" id="slice"/><label>Cinematography Shoot</label>.<br>
<caption class="colors">Rs 50000</caption>
<div id="Ray">
    <p>long </p><p>+</p><p>teaser</p><p>+</p><p>video</p>.
    <h6></h6>
</div>
</label>
</div>
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
</body>
</html>