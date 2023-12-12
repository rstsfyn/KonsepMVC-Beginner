<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <div class="background">    
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <?php flash('register') ?>
    <div class="form-signup">
    <form method="post" action="./controllers/Users.php">
        <h3 class="header">Please Signup</h3>
        <input type="hidden" name="type" value="register">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" name="usersName" 
        placeholder="Masukkan Nama Lengkap">
        <label for="userEmail">Email</label>
        <input type="text" name="usersEmail" 
        placeholder="Masukkan email">
        <label for="username">Username</label>
        <input type="text" name="usersUid" 
        placeholder="Masukan Username">
        <label for="username">Password</label>
        <input type="password" name="usersPwd" 
        placeholder="Masukkan Password">
        <button type="submit" name="submit">Sign Up</button>
        <label for=""></label>
        <a class ="form-sub-msg" href="./login.php">Sudah Punya Akun?</a>
    </form>
    </div>
<?php 
?>