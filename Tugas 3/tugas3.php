<?php
//Array Data Siswa
$m1 = ['Nama' => 'Andi Santono', 'NIM' => '0111111', 'Nilai' => 95];
$m2 = ['Nama' => 'Budi Kurniawan', 'NIM' => '0111112', 'Nilai' => 80];
$m3 = ['Nama' => 'Candi Badur', 'NIM' => '0111113', 'Nilai' => 78];
$m4 = ['Nama' => 'Denis Caputla', 'NIM' => '0111114', 'Nilai' => 76];
$m5 = ['Nama' => 'Erik Manahel', 'NIM' => '0111115', 'Nilai' => 86];
$m6 = ['Nama' => 'Fahri Nusanto', 'NIM' => '0111116', 'Nilai' => 50];
$m7 = ['Nama' => 'Gayama Hanusta', 'NIM' => '0111117', 'Nilai' => 20];
$m8 = ['Nama' => 'Isma Lotono', 'NIM' => '0111118', 'Nilai' => 30];
$m9 = ['Nama' => 'Jami Sayur', 'NIM' => '0111119', 'Nilai' => 70];
$m10 = ['Nama' => 'Karni Buato', 'NIM' => '01111110', 'Nilai' => 65];
$m11 = ['Nama' => 'Lina Marliana', 'NIM' => '01111111', 'Nilai' => 88];
$m12 = ['Nama' => 'Miko Putranto', 'NIM' => '01111112', 'Nilai' => 75];
$m13 = ['Nama' => 'Nadia Suryani', 'NIM' => '01111113', 'Nilai' => 92];
$m14 = ['Nama' => 'Oscar Wibowo', 'NIM' => '01111114', 'Nilai' => 82];
$m15 = ['Nama' => 'Putri Kartini', 'NIM' => '01111115', 'Nilai' => 79];
$m16 = ['Nama' => 'Rendi Saputra', 'NIM' => '01111116', 'Nilai' => 85];
$m17 = ['Nama' => 'Siti Rahayu', 'NIM' => '01111117', 'Nilai' => 90];
$m18 = ['Nama' => 'Tono Kusumo', 'NIM' => '01111118', 'Nilai' => 73];
$m19 = ['Nama' => 'Uci Pangestu', 'NIM' => '01111119', 'Nilai' => 87];
$m20 = ['Nama' => 'Vina Wijaya', 'NIM' => '01111120', 'Nilai' => 91];
$m21 = ['Nama' => 'Wahyu Kurniawan', 'NIM' => '01111121', 'Nilai' => 84];
$m22 = ['Nama' => 'Xavier Putro', 'NIM' => '01111122', 'Nilai' => 78];
$m23 = ['Nama' => 'Yuli Widarti', 'NIM' => '01111123', 'Nilai' => 83];
$m24 = ['Nama' => 'Zara Putri', 'NIM' => '01111124', 'Nilai' => 76];
$m25 = ['Nama' => 'Abdul Halim', 'NIM' => '01111125', 'Nilai' => 80];
$m26 = ['Nama' => 'Bunga Sari', 'NIM' => '01111126', 'Nilai' => 89];
$m27 = ['Nama' => 'Citra Dewi', 'NIM' => '01111127', 'Nilai' => 85];
$m28 = ['Nama' => 'Dharma Putra', 'NIM' => '01111128', 'Nilai' => 77];
$m29 = ['Nama' => 'Eka Saputri', 'NIM' => '01111129', 'Nilai' => 82];
$m30 = ['Nama' => 'Fahmi Rahman', 'NIM' => '01111130', 'Nilai' => 81];
$m31 = ['Nama' => 'Gita Ayu', 'NIM' => '01111131', 'Nilai' => 88];
$m32 = ['Nama' => 'Hadi Prasetyo', 'NIM' => '01111132', 'Nilai' => 79];
$m33 = ['Nama' => 'Indra Cahyono', 'NIM' => '01111133', 'Nilai' => 83];
$m34 = ['Nama' => 'Joko Susilo', 'NIM' => '01111134', 'Nilai' => 85];
$m35 = ['Nama' => 'Kiki Permadi', 'NIM' => '01111135', 'Nilai' => 90];
$m36 = ['Nama' => 'Laras Wati', 'NIM' => '01111136', 'Nilai' => 87];
$m37 = ['Nama' => 'Mira Ningsih', 'NIM' => '01111137', 'Nilai' => 82];
$m38 = ['Nama' => 'Nana Supriyadi', 'NIM' => '01111138', 'Nilai' => 78];
$m39 = ['Nama' => 'Oscar Putra', 'NIM' => '01111139', 'Nilai' => 76];
$m40 = ['Nama' => 'Putri Ramadhani', 'NIM' => '01111140', 'Nilai' => 85];

