<?php 
    include_once 'header.php'
?>
    <div class="container">
    <div class="text" >
    <h1 id="index-text">Hallo!, <?php if(isset($_SESSION['usersId'])){
            echo explode(" ", $_SESSION['usersName'])[0];
        }else{
            echo 'Dekk';
        } 
    ?> </h1>
    </div>
    </div>

<?php 
?>