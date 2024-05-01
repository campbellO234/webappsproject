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
  <?php include ("BB_Connection.php"); ?> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesrona 3 Reload - Blockbuster Online</title>
  <link rel="stylesheet" href="css/gamepage.css" />
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
    <div class="product-image">
      <img src="images/reload.jpg" alt="Product Image" width="500" height = "666">
    </div>
    <div class="product-details">
    <?php

      $sql_product = "SELECT * FROM games WHERE sid = 1";
      $result_product = $connect -> query($sql_product);
      $row = mysqli_fetch_assoc($result_product);
      $name = $row['gname']; ?>
      <h2 class="product-title"> <?php echo $name ?></h2>

    <?php
      $price = $row['Price']; ?>
      <p class="product-price">$<?php echo $price ?></p>

    <?php
      $developer = $row['Developer']; ?>
      <p class="product-description"><?php echo $developer ?></p>

    <?php
      $release = $row['Release_date']; ?>
      <p class="product-description">Released: <?php echo $release ?></p>

    <?php
      $description = $row['Description_games']; ?>
      <p class="product-description"><?php echo $description ?></p>

    <?php
      $platforms = $row['Platforms']; ?>
      <p class="product-description">Platforms: <?php echo $platforms ?></p>

      <button onclick="purchase()">Purchase</button> <button onclick="rent()">Rent</button>
    </div>
    <div class="customer-reviews">
      <h3>Customer Reviews</h3>
      <div class="review">
        <p>really good music</p>
        <p class="review-author">- drew</p>
        <p class="review-rating">★★★★★</p>
      </div>
      <div class="review">
        <p>awesome graphics</p>
        <p class="review-author">- anthony</p>
        <p class="review-rating">★★★☆☆</p>
      </div>
    </div>
  </div>
  <div id="purchaseModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closePurchaseModal()">&times;</span>
      <img src="images/reload.jpg" alt="Product Image" width="300" height="400">
      <h2>Purchase successful!</h2>
      <p>Items will be shipped to your saved address as soon as possible.</p>
      <h3>Product Details:</h3>
      <?php
      $sql_product = "SELECT * FROM games WHERE sid = 1";
      $result_product = $connect -> query($sql_product);
      $row = mysqli_fetch_assoc($result_product);
      $name = $row['gname']; ?>
      <h4 class="product-title"> <?php echo $name ?></h4>

    <?php
      $price = $row['Price']; ?>
      <p class="product-price">$<?php echo $price ?></p>
    </div>
  </div>

  <div id="rentModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeRentModal()">&times;</span>
      <img src="images/reload.jpg" alt="Product Image" width="300" height="400">
      <h2>Rent Options</h2>
      <p>How long would you like to rent for?</p>
      <select id="rentDuration">
        <option value="1">1 day</option>
        <option value="2">2 days</option>
        <option value="3">3 days</option>
        <option value="4">4 days</option>
        <option value="5">5 days</option>
        <option value="6">6 days</option>
        <option value="7">7 days</option>
        <option value="8">8 days</option>
        <option value="9">9 days</option>
        <option value="10">10 days</option>
        <option value="11">11 days</option>
        <option value="12">12 days</option>
        <option value="13">13 days</option>
        <option value="14">14 days</option>
      </select>
      <br><br>
      <button onclick="confirmRent()">Confirm Rent</button>
      <h3 id="rentMessage" style="display: none;">Renting successful! Items will be shipped to your saved address as soon as possible.</h3>
      <h3 id="rentPrice">Rent Price: $2.00</h3>
    </div>
  </div>

  <script>
    var purchaseModal = document.getElementById("purchaseModal");

    var rentModal = document.getElementById("rentModal");

    var purchaseBtn = document.querySelector("button");

    var rentBtn = document.querySelectorAll("button")[1];

    var purchaseSpan = document.getElementsByClassName("close")[0];

    var rentSpan = document.getElementsByClassName("close")[1];

    function purchase() {
      purchaseModal.style.display = "block";
    }

    function rent() {
      rentModal.style.display = "block";
    }

      function closePurchaseModal() {
      purchaseModal.style.display = "none";
    }

    function closeRentModal() {
      rentModal.style.display = "none";
    }

    function confirmRent() {
      var rentDuration = parseInt(document.getElementById("rentDuration").value);
      var rentPrice = rentDuration * 2.00;
      document.getElementById("rentPrice").innerText = "Rent Price: $" + rentPrice.toFixed(2);
      document.getElementById("rentMessage").style.display = "block";
    }
  </script>
</body>
</html>
<?php } ?>