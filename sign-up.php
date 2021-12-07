<?php
    @session_start();
    $languageArray = array("en", "uk", "ru");
    if (isset($_COOKIE['currentLang'])) {
        $defaultLang = $_COOKIE['currentLang'];
    } else {
        $defaultLang = "uk";
    }

    if(@$_SESSION['currentLang']) {
        if(!in_array($_SESSION['currentLang'], $languageArray)) {
            $_SESSION['currentLang'] = $defaultLang;
        }
    }
    else {
        $_SESSION['currentLang'] = $defaultLang;
    }
    $language = addslashes($_GET['lang']);
    if($language) {
        if(!in_array($language, $languageArray)) {
            $_SESSION['currentLang'] = $defaultLang;
        }
        else {
            $_SESSION['currentLang'] = $language;
        }
    }
    $currentLang = addslashes($_SESSION['currentLang']);
    include_once ("lang/lang.".$currentLang.".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $( function() {
            $( "#accordion" ).accordion();
            $( "input[type='radio']" ).checkboxradio({
                icon: false
            });
            $( document ).tooltip();
            $( "#datepicker" ).datepicker();
        } );
    </script>
    <title>LIGHT-LINE fitness</title>
</head>
<body>
    <div id="header">
        <img src="images/logo.png" class="logo">
        <table class="nav-table">
            <tr>
                <td><a href="index.php"><?php echo $lang['Main']?></a></td>
                <td><a href="subscriptions.php"><?php echo $lang['Subs']?></a></td>
                <td><a href="gallery.php"><?php echo $lang['Gallery']?></a></td>
                <td><a href="trainees.php"><?php echo $lang['Trainers']?></a></td>
                <td><a href="JavaScript: alert('err')"><?php echo $lang['Schedule']?></a></td>
            </tr>
            <tr>
                <td colspan="5">
                    <ul class="social-links">
                        <li><a class="icon-twitter" href="https://twitter.com" title="..." target="_blank" rel="noopener"></a></li>
                        <li><a class="icon-facebook" href="https://facebook.com" title="..." target="_blank" rel="noopener"></a></li>
                        <li><a class="icon-instagram" href="https://instagram.com" title="..." target="_blank" rel="noopener"></a></li>
                        <li><a class="icon-pinterest" href="https://pinterest.com" title="" target="_blank" rel="noopener"></a></li>
                    </ul>
                </td>
            </tr>
        </table>
        <div id="auth-form">
            <form>
                <h3><?php echo $lang['Auth']?></h3>
                <input type="text" name="login" placeholder="<?php echo $lang['Login']?>">
                <input type="password" name="password" placeholder="<?php echo $lang['PWord']?>"><br>
                <input type="submit" value="<?php echo $lang['SignIn']?>">
            </form>
        <input id="sign-up" type="submit" value="<?php echo $lang['SignUp']?>" onclick="location.href='sign-up.php'">
        </div>
    </div>
<div id="content">
  <div id="center-block">
  <h1>Реєстрація</h1>
      <h2><?=$error_msg?></h2>
      <h2>Заповніть наведені нижче
      <span title="Обов'язкові поля відмічено зірочікою *">поля </span></h2>
      <form action="check.php" method="post">
        <div id="accordion">
          <h3>Інформація про користувача</h3>
          <div>
                  <input name="name" type="text" data-rule="name" placeholder="Ім'я*"><br>
                  <input name="surname" type="text" data-rule="surname" placeholder="Прізвище*"><br><br>
          </div>
          <h3>Налаштування акаунту</h3>
          <div>
              <input name="login" data-rule="login" placeholder="Логін*"><br>
              <input name="pass" data-rule="password" type="password" placeholder="Пароль*"><br>
          </div>
        </div>
        <input type="submit" name="submit" value="Зареєструватися">
      </form>
  </div>
</div>
<div id="footer">
        LIGHT-LINE fitness 2021<br><?php echo $lang['selectedLang']?>
        <ul class="social-links">
            <li><a class="icon-ukr" href="sign-up.php?lang=uk" title="..." rel="noopener"></a></li>
            <li><a class="icon-eng" href="sign-up.php?lang=en" title="..." rel="noopener"></a></li>
            <li><a class="icon-rus" href="sign-up.php?lang=ru" title="..." rel="noopener"></a></li>
        </ul>
</div>
</body>
</html>
