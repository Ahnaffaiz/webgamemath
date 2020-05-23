<?php include 'header.php'; 
session_start();
$_SESSION["poin"]=0;
$_SESSION["lives"]=5;
?>
<div class="container my-5">
    <div class="row  text-center">
        <div class="col-12"><h3>Hello <?= $_SESSION["name"] ?>, Selamat datang kembali di</h3></div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <img src="img/logo.png" style="width: 670px;height:200px;">
        </div>
    </div>
    <div class="row text-center my-3">
        <div class="col-12">
            <a href="soal.php" class="btn btn-primary">Mulai Main</a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <p>Bukan anda klik <a href="index.php?pageSet=true">disini</a></p>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>