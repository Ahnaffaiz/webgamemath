
<?php include 'header.php'; ?>
<?php 

session_start();
if($_SESSION["result"]==$_GET["answer"]){
    $result = "Selamat Jawaban Anda Benar";
    $_SESSION["poin"]+=10;
} else {
    $result = "Sayang jawaban anda salah.., Tetap semangat ya";
    $_SESSION["poin"]-=2;
    $_SESSION["lives"]-=1;
}

if($_SESSION["lives"]==0){
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $poin = $_SESSION["poin"];
    
    //connect dan upload kedatabase
    include_once("config.php");
    $sql = "INSERT INTO `tb_users`(`name`, `email`, `point`) VALUES ('$name','$email','$poin')";
    $sqlinsert = mysqli_query($koneksi, $sql);

    //redirect
    header('Location:gameover.php');
}
?>
<div class="container my-5">
    <div class="row  text-center">
        <div class="col-12"><h3><?= "Hello " . $_SESSION["name"] . ", $result"  ?></h3></div>
    </div>
    <div class="row mt-2">
        <div class="col-5 text-right">
            <h4><i class="fa fa-heart" aria-hidden="true" style="color: #F14A4A">  <?= $_SESSION["lives"] ?></i></h4>
        </div>
        <div class="col-2 text-center">
            <h3>|</h3>
        </div>
        <div class="col-5 text-left">
            <h4><i class="fas fa-coins text-warning" > <?= $_SESSION["poin"]  ?> </i></h4>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <a href="soal.php" class="btn btn-primary">Soal Selanjutnya</a>
        </div>
    </div>
    
</div>
<?php include 'footer.php'; ?>