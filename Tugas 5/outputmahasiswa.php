<?php

require_once 'mahasiswa.php';

?>

<html>
<head>
    <title>Form Input Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .table-heading {
            text-align: center;
            margin-top: 50px;
            font-size: 24px;
            color: #007bff;
        }
        .table-responsive {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table thead th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

        <?php
        // Tampilkan tabel jika data mahasiswa sudah diisi
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'Mahasiswa.php';

            // Tangkap data dari form
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kampus = $_POST['kampus'];
            $mataKuliah = $_POST['mataKuliah'];
            $nilai = $_POST['nilai'];

            // Buat objek Mahasiswa
            $mahasiswa = new Mahasiswa($nim, $nama, $kampus, $mataKuliah, $nilai);

            // Tampilkan hasil dengan tabel
            echo '<h1 class="table-heading">Hasil Input Mahasiswa</h1>';
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered">';
            echo '<thead class="thead-light">';
            echo '<tr>';
            echo '<th>NIM</th>';
            echo '<th>Nama</th>';
            echo '<th>Kampus</th>';
            echo '<th>Mata Kuliah</th>';
            echo '<th>Nilai</th>';
            echo '<th>Grade</th>';
            echo '<th>Predikat</th>';
            echo '<th>Status</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $mahasiswa->nim . '</td>';
            echo '<td>' . $mahasiswa->nama . '</td>';
            echo '<td>' . $mahasiswa->kuliah . '</td>';
            echo '<td>' . $mahasiswa->mataKuliah . '</td>';
            echo '<td>' . $mahasiswa->nilai . '</td>';
            echo '<td>' . $mahasiswa->grade . '</td>';
            echo '<td>' . $mahasiswa->predikat . '</td>';
            echo '<td>' . $mahasiswa->status . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        
        ?>
    </div>
</body>
</html>
<?php
 }
?>