<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw profiel aanmaken</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;f
        }

        body {
            background: linear-gradient(180deg, rgba(77,33,201,1) 0%, rgba(37,33,201,0.4431022408963585) 100%);
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
            background: linear-gradient(180deg, rgba(77,33,201,1) 0%, rgba(37,33,201,0.4431022408963585) 100%);
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

        input[type="text"], input[type="password"], input[type="email"], input[type="number"], select, textarea {
            padding: 10px;
            width: 90%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
            width: 90%;
            max-width: 150px;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ccc;
        }

        label {
            color: white;
            margin-bottom: 5px;
        }

        textarea {
            height: 60px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Nieuw profiel aanmaken</h1>
        <div class="achtergrond">
            <form method="POST">
                <input type="email" name="email" placeholder="Email"><br>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br>
                

                <input type="submit" value="Aanmaken" name="aanmaken">
            </form>
        </div>
    </div>

</body>

</html>
