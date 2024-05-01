<!DOCTYPE html>
<html>
<?php include ("BB_Connection.php"); ?>
<?php
    session_start();
    if(($_SESSION['role'] !="u"))
    {
        echo "You are trying to access a BAD Page. <a href='index.php' >Login Again</a> ";
        session_destroy();
        header('location: index.php');
    }
    else {   
        $uid = $_SESSION['uid'];    
?>      
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Blockbuster Online</title>
  <link rel="stylesheet" href="css/gamepage.css" />
  <?php include ("BB_Connection.php"); ?>
</head>

<body>
  <header>
    <center>
			<a href="main.php">
        <img src="images/blockbuster.png" alt="Logo" width="212" height = "141">
			</a>
    </center>
  </header>

    <div class="container">
    <div class="product-details">
    <p class="product-description">

    <body>
    <?php     
      $sql_product = "SELECT * FROM user_info WHERE username = '$uid'";
      $result_product = $connect -> query($sql_product);
      $row = mysqli_fetch_assoc($result_product);
      $name = $row['username']; ?>
      <h2 class="product-title"> Username: <?php echo $name ?></h2>

    <?php
      $password = $row['u_password']; ?>
      <h2 class="product-title"> Password: <?php echo $password ?></p>

    <?php
      $dob = $row['dob']; ?>
      <h2 class="product-description"> DOB: <?php echo $dob ?></p>

    <?php
      $email = $row['email']; ?>
      <h2 class="product-description"> Email: <?php echo $email ?></p>

    <?php
      $card_info = $row['card_info']; ?>
      <h2 class="product-description"> Card Info: <?php echo $card_info ?></p>

    
    </body>
    
    </div>
  </div>
</body>
</html>
<?php } ?>