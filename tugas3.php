<?php
//deklarasikan nama-nama judul pada table header mnggunakan looping array
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$m1 = ['nama'=>'Andi Santoso', 'nim'=>'011111', 'nilai'=>95];
$m2 = ['nama'=>'Budi Kurniawa', 'nim'=>'022222', 'nilai'=>80];
$m3 = ['nama'=>'Candi Badur', 'nim'=>'033333', 'nilai'=>78];
$m4 = ['nama'=>'Denis Saputra', 'nim'=>'044444', 'nilai'=>76];
$m5 = ['nama'=>'Enri Manahel', 'nim'=>'055555', 'nilai'=>86];
$m6 = ['nama'=>'Fahrirudin', 'nim'=>'066666', 'nilai'=>50];
$m7 = ['nama'=>'Gayama Harustia', 'nim'=>'077777', 'nilai'=>20];
$m8 = ['nama'=>'Isma Latono', 'nim'=>'088888', 'nilai'=>30];
$m9 = ['nama'=>'Jami Sayyir', 'nim'=>'099999', 'nilai'=>70];
$m10 = ['nama'=>'Karni Buato', 'nim'=>'010101', 'nilai'=>65];
$ar_mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//fungsi agregat nilai di array
$nilai = array_column($ar_mahasiswa, 'nilai');
$nilai_max = max($nilai);
$nilai_min = min($nilai);
$jumlah_mahasiswa = count($ar_mahasiswa);
$jumlah_nilai = array_sum($nilai);
$nilai_avg = $jumlah_nilai / $jumlah_mahasiswa;

$nilai_keterangan = [
    'Nilai Tertinggi' => $nilai_max,
    'Nilai Terendah' => $nilai_min,
    'Nilai Rata-Rata' => $nilai_avg,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Seluruh Nilai' => $jumlah_nilai
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 3 PHP</title>
</head>
<body>
<h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="80%" align="center">
        <thead>
            <?php
                foreach($ar_judul as $judul){ ?>
                    <th><?= $judul ?></th>
            <?php } ?>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach ($ar_mahasiswa as $mahasiswa){
                //Keterangan => Ternary minimal nilai 65 dinyatakan Lulus
                $keterangan = ($mahasiswa ['nilai'] >= 65) ? 'Lulus' : 'Gagal';
            //jika nilai <=100 dan nilai >80 maka grade: a
            //jika nilai <=80 dan nilai >70 maka grade: b
            //jika nilai <=70 dan nilai >50 maka grade: c
            //jika nilai <=50 dan nilai >30 maka grade: d
            //selain itu, nilai <=30 maka grade: e
            $nilai = $mahasiswa['nilai'];
            if ($nilai <=100 && $nilai >80) {
                $grade = "A";
            } elseif ($nilai <=80 && $nilai >70) {
                $grade = "B";
            } elseif ($nilai <=70 && $nilai >50) {
                $grade = "C";
            } elseif ($nilai <=50 && $nilai >30) {
                $grade = "D";
            } else {
                $grade = "E";
            }
            //Predikat menggunakan Switch Case dari Grade => A Memuaskan, B  Bagus, C  Cukup, D  Kurang, E  Buruk
            switch($grade) {
                case 'A':
                    $predikat = 'Memuaskan';
                    break;
                case 'B':
                    $predikat = 'Bagus';
                    break;
                case 'C':
                    $predikat = 'Cukup';
                    break;
                case 'D':
                    $predikat = 'Kurang';
                    break;
                case 'E':
                    $predikat = 'Buruk';
                    break;
                default:
                    $predikat = '';
            }
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nilai'] ?></td>
                <td><?= $keterangan?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <!-- table di tfoot: Nilai Tertinggi,
        Nilai Terendah, Nilai rata-rata, Jumlah Mahasiswa,
        Jumlah keseluruhan nilai jika di gabungkan -->
            <?php
            foreach($nilai_keterangan as $ket => $hasil){
            ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>