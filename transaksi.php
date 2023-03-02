<?php
//Mengambil data yang di kirim dari halaman landing.php
@ $data1 = $_POST['data1'];
@ $data2 = $_POST['data2'];
@ $data3 = $_POST['data3'];
$result = 0;
$kembalian = 0;
//menghitung total harga
if(isset($_POST['hitung'])) {
@$result = $_POST['harga'] * $_POST['nol'];
}else if(isset($_POST['hkembalian'])){
//Menghitung total kembalian
@$kembalian = $_POST['pembayaran'] - $_POST['result'];
}
//Mengisi variable yang nilainya 0 dengan string
if ($result == 0) {
$result = "Total Harga";

}

if($kembalian == 0){
$kembalian = "Total Kembalian";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="landing.css">

</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark hihi m-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="landing.php">Home</a>
                <a class="navbar-brand trans" href="#">Transaksi</a>
                <a class="navbar-brand" href="index.php?alert=logout">Logout</a>
            </div>
        </nav>
    </header>

    <div class="container shadow-lg  bg-body rounded mt-4 mb-4 haha hihi">
        <form class="pt-4" method="post" action="">
            <div class="row">
                <div class="col-6">
                    <!-- Kondisi saat tombol hitung ditekan -->
                    <?php if(isset($_POST['hitung'])) { ?>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">No Transaksi </label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Nomor Transaksi" value="<?php echo $_POST['notransaksi'] ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Tgl Transaksi </label>
                        <input type="date" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Tanggal Transaksi" value="<?php echo $_POST['tgl_r'] ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Nama Pelanggan</label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Nama Pelanggan" value="<?php echo $_POST['namaP'] ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Pilihan Paket</label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            value="<?php echo $_POST['pilihP'] ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Harga Paket</label>
                        <input type="text" class="form-control mx-4" name="harga" id="exampleFormControlInput1"
                            value="<?php echo $_POST['harga'] ?>" readonly>
                    </div>
                </div>
                <!-- Kondisi baru masuk form transaksi -->
                <?php }else{ ?>
                <div class="form-group mb-4 mx-4 d-flex flex-row">
                    <label for="exampleFormControlInput1" class="px-4">No Transaksi </label>
                    <input type="text" name="notransaksi" class="form-control mx-4" id="exampleFormControlInput1"
                        placeholder="Masukkan Nomor Transaksi" autofocus>
                </div>
                <div class="form-group mb-4 mx-4 d-flex flex-row">
                    <label for="exampleFormControlInput1" class="px-4">Tgl Transaksi </label>
                    <input type="date" name="tgl_r" class="form-control mx-4" id="exampleFormControlInput1"
                        placeholder="Masukkan Tanggal Transaksi">
                </div>
                <div class="form-group mb-4 mx-4 d-flex flex-row">
                    <label for="exampleFormControlInput1" class="px-4">Nama Pelanggan</label>
                    <input type="text" name="namaP" class="form-control mx-4" id="exampleFormControlInput1"
                        placeholder="Masukkan Nama Pelanggan">
                </div>
                <div class="form-group mb-4 mx-4 d-flex flex-row">
                    <label for="exampleFormControlInput1" class="px-4">Pilihan Paket</label>
                    <input type="text" name="pilihP" class="form-control mx-4" id="exampleFormControlInput1"
                        value="<?php echo $data1 ?>" readonly>
                </div>
                <div class="form-group mb-4 mx-4 d-flex flex-row">
                    <label for="exampleFormControlInput1" class="px-4">Harga Paket</label>
                    <input type="text" class="form-control mx-4" name="harga" id="exampleFormControlInput1"
                        value="<?php echo $data3 ?>" readonly>
                </div>
            </div>
            <?php } ?>
            <div class="col">
                <div class="form-group mb-4 mx-4">
                    <input class="form-control" name="nol" type="number" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Jumlah Produk
                    </label>
                </div>
            </div>
    </div>
    <button type="submit" name="hitung" class="btn hihi mb-4 text-white" style="margin-left: 65%;">Hitung Total
        Harga</button>
    </div>
    <div class="container shadow-lg  bg-body rounded mt-4 mb-4 haha hihi">
        <div class="row pt-4">
            <div class="col-6">
                <div class="form-group mb-4 ">
                    <label class="form-label px-4" for="result">Total Harga&nbsp;</label>
                    <input type="text" name="result" id="result" class="form-control mx-4" value="<?php echo $result ?>"
                        readonly>
                </div>
                <div class="form-group mb-4">
                    <label class="form-label px-4" for="pembayaran">Pembayaran</label>
                    <input type="text" name="pembayaran" id="pembayaran" class="form-control mx-4"
                        placeholder="Input Jumlah Uang" require>
                </div>
            </div>
            <div class="col ">
                <div class="form-group mb-4 mx-4 mr-4">
                    <label class="form-label px-4" for="kembalian">Kembalian</label>
                    <input type="text" name="kembalian" id="kembalian" class="form-control mx-4"
                        placeholder="Hasil Kembalian" value="<?php echo $kembalian ?>" readonly>
                </div>
            </div>
        </div>
        <button type="submit" name="hkembalian" class="btn hihi mb-4 buttonnn text-white" style="margin-left: 40%;">
            Hitung Kembalian
        </button>

        <button type="button" class="btn hihi mb-4 my-2 buttonn text-white" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop" style="margin-left: 25%;">
            Simpan Transaksi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Notifikasi Transaksi</h1>
                    </div>
                    <div class="modal-body">
                        <center>
                            <p>Transaksi Berhasil!</p>
                            <img src="img/selesai.jpg" alt="" style="border-radius:50%;width:300px;">
                        </center>
                    </div>
                    <div class="modal-footer">
                        <a href="landing.php" type="button" class="btn btn-primary"
                            style="width:150px;justify-content:center;">Kembali
                            ke
                            Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class=" footer mt-auto py-3 hihi m-2">
        <div class="container">
            <marquee behavior="" direction="10">
                <span class="text-white">Copyright@SuryaArinaldi</span>
            </marquee>
        </div>
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>