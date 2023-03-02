<?php 

$paraproduct = array (
    array("Sikat WC", "Membersihkan WC dengan bersih",100000,"gambar1.png"),
    array("Headphone Animeh", "Dengan memakai ini anda akan menjadi seorang wibu",500000,"gambar2.png"),
    array("Jaket Animeh", "Dengan memakai ini anda akan mendapatkan kekuatan ghoul psikopat",50000,"gambar3.png"),
    array("Mobil", "Iya Mobil mau apa lagi",20000,"gambar4.png"),
    );

    // $data = implode($datapaket);

    // var_dump($data[0][0]);exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="landing.css">
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark hihi m-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <a class="navbar-brand trans" href="transaksi.php">Transaksi</a>
                <a class="navbar-brand" href="index.php?alert=logout">Logout</a>
            </div>
        </nav>
    </header>
    <center>
        <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/laundry1.png" class=" d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/laundry5.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/laundy6.png" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </center>
    <div class="container mt-2 mb-4">
        <p class="blockquote badge text-white mt-1" style="background-color:#191970;font-size:20px;padding-1;">
            Daftar Paket Laundry
        </p>
        <div class="row">
            <?php foreach ($paraproduct as $values =>$value) {?>
            <div class="col-md-3">
                <div class="card mt-2 shadow-lg">
                    <img src="img/<?php echo $value[3] ?>" class="card-img-top" alt="..." height="300px">
                    <div class="card-body card  mb-3 tescard hihi">
                        <p><?php echo $value[0]; ?></p>
                        <p><?php echo $value[1]; ?></p>
                        <p><?php echo $value[2]; ?></p>
                    </div>
                </div>
                <center>
                    <form action="transaksi.php" method="post">
                        <input type="hidden" name="data1" id="data" value="<?php echo $value[0] ?>">
                        <input type="hidden" name="data2" id="data" value="<?php echo $value[1] ?>">
                        <input type="hidden" name="data3" id="data" value="<?php echo $value[2] ?>">
                        <button class=" btn btn-light mt-2">
                            Pilih Paket
                        </button>
                    </form>
                </center>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- footer -->
    <footer class=" footer mt-auto py-3  m-2 hihi">
        <marquee behavior="" direction="10">
            <div class="container">
                <span class="text-white">Copyright@SuryaArinaldi</span>
            </div>
        </marquee>
    </footer>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>