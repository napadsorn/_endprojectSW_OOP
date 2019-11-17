<?php 
    session_start();
    if (isset($_POST['username'])) {
        include('connect.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') {// เด้งไปหน้า
                header("Location: หน้าแรกบุคลากร.php");
            }
            if ($_SESSION['userlevel'] == 'm') {
                header("Location: หน้าแรกบุคคลทั่วไป.php");
            }
            if ($_SESSION['userlevel'] == 'p'){
                header("Location: page_addmin.php");
            }
            
           
        } 
        else {
           
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง');</script>";
            header("Location: loginb.php");
           
        }
    } else {
        header("Location: loginb.php");
    }
?>
