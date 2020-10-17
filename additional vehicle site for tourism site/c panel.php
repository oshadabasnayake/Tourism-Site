  <?php
include_once 'dbcon.php';
 ?>

 
<!DOCTYPE html>
<!--oscuro nayakenz craetions-->
<html lang="en">
	<head>

		<title>Oscuro | Command Center</title>

			<!--browser adjustmunt & mobile comaptible-->
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
		<link rel="stylesheet" type="text/css" href="c panel.css">
		 
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

	</head>	

	<body >

	<a href="index.php" style="color: black;"><div id="cp1"> OSCURO</div></a>
	<div id="cp2" border="1"> <h1>| Command Center |</h1> </div>
	
		<br><br><br>

	<!-- ##########-->
	<h2 id="cp3">Select Commands<br>
		<span style="font-size: 3em; color: red;">
  		<i class=" fas fa-angle-double-down"></i>
		</span>
	</h2>
	<br>
	<form action="" method="" name="" id="f1">
		<table align="center">
			<tr>
				<td><button  class="btn btn-outline-dark"><a href="insert_form.php" target="_blank"> Insert</a></button></td>
				 <!-- target is not _self,>to operate process separately oscuro-->
				<td><button class="btn btn-outline-danger"><a href="update_form.php" target="_blank"> Update</a></button></td>

				<td><button class="btn btn-outline-danger"><a href="delete_form.php"  target="_blank"> Delete</a></button></td>
				<td><button class="btn btn-outline-success"><a href="display_form.php"  target="_blank"> Display</a></button></td>
				<!--td><button class="btn btn-outline-dark"><a href="search_form.php"  target="_blank"> Search</a></button></td-->
			</tr>
		</table>
	</form>
<br><br><br><br><br><br><br><br>
		 
<div  class="foot" ><h6 style="color: black;"><a href="index.php">Oscuro©</a></h6></div>

	</body>
</html>
