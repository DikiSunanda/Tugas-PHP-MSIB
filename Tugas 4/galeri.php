\
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1kxzRJ.img?w=750&h=500&m=6&x=120&y=120&s=280&d=280');
            background-size: cover;
            background-position: center;
        }

        header {
            color: #FFFFFF;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image img {
            width: 100%;
            display: block;
            transition: transform 0.3s ease;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay:hover {
            opacity: 1;
        }

        .text {
            color: white;
            font-size: 16px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Galeri Produk</h1>
    </header>

    <section class="gallery">
        <div class="image">
            <img src="./img/ca.jpg" alt="Produk 1" class="img">
            <div class="overlay">
                <div class="text">Produk 1</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cb.jpg" alt="Produk 2" class="img">
            <div class="overlay">
                <div class="text">Produk 2</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cc.jpg" alt="Produk 3" class="img">
            <div class="overlay">
                <div class="text">Produk 3</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cd.jpg" alt="Produk 4" class="img">
            <div class="overlay">
                <div class="text">Produk 4</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ce.jpg" alt="Produk 5" class="img">
            <div class="overlay">
                <div class="text">Produk 5</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cf.jpg" alt="Produk 6" class="img">
            <div class="overlay">
                <div class="text">Produk 6</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cg.jpg" alt="Produk 7" class="img">
            <div class="overlay">
                <div class="text">Produk 7</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ca.jpg" alt="Produk 1" class="img">
            <div class="overlay">
                <div class="text">Produk 1</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cb.jpg" alt="Produk 2" class="img">
            <div class="overlay">
                <div class="text">Produk 2</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cc.jpg" alt="Produk 3" class="img">
            <div class="overlay">
                <div class="text">Produk 3</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cd.jpg" alt="Produk 4" class="img">
            <div class="overlay">
                <div class="text">Produk 4</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ce.jpg" alt="Produk 5" class="img">
            <div class="overlay">
                <div class="text">Produk 5</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cf.jpg" alt="Produk 6" class="img">
            <div class="overlay">
                <div class="text">Produk 6</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cg.jpg" alt="Produk 7" class="img">
            <div class="overlay">
                <div class="text">Produk 7</div>
            </div>
        </div>
        
        <div class="image">
            <img src="./img/cb.jpg" alt="Produk 2" class="img">
            <div class="overlay">
                <div class="text">Produk 2</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cc.jpg" alt="Produk 3" class="img">
            <div class="overlay">
                <div class="text">Produk 3</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cd.jpg" alt="Produk 4" class="img">
            <div class="overlay">
                <div class="text">Produk 4</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ce.jpg" alt="Produk 5" class="img">
            <div class="overlay">
                <div class="text">Produk 5</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cf.jpg" alt="Produk 6" class="img">
            <div class="overlay">
                <div class="text">Produk 6</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cg.jpg" alt="Produk 7" class="img">
            <div class="overlay">
                <div class="text">Produk 7</div>
            </div>
        </div>
        
        <div class="image">
            <img src="./img/cb.jpg" alt="Produk 2" class="img">
            <div class="overlay">
                <div class="text">Produk 2</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cc.jpg" alt="Produk 3" class="img">
            <div class="overlay">
                <div class="text">Produk 3</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cd.jpg" alt="Produk 4" class="img">
            <div class="overlay">
                <div class="text">Produk 4</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ce.jpg" alt="Produk 5" class="img">
            <div class="overlay">
                <div class="text">Produk 5</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cf.jpg" alt="Produk 6" class="img">
            <div class="overlay">
                <div class="text">Produk 6</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cg.jpg" alt="Produk 7" class="img">
            <div class="overlay">
                <div class="text">Produk 7</div>
            </div>
        </div>
        
        <div class="image">
            <img src="./img/cb.jpg" alt="Produk 2" class="img">
            <div class="overlay">
                <div class="text">Produk 2</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cc.jpg" alt="Produk 3" class="img">
            <div class="overlay">
                <div class="text">Produk 3</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/cd.jpg" alt="Produk 4" class="img">
            <div class="overlay">
                <div class="text">Produk 4</div>
            </div>
        </div>
        <div class="image">
            <img src="./img/ce.jpg" alt="Produk 5" class="img">
            <div class="overlay">
                <div class="text">Produk 5</div>
            </div>
        </div>
    </section>
</body>

</html>