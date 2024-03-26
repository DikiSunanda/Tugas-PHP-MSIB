<?php

$namaSaya = 'Diki Sunanda';
$alamat = "Jl. Nanjung Mulya Rt 18 Rw 03 Ling. Buana Desa Cijoho Kec. Kuningan Kab. Kuningan Jawa Brat";
$tanggalLahir = '23 Oktober 2003';
$whatsApp = '089698523044';
$ig = '_dikisunanda';
$gitHub = 'DikiSunanda';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web PHP | Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-7 offset-md-5 mb-5">
        <img src="https://th.bing.com/th/id/OIP.diDJdE-OsSXOnoGE7L2kewHaHa?rs=1&pid=ImgDetMain" class="rounded-circle"
          alt="Diki Sunanda" width="250px" />
      </div>
      <dl class="row">
        <dt class="col-sm-3">Nama</dt>
        <dd class="col-sm-9"><?php echo $namaSaya ?></dd>

        <dt class="col-sm-3">alamat</dt>
        <dd class="col-sm-9">
          <p><?= $alamat ?></p>
        </dd>

        <dt class="col-sm-3">Tanggal Lahir</dt>
        <dd class="col-sm-9"><?php print $tanggalLahir ?></dd>

        <dt class="col-sm-3 text-truncate">Whatsapp</dt>
        <dd class="col-sm-9"><?php echo $whatsApp ?></dd>

        <dt class="col-sm-3 text-truncate">Instagram</dt>
        <dd class="col-sm-9"><?php print $ig ?></dd>

        <dt class="col-sm-3 text-truncate">GitHub</dt>
        <dd class="col-sm-9"><?= $gitHub ?></dd>

      </dl>
      </dd>
      </dl>
    </div>
  </div>
</body>

</html>
