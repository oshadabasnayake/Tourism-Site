<?php
include_once "dbcon.php";
?>

<?php
        //insert
        
                
        date_default_timezone_set("Asia/Colombo");
        
        $model_id=$_POST["model_id"];
        $reg_name=$_POST["name1"];
        $upl_file=$_POST["upload_file"];
        $mdl_info=$_POST["info"];
        
       
	
	

        $con= mysqli_connect($server,$uname,$pw,$dbname);

         $sql="INSERT INTO info_table (model_id,reg_name,upl_file,mdl_info) VALUES ('$model_id','$reg_name','$upl_file','mdl_info')";
	
	
         if(mysqli_query($con,$sql))
         {
             echo"New Record Entered Succesfully";
         }
         else
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
     
     
         mysqli_close($con);
     ?>

<?php



?>