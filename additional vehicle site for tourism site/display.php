<?php
require_once 'dbcon.php';
?>

 
<?php
/*
$sql="desc info_table ";
$result = mysqli_query($sql) or die("Bad Querry inserted :$sql");

echo"<table border='1'>";
<echo"<tr> <td>model_id</td><td>reg_name </td><td>upl_file</td>mdl_info</tr>";

while ($row =mysqli_fetch_assoc($result) ) {
	
	<echo"<tr> <td>$row['model_id']</td><td>$row['reg_name'] </td><td>$row['upl_file']</td><td>$row['mdl_info']</td></tr>";
}
echo"</table>";
*/
$sql = "SELECT  model_id,reg_name,upl_file,mdl_info FROM info_table";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["model_id"]. " - Name: " . $row["name1"]. " " . $row["info"]. "<br>".$sql['upl_file'];
    }
} else {
    echo "0 results";
}


echo GET_['upl_file'];

 
?>

