<?php
include_once 'dbcon.php';
?>

<?php

         
                
        $rec=$_POST["model_id"];
    
	

        $con= mysqli_connect($server,$uname,$pw,$dbname);


         $sql="DELETE FROM info_table WHERE model_id='$rec'";  //model_id will be delete with whole record-oscuro

	
	
         if(mysqli_query($con,$sql))
         {
             echo"Post Deleted Succesfully";
         }
         else
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
     
        
     
         mysqli_close($con);

         
     ?>