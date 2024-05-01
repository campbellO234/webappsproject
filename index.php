<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/gamepage.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #000;
            text-align: center;
            padding: 20px 0;
        }

        header img {
            width: 20%;
            height: auto;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .form label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #000;
        }

        .form input[type="text"],
        .form input[type="password"],
        .form input[type="email"] {
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form input[type="submit"]:hover {
            background-color: #555;
        }

        .toggle-buttons {
            text-align: center;
        }

        .toggle-buttons button {
            padding: 10px 20px;
            margin: 0 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #555;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .toggle-buttons button:hover {
            background-color: #777;
        }

    </style>
    <script type="text/javascript" src="js/BB_function.js"></script>
    <?php include ("BB_Connection.php"); ?> 
</head>
<body>
    <header>
        <img src="images/blockbuster.png" alt="Blockbuster Logo">
    </header>

    <div class="container">
        <div class="toggle-buttons">
            <button onclick="toggleForm('createAccount')">Create Account</button>
        </div>

        <div class="form" id="createAccount" style="display:none;">
            <h2>Create Account</h2>
            <form method="post" action="create_account_to_database.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="dob">DOB:</label>
                <input type="text" id="dob" name="dob" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="cardInfo">Card Information:</label>
                <input type="text" id="cardInfo" name="cardInfo" required>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>
        </div>

        <div class="form" id="loginAccount">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <label for="loginUsername">Username:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
        function toggleForm(formId) {
            var forms = document.querySelectorAll('.form');
            forms.forEach(function(form) {
                if (form.id === formId) {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>