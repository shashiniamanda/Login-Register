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
	<title>Sign up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="header">
	<h2>welcome ABC (PVT)</h2>
</div>
<div class="container">
        <div class="wrapper">
            
            <div class="form-container signup">
                <h3>Enter Employee Details</h3>
                <form action="project.php" class="form">
                    <form action="project.php" method="post" class="form">
                        <input type="text" name="fname" placeholder="Lastname">
                        <input type="text" name="lname" placeholder="Firstname">
                        <input type="text" name="email" placeholder="Email address">
                        <input type="text" name="cnumber" placeholder="Contact Number">
                        <input type="submit" name="submit" value="send">
                        <button><a href="view.php">View Details &nbsp; </a></button>
                </form>
                </form>
                <p>Already have enter? <a class="navigate-btn" href="view.php">Check details</a></p>
                
            </div>
        </div>
    </div>
	
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
    <div >
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a  href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    </div>
</div>

</body>
</html>