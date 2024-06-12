<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog pagina</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        body {
            background: linear-gradient(180deg, rgba(77, 33, 201, 1) 0%, rgba(37, 33, 201, 0.4431022408963585) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .achtergrond {
            background: linear-gradient(180deg, rgba(77, 33, 201, 1) 0%, rgba(37, 33, 201, 0.4431022408963585) 100%);
            max-width: 400px;
            width: 100%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        h1 {
            margin-bottom: 30px;
            text-align: center;
            color: white;
        }

        h2 {
            color: white;
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="password"] {
            margin-top: 10px;
            padding: 10px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
            width: 150px;
        }

        input[type="submit"]:hover {
            background-color: white;
        }

        .register-form {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        p {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welkom op de pagina</h1>
        <div class="achtergrond">
            <form method="POST">
                <h2>User inlog</h2>

                <input type="email" name="email" placeholder="Email"><br>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br><br>
                <input type="submit" value="Login" name="login"><br>
                <input type="submit" value="Nieuwe gebruiker" name="register">
                <br>
            </form>
            <?php
            include_once ('../src/accounts.php');
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $wachtwoord = $_POST["wachtwoord"];

                $account = new accounts();
                $loginInformation = $account->getAccount($email);

                if ($email == "" || $wachtwoord == "") {
                    echo "<p>Vul alle velden in</p>";
                } else {
                    if (isset($loginInformation[0]) && $loginInformation[0]['wachtwoord'] == hash('sha256', $wachtwoord)) {
                        header("Location: client.php");
                        exit();
                    } else {
                        echo "<p>Wachtwoord of email is fout</p>";
                    }
                }
            }
            ?>
        </div>

    </div>
</body>

</html>

<?php

include_once ('../src/accounts.php');

