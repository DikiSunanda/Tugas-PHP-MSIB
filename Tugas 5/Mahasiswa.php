<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $mataKuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $mataKuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;

        // Menghitung grade, predikat, dan status
        $this->hitungGrade();
        $this->hitungPredikat();
        $this->hitungStatus();
    }

    private function hitungGrade()
    {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    private function hitungPredikat()
    {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            default:
                $this->predikat = 'Sangat Kurang';
        }
    }

    private function hitungStatus()
    {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}

?>
