<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web | Template</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .judul-web {
            color: #FF004D;
            padding: 20px 0px 20px 30px;
            background-image: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1kxzRJ.img?w=750&h=500&m=6&x=120&y=120&s=280&d=280');
            background-size: cover;
        }

        .judul-bottom {
            padding: 5px 0px;
            font-size: small;
            font-style: italic;
            color: #FF004D;
        }

        .pil-menu {
            background-color: #FF004D;
            color: #FFFFFF;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            color: #FFFFFF;
            text-decoration: none;
            padding: 15px;
            font-weight: bold;
        }

        a:hover {
            color: black;
        }

        .foot-web {
            background-color: #FF004D;
            color: #FFFFFF;
            font-weight: bold;
            padding: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero {
            background-image: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1kxzRJ.img?w=750&h=500&m=6&x=120&y=120&s=280&d=280');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-content {
            text-align: center;
            color: #FFFFFF;
        }

        .hero-content h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #fff;
            color: #FF004D;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
            margin-right: 10px;
        }
        .button2 {
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            background-color: #FF004D;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
        }
        
    </style>
</head>

<body>
    <div class="judul-web">
        <h1 class="judul-top"> QStore </h1>
        <p class="judul-bottom">Toko Online Elektronik Terlengkap</p>
    </div>

    <div class="pil-menu">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
        //Looping foreach dari webmenu.php
        foreach ($menu_atas as $key => $value) {
            echo "<a href='index.php?hal=$key'>$value </a> |";
        }
        ?>
    </div>