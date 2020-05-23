<?php 
session_start();
?>
<?php include 'header.php' ?>
<div class="container my-5 text-center">
    <div class="row">
        <div class="col-12"><h3>Hello <?= $_SESSION["name"] ?>, Sayang Permainan sudah selesai, Semoga lain kali bisa lebih baik <i class="fas fa-smile"></i></h3> </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <h5>Score anda : <i class="fas fa-coins text-warning"> <?= $_SESSION["poin"] ?> </i></h5>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <a href="index.php" class="btn btn-primary">Main Lagi</a>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col">
            <h4>10 Top Score GameMath</h4>
        </div> 
    </div>
    <div class="row text-center mt-2 d-flex justify-content-center">
        <div class="col-8 text-center">
            <table class="table table-bordered table-striped table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Poin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include_once("config.php");
                        $sql_query = "SELECT * FROM `tb_users` ORDER BY `point` DESC LIMIT 10";
                        $sql = mysqli_query($koneksi, $sql_query);
                        while($row = mysqli_fetch_array($sql)) {
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['point']."</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php';     ?>