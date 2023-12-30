<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login F1 Anju Kaisar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
        }

        body::before {
            content: "";
            background-image: url("assets/anjubg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            filter: blur(5px);
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        header {
            background-color: rgba(255, 255, 255, 0.100);
            color: black;
            padding: 1px;
            text-align: center;
        }

        footer {
            background-color: rgba(255, 255, 255, 0.066);
            color: rgb(9, 0, 0);
            padding: 1px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        div {
            color: black;
            text-align: center;
            margin: 1% auto;
            width: 350px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.066);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.199);
        }

        h2 {
            margin: 8px 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Login F1 Anju Kaisar</h1>
    </header>

    <div>
        <h2>Selamat Datang</h2>
        <h2>Di</h2>
        <h2>Kampus V</h2>
        <h2>Citra Buana Indonesia</h2>
    </div>

    <footer>
        <p>&copy; Admin Anju Kaisar</p>
    </footer>
</body>

</html>