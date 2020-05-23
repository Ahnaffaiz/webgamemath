<?php
    
    session_start();
    if(!isset($_SESSION["name"])){
        if(empty($_POST["name"]) ||empty($_POST["email"]) ) {
            header('Location:index.php');
        }
        else {
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
        }
        
    }

    //untuk merandom angka
    $num1 = rand(0,20);
    $num2 = rand(0,20);

    if(!isset($_SESSION["poin"])){
        $_SESSION["poin"] = 0;
        $_SESSION["lives"] = 5;
    }
    
    $_SESSION["num1"] = $num1;
    $_SESSION["num2"] = $num2;
    $_SESSION["result"] = $num1 + $num2;
    

    
?>
<?php include 'header.php';?>
<div class="container my-5">
    <div class="row  text-center">
        <div class="col-12"><h3>Hello <?= $_SESSION["name"] ?>, Tetap semangat ya... You can do the best</h3></div>
    </div>
    <div class="row mt-2">
        <div class="col-5 text-right">
            <h4><i class="fa fa-heart" aria-hidden="true" style="color: #F14A4A">  
            <?php 
                if(!isset($_SESSION["lives"])){
                    echo 0;
                } else {
                    echo $_SESSION["lives"];
                }
                ?>
            </i></h4>
        </div>
        <div class="col-2 text-center">
            <h3>|</h3>
        </div>
        <div class="col-5 text-left">
            <h4><i class="fas fa-coins text-warning" > 
            <?php 
            if(!isset($_SESSION["poin"])){
                echo 0;
            } else {
                echo $_SESSION["poin"];
            }
            ?> </i></h4>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 250px">
    <div class="row align-items-center">
        <div class="col-6 text-right">
            <h4>Berapa Hasil dari <?= "$num1 + $num2"?>=</h4>
        </div>
        <div class="col-6 text-left">
            <form action="result.php" method="GET">
                <input type="number" name="answer" id="answer" class="form-control w-25 d-inline" placeholder="jawab disini">
                <button class="btn btn-primary" type="submit">Jawab</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>