<!DOCTYPE html>
<html>
<?php
    session_start();
    if(($_SESSION['role'] !="u"))
    {
        echo "You are trying to access a BAD Page. <a href='index.php' >Login Again</a> ";
        session_destroy();
        header('location: index.php');
    }
    else {       
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
     Founded in 2023, Blockbuster Online is a labor of love aimed at reviving the nostalgic charm of the original small media rental stores that were once beloved fixtures in communities. Specializing in video games, our extensive inventory spans several popular genres, ensuring there's something for every gamer's taste.

At our store, we not only offer great rental prices but also the option to purchase a game and keep it forever, catering to both casual players and serious enthusiasts. Our commitment to customer satisfaction is paramount, and we strive to provide a seamless shopping experience with a user-friendly interface and excellent customer service.

Whether you're a fan of action, adventure, RPGs, or simulation games, we have you covered. Our team is constantly updating our selection to include the latest releases as well as timeless classics, so you'll always find something new and exciting to play.

We invite you to explore our store and rediscover the joy of browsing for games. Thank you for choosing us as your gaming destination. We look forward to serving you and welcoming you back for all your gaming needs.
    </div>
  </div>
</body>
</html>
<?php } ?>