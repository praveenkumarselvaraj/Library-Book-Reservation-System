<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="header1" >
      
      </div>
  	<?php endif ?>

   
    <?php  if (isset($_SESSION['username'])) : ?>
    	<div class="header1">
            <div class="header2"><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></div>
  
    <a href="SearchBooks.php"> <input type="submit" value="searchbook" class="btn1" ></a><br>
     <a href="index.php?logout='1'" ><input type="submit" value="logout" class="btn0"></a></div>
    <?php endif ?>
</div>
		
</body>
</html>