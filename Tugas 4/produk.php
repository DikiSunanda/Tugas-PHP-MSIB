<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template | Produk</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        h2{
            margin: 20px;
            color: #FFFFFF;
        }
        #produk{
            margin: 20px;
            padding: 5px 0px 5px 0px;
            display: flex;
            background-color: blanchedalmond;
            width: max-content;
            padding: 10px;
            border-radius: 20px;
        }
        
        .img {
            width: 250px;
            border-radius: 20px;
        }

        .btn-beli {
            padding: 5px 20px;
            color: #fff;
            background-color: green;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
        }
        .btn-beli:hover {
            padding: 5px 20px;
            color: green;
            background-color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
        }

        p {
            padding: 5px;
        }
        .produk-saya{
            display: flex;
        }
        .hero {
            background-image: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1kxzRJ.img?w=750&h=500&m=6&x=120&y=120&s=280&d=280');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
<section class="hero">
    <h2>Laptop Acer</h2>
    <div class="produk-saya">
    <div id="produk">
        <div class="card-produk1">
            <img src="./img/ca.jpg" alt="" class="img">
            <p><b>Laptop Acer</b></p>
            <p>Rp. 7.400.766</p>
            <button class="btn-beli">Beli</button>
        </div>
    </div>
    <div id="produk">
        <div class="card-produk2">
            <img src="./img/cb.jpg" alt="" class="img">
            <p><b>Laptop Acer</b></p>
            <p>Rp. 6.700.966</p>
            <button class="btn-beli">Beli</button>
        </div>
    </div>
    <div id="produk">
        <div class="card-produk3">
            <img src="./img/cc.jpg" alt="" class="img">
            <p><b>Laptop Acer</b></p>
            <p>Rp. 8.900.399</p>
            <button class="btn-beli">Beli</button>
        </div>
    </div>
    <div id="produk">
        <div class="card-produk4">
            <img src="./img/cd.jpg" alt="" class="img">
            <p><b>Laptop Acer</b></p>
            <p>Rp. 5.440.786</p>
            <button class="btn-beli">Beli</button>
        </div>
    </div>
    </div>
</section>
</body>

</html>