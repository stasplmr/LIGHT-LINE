<?php
include('config/db_connect.php');

session_start();

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."team5hash");

$query = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";
$run_query = mysqli_query($conn, $query);

if(mysqli_num_rows($run_query) == 0){
  echo "Такой пользователь не найден.";
	exit();
}
else if(mysqli_num_rows($run_query) == 1) {
  $results = mysqli_fetch_all($run_query, MYSQLI_ASSOC);
  if($results[0]['role'] == 1) {
    $_SESSION['admin-id'] = $results[0]['ID'];
    $_SESSION['admin'] = true;
  }
  $_SESSION['user'] = $login;
  header('Location: index.php');
}
?>

