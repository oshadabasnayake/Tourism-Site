
<?php
include_once 'dbcon.php';
?>
 
<!DOCTYPE html>
<!--oscuro nayakenz craetions-->
<html lang="en">
	<head>

		<title>Oscuro</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--1-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, viewport-fit=cover"><!--webkit-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/><!--2-->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"><!--webkit-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<!--###-->
		<!--meta http-equiv="refresh" content="1"-->
		<!--###-->
		<link rel="shortcut icon" type="favicon/x-icon/png/jpg/JPEG" href="2.jpg">
		<link rel="stylesheet" type="text/css" href="index.css">
    
		 
		<!--boots1-->

		<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"-->
		<!--script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script-->
		<!--nayakenzjquerryoscuro-->
		<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
		<!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script-->
		<!--nayakenzfontawesomeoscuro
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"-->

		
		<!--boots2-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   		 <!--oscurofontawravanz-->
   		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

       <style type="text/css">
         
         .foot{
  
background: linear-gradient(to right,black,red,black);
  height: 45px;
  text-align: center;
  
}
       </style>

</head>	 

<body >
	<a href="index.php"><div id="a1">OSCURO</div></a>	
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
    <a class="navbar-brand" href="index.php"><img alt="oscuro icon" src="2.jpg" id="image1" class="rounded mx-auto d-block" ></a><!--image-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="https://www.google.com/">Google</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="navigation" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="false">
            Admin 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="logo.php">Our Logo</a>
            <a class="dropdown-item" href="slideshow.php">Slide Show</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="c panel.php">| Command Center |</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled" href="members.php">Members</a>
        </li>
      </ul>
       
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button href="index.php" class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
  </nav>
  
<div> <center><img src="2.jpg"></center></div>
 

 <div class="navbar" style="color: white;"><marquee direction="Right" behavior="alternate" scrollamount="20"><h3>Oscuro Logo</h3></marquee></div>
  <div  class="foot" ><h6 style=" color: black;"><a href="index.php">Oscuro©</a></h6></div>
   

	</body>

</html>

 