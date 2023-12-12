
<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="form-login">
    <?php flash('login') ?>
    <form method="post" action="./controllers/Users.php">
    <h3>Please Login Here</h3>
    <input type="hidden" name="type" value="login">
        <label for="username">Username</label>
        <input type="text" name="name/email"  placeholder="Username/Email...">
        <label for="password">Password</label>
        <input type="password" name="usersPwd"  placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
        <label for=""></label>
        <a class ="form-sub-msg" href="./signup.php">Belum Punya Akun?</a>
    </form>
    </div>
<?php 
?>