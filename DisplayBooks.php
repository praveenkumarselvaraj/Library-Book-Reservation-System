<!DOCTYPE HTML>
<html>
        <link rel="stylesheet" href="style1.css">
<a href="SearchBooks.php"><img src="11949891272097570686aiga_left_arrow1.svg.hi.png" class="back"></a>
<body bgcolor="#FFA500">
<center><h2>Avaliable Books</h2></center>
<br><br>

<?php
include("DBConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select ISBN,Title,Author,Edition,Publication from book where title like '%$search%'"; 
$result = mysqli_query($db,$query);
 
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
{
?>
<form action="reserve.php" method="post" > 
<table border="1" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>   
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
<td><?php echo "<input type='submit' value='" . $row["ISBN"] . "' name='submit'>";?> </td>
</tr> 
      
<?php
}
}
?>
</table>
    </form>
</body>
</html>
