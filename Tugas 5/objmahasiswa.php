<?php

require_once 'Mahasiswa.php';

?>

<html>
<head>
    <title>Output Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .form-heading {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #007bff;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-submit {
            background-color: #007bff;
            border: none;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1 class="form-heading">Form Input Mahasiswa</h1>
        <form action="outputmahasiswa.php" method="POST">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="kampus">Kampus:</label>
                <select id="kampus" name="kampus" class="custom-select">
                    <option selected disabled>Pilih Kampus</option>
                    <option value="Universitas Kuningan">Universitas Kuningan</option>
                    <option value="Universitas Pasundan">Universitas Pasundan</option>
                    <option value="Universitas Padjajaran">Universitas Padjajaran</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mataKuliah">Mata Kuliah:</label>
                <select id="mataKuliah" name="mataKuliah" class="custom-select">
                    <option selected disabled>Pilih Mata Kuliah</option>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Laravel">Laravel</option>
                    <option value="React JS">React JS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="text" id="nilai" name="nilai" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
        </form>

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