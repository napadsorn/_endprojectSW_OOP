<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="css/stylelogin.css">

</head>
<style>
body
{   
    background-image: url('images/bg-01.jpg');
    background-size: 100%;
}

.kuybank{
    text-align: center;
    margin-top: 500px;
  

}.register{
    color: White;
    font-size: 20px;
    margin-top: ;
}
</style>
<body>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>


    <form class ="box" action="checkloinb.php" method="post">
    <h1>LOGIN</h1>
       
        <input type="text" name="username" placeholder="Username" required>    
       
        <input type="password" name="password" placeholder="Password" required> 
       
        <input type="submit" name="submit" value="Login">
 
         
    </form>
    <div class ="kuybank">
    <a class="register" href="registerb.php" > ลงทะเบียน </a>
    </div>
</body>
</html>

<?php 
    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }
?>