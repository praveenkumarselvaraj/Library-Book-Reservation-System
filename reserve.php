<?php include("DBConnection.php");
$isbn=$_POST['submit'];
   $query = "UPDATE book SET reserve='booked'  where isbn = '$isbn'"; 
   
    $result = mysqli_query($db,$query);
    if($result>0)
        echo "Successfully Register";

?>