// Menambahkan data siswa tambahan ke dalam array $ar_siswa
$ar_siswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12, $m13, $m14, $m15, $m16, $m17, $m18, $m19, $m20, $m21, $m22, $m23, $m24, $m25, $m26, $m27, $m28, $m29, $m30, $m31, $m32, $m33, $m34, $m35, $m36, $m37, $m38, $m39, $m40];



//Deklarasi Nama Judul
$ar_judul = ['No.', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


//Fungsi agregat di array 

// Menghitung jumlah nilai
$jumlahNilai = array_column($ar_siswa, 'Nilai');
$total_nilai = array_sum($jumlahNilai);

// Menghitung nilai tertinggi dan terendah
$nilaiTertinggi = max($jumlahNilai);
$nilaiTerendah = min($jumlahNilai);

// Menghitung rata-rata
$rata_rata = $total_nilai / count($ar_siswa);

// Menghitung jumlah siswa
$jumlahSiswa = count($ar_siswa);



$keteranganz = [
    'Nilai Tertinggi' => $nilaiTertinggi,
    'Nilai Terendah' => $nilaiTerendah,
    'Rata - rata Nilai' => $rata_rata,
    'Jumlah Nilai' => $total_nilai,
    'Jumlah Siswa' => $jumlahSiswa
];

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Data Nilai Siswa | Tugas 3 PHP</title>
</head>

<body>
    <div class="judul mt-4 col-12">
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Data Nilai Ujian</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Nilai Hasil Ujian<cite title="Source Title">&nbsp;Semester 6</cite>
            </figcaption>
        </figure>
    </div>
    <table class="table table-hover col-8 row-6 mt-4 text-center">
        <thead>
            <tr class="table-secondary">
                <?php
                foreach ($ar_judul as $judul) { ?>
                    <th>
                        <?= $judul ?>
                    </th>
                    <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($ar_siswa as $siswa){

            //Ternary lulus / tidak
            $keterangan = ($siswa['Nilai'] >= 65)? 'Lulus': 'Gagal';

            //IF/ELSE Grade
            if ($siswa['Nilai']>= 85 && $siswa['Nilai'] <= 100) $grade = 'A';
            if ($siswa['Nilai']>= 70 && $siswa['Nilai'] < 85) $grade = 'B';
            if ($siswa['Nilai']>= 60 && $siswa['Nilai'] < 70) $grade = 'C';
            if ($siswa['Nilai']>= 45 && $siswa['Nilai'] < 60) $grade = 'D';
            if ($siswa['Nilai']>= 0 && $siswa['Nilai'] < 45) $grade = 'E';
            else $grade;

            //Switch Case Predikat
            switch($grade){
                case 'A': $predikat = 'Memuaskan';
                break;
                case 'B': $predikat = 'Bagus';
                break;
                case 'C': $predikat = 'Cukup';
                break;
                case 'D': $predikat = 'Kurang';
                break;
                case 'E': $predikat = 'Buruk';
                break;
            }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $siswa['Nama'] ?></td>
                <td><?= $siswa['NIM'] ?></td>
                <td><?= $siswa['Nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        </tbody>
        <?php } ?>
        <tfoot class="table-secondary">
        <?php
            foreach ($keteranganz as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="3">
                        <?= $ket ?>
                    </th>
                    <th colspan="4">
                        <?= $hasil ?>
                    </th>
                </tr>

                <?php
            }
            ?>
        </tfoot>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>