<?php
include('config/db_connect.php');
$login = $_POST['login'];
$sql = "SELECT * FROM USERS WHERE login like '$login'";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($res)) {
    echo "Ім'я: ".$row['name']."<br>";
    echo "Прізвище:".$row['surname'];
}

?>