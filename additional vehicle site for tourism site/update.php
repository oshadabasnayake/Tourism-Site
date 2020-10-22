<?php
include_once 'dbcon.php';
?>
 
<?php

$sql = "UPDATE info_table SET reg_name = '".$_GET['name1']."' WHERE model_id ='".$_GET['model_id']."' ";

 

if ($con->query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>