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
		$uid = $_SESSION['uid'];   
?>

<head> 
<title>Shooter - Blockbuster Online </title>

<link rel="stylesheet" href="css/mystyles.css" />
<script type="text/javascript" src="js/myjs.js"></script>
<?php include ("BB_Connection.php"); ?>


</head>


<body style="background-color: #d1a30e;">
<br>

<header>
	<center>
		<a href="main.php">
			<img src="images/blockbuster.png" width="20%" height="20%">
		</a>
    </center> 
</header>


<ul>
<li class="menu-item"><a href = "javascript:void(0)" onclick = href="main.php" class="li">Games </a>
</li>

        <li class="menu-item"><a href = "javascript:void(0)" onclick = href="BB_about.php" class="li">About Us </a>
            
        </li>

        <li class="menu-item"><a href = "javascript:void(0)" onclick = href="BB_user_info.php" class="li">Account </a>
            
        </li>

</ul>
<p align="center"> Welcome back to Blockbuster Online, <?php echo $uid ?>!<p>

</center>

<table align = "center">
<tr>
<td> <a href = "javascript:void(0)" onclick = href="halo.php" class=li> <center><img src="images/infinite.jpg" alt="halo" width = "25%" height = "25%"></center> <br> <center>Halo infinite</center> </a> </td>
<td> <a href = "javascript:void(0)" onclick = href="mw2.php" class=li> <center><img src="images/mw2.jpg" alt="cod" width = "60%" height = "60%"></center> <br>  <center>Call of Duty: Modern Warfare II</center> </a> </td>
</tr>
</table>
<br> <br>
</body>
</html>
<?php } ?>