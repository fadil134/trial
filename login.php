<?php
include 'konek.php';
        $user = $_POST['username'];
        $password = $_POST['pass'];

        $sql = "select * from userid where username= '$user' && pass= '$password'";
        $result = mysqli_query($conn,$sql);
//$user_sess = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = $user;
if(mysqli_num_rows($result) == 1){

        header("Location:index.php");
        exit();
        //echo $_POST['username'];
        //header("location:session.php");
        //echo "<br>";
        //echo $user_sess['username'];

//echo $_SESSION['username'];
}
header("Location:signin.php");
 /*else {


//echo "Your Session = ".$_SESSION['username'];
}*/
?>