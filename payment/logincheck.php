<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connected";
}else{
    echo "error in connection";
}
$db = mysqli_select_db($con, 'dash');
if(isset($_POST['submit'])){
    $username = $_POST['userName'];
    $userpassword = $_POST['userPassword'];

    $sql = "select * FROM users where username='$username' and password='$userpassword'";

    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row ==1){
            echo "Login Successful";
            $_SESSION['user'] = $username;
            $_SESSION['pass'] = $userpassword;
            // header('location:adminloginpage.php');
            header('location:checkOrder.php');

        }else {
            $_SESSION['failed']="Invalid Credentials";
            echo "login failed";
            header('location:index.php');
        
    }

}

?>