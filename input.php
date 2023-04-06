<?php

include 'konek.php';

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$query = "INSERT INTO userid (username, firstname, lastname, pass, email) VALUES ('$username', '$firstname', '$lastname', '$pass', '$email')";

$cek = "select * from userid where username= '$username'";
$hasil = mysqli_num_rows(mysqli_query($conn,$cek));


if ($hasil < 1){
    $konek->query($query);
    header("Location: sign-in.php");
} else {
    header("Location: sign-up.php");
}
mysqli_close($konek);

?>