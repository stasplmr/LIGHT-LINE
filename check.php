<?php
include('config/db_connect.php');

echo var_dump($_POST);

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Неприпустима довжина логіна.";
	exit();
}
else if(mb_strlen($name) < 5){
	echo "Неприпустима довжина імені.";
	exit();
}

$pass = md5($pass."team5hash");
$query = " SELECT * FROM users WHERE login = '{$login}' ";
$run_query = mysqli_query($conn, $query);
if(mysqli_num_rows($run_query) > 0){
  $error_msg = "Помилка: цей логін вже використовується";
  header("Location: sign-up.php");
} else{
  $query = " INSERT INTO users(ID, login, pass, name, surname, role)
  VALUES(NULL, '$login', '$pass', '$name', '$surname', 3)";
  $run_query = mysqli_query($conn, $query);
  if($run_query == true) {
    $msg_success = "Реєстрація успішна";
    header("Location: index.php");
  } else {
    $error_msg = "Виникла помилка!";
    header("Location: sign-up.php");
  }
}

echo $error_msg;
echo $msg_success;
echo $pass;
mysqli_close($conn);

?>
