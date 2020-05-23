<?php 
session_start();

if(isset($_GET['pageSet'])){
    session_unset();
    session_destroy();
}

if(isset($_SESSION["name"])){
  header('Location:remember.php');
}
?>
<?php include 'header.php';?>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <img src="img/logo.png" style="width: 670px;height:200px;">
          <br><br><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center text-center">
          <form action="soal.php" method="POST">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Anda" require>
            </div>
            <div class="form-group mt-3">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" require>
            </div>
            <button type="submit" name="btn-play" class="btn btn-primary">Mainkan</button>
          </form>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
