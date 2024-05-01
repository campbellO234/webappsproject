<!DOCTYPE html>
<html>
<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding-top: 50px;
        }

        
    </style>
</head>

<body>
    <div>
        <?php
        if (isset($_POST['loginUsername']) && isset($_POST['loginPassword'])) {
            include("BB_Connection.php");

            $loginUsername = $_POST['loginUsername'];
            $loginPassword = $_POST['loginPassword'];

            $sql = "SELECT * FROM user_info WHERE username = '$loginUsername' AND u_password = '$loginPassword'";
            $rs = mysqli_query($connect, $sql);

            if ($rs->num_rows > 0) {
                echo "<p>Login successful!</p>";
                $_SESSION['uid'] = $loginUsername;
                $_SESSION['pwd'] = $loginPassword;
                $_SESSION['role'] = "u";
                ?>
                <a href="main.php"><button>Return to Main Menu</button></a>
            <?php
            } else {
                echo "<p>Login failed. Invalid username or password.</p>";
            }
        }
        ?>
    </div>
</body>

</html>
