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
	Welcome to my project page	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<h3>Select Your Field:-</h3>
  	<p>
  		Comunication Skill: &#160<a href="comm.php">click here</a>
  	</p><br>
      <p>
  		IT/Software: &#160<a href="it.php">click here</a>
  	</p><br>
      <p>
  		Buisness: &#160<a href="buisness.php">click here</a>
  	</p><br>
      <p>
  		Aptitude: &#160<a href="apti.php">click here</a>
  	</p><br>
      <p>
  		Upsc/Mpsc: &#160<a href="upmp.php">click here</a>
  	</p><br>
      <p>
  		Coding Language: &#160<a href="code.php">click here</a>
  	</p><br>
      <p>
  		Cyber Security: &#160<a href="cyber.php">click here</a>
  	</p><br>
      <p>
  		CET/NEET/JEE: &#160<a href="cnj.php">click here</a>
  	</p><br>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>