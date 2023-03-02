<?php 

if(isset($_POST['login'])){
    if($_POST['username'] == "schoolmart" && $_POST['password'] == "schoolmart"){
        echo "<script>alert('Selamat Datang'),
        window.location.href = 'landing.php'</script>
		";
        // $_SESSION['username'] = 'userlsp';
    }else {
        header("location:index.php?alert=gagal");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body style="background-image: var(.bg-secondary.bg-gradient);">
    <center>
        <?php if(isset($_GET['alert'])) { ?>
        <?php if ($_GET['alert'] == "gagal") { ?>
        <div class="alert alert-danger alr" role="alert">
            <p>Username Atau Password anda salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </p>
        </div>
        <?php }else if($_GET['alert'] == "logout") { ?>
        <div class="alert alert-danger alr" role="alert">
            <p>Anda telah logout
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </p>
        </div>
        <?php }else if($_GET['alert'] == "belum_login ") { ?>
        <div class="alert alert-danger alr" role="alert">
            <p>Username Atau Password anda salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </p>
        </div>
        <?php }else if($_GET['alert'] == "belum_login") { ?>
        <div class="alert alert-danger alr" role="alert">
            <p>Username Atau Password anda salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </p>
        </div>
        <?php } ?>
        <?php } ?>

        <img src="img/tes.png" alt="" class="">

        <div class="tes blockquote" style="color:white;">
            <p>
                SELAMAT DATANG DI LAUNDRY<br> SMK FARMASI BANJARMASIN
            </p>
        </div>
    </center>
    <div class="container shadow-lg">
        <h1 class="blockquote text-center" style="color:white; position: relative; top: 15px;">Login</h1>
        <form action="" method="post" autocomplete="none">
            <!-- Username -->
            <div class="form-group">
                <input type="username" name="username" id="username" class="form-control mb-5" placeholder="Username"
                    require>
            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control m-1" placeholder="Password"
                    require>
            </div>
            <!-- Register -->
            <button type="button" name="register" class="mt-3 btn-success">
                <a href="daftar.php">Register</a>
            </button>
            <!-- Submit -->
            <button type="submit" name="login" class="mt-3 btn-success">
                Login
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>