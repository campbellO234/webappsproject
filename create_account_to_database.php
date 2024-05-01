<!DOCTYPE html>
<html>
<style>
    body 
    {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding-top: 50px;
    }  
    </style>
<body>
    <?php

        include ("BB_Connection.php");

        $name = $pass = $dob = $email = $card = '';

        if(isset($_POST['submit']))
        {
            $name = isset($_POST['username']) ? $_POST['username'] : '';
            $pass = isset($_POST['password']) ? $_POST['password'] : '';
            $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $card = isset($_POST['cardInfo']) ? $_POST['cardInfo'] : '';
        }


        if($connect -> connect_errno)
        {
            die('Could not connect: ' . $connect->connect_errno);
        }

        $sql = "INSERT INTO user_info (username, u_password, dob, email, card_info) VALUES ('$name', '$pass', '$dob', '$email', '$card')";

        $rs = mysqli_query($connect, $sql);

        echo("Account creation successful.")
    ?>
    <a class = "link-content1" href="index.php"> <button>Return to Login</button>
</body>
</html>