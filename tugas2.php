<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Tugas JS 4</title>
</head>

<body>
    <form action="#" method="POST">
        <table style="width: 50%; background-color: beige; border: 1px solid;
        text-align: center; margin: auto;">
        <tbody>
        <tr>
            <th colspan="2">Nama Pelanggan</th>
        </tr>        
            <tr>
                <td><label for="nama">Nama Pegawai</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="produk">Pilihan Produk</label></td>
                <td><select id="produk" name="produk">
                <option value="">-- Pilih Produk --</option>
                <option value="tv">TV</option>
                <option value="kulkas">Kulkas</option>
                <option value="mesincuci">Mesin Cuci</option>
                <option value="ac">AC</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="qty">Jumlah Beli</label></td>
                <td><input type="text" name="qty" id="qty"></td>
            </tr>
            <tr>
            <td colspan="2">
            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
            </td>
        </tr>
    </tbody>
        </table>

    </form>
</body>
</html>

<?php
error_reporting(0);
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$qty = $_POST['qty'];
$proses = $_POST['proses'];

//Harga satuan
if ($produk == 'tv') {
    $harga = 5000000;
} elseif ($produk == 'kulkas') {
    $harga = 4000000;
} elseif ($produk == 'mesincuci') {
    $harga = 3000000;
} elseif ($produk == 'ac') {
    $harga = 2000000;
} else {
    $harga = 0; 
}

//Total belanja
$total_belanja = $qty * $harga;

//Diskon
$diskon = ($total_belanja * 0.20);

//PPN
$ppn = 0.10 * ($total_belanja - $diskon);

//Harga bersih
$harga_bersih = ($total_belanja - $diskon) - $ppn;

//Diskon
$diskon_total = ($diskon > 0) ? $diskon : "Tidak ada diskon";

//Harga satuan
switch ($produk) {
    case 'tv':
        $harga_produk = $harga;
        break;
    case 'kulkas':
        $harga_produk = $harga;
        break;
    case 'mesincuci':
        $harga_produk = $harga;
        break;
    case 'ac':
        $harga_produk = $harga;
        break;
    default:
        $harga_produk = "Produk tidak valid";
}

if (isset($proses)) { //Sebagai error handling
?>

<!--Cetak di dalam HTML-->
<h2>Nama Pelanggan: <?=$nama?></h2>
<h3>Produk: <?=$produk?></h3>
<h3>Kuantitas: <?=$qty?></h3>
<h3>Harga Satuan: <?=$harga?></h3>
<h3>Total Belanja: <?=$total_belanja?></h3>
<h3>Diskon: <?=$diskon_total?></h3>
<h3>PPN: <?=$ppn?></h3>
<h3>Harga Bersih: <?=$harga_bersih?></h3>
<?php } ?>
