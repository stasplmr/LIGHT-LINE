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
    <?php include('header.php'); ?>
<div id="content">
  <div id="center-block">
  <h1><?=$lang['Registration']?></h1>
      <h2><?=$error_msg?></h2>
      <h2><?=$lang['FillFields']?>
      <span title="Обов'язкові поля відмічено зірочікою *">поля </span></h2>
      <form action="check.php" method="post">
        <div id="accordion">
          <h3><?=$lang['InfoAboutUser']?></h3>
          <div>
                  <input name="name" type="text" data-rule="name" placeholder="<?=$lang['Name']?>*"><br>
                  <input name="surname" type="text" data-rule="surname" placeholder="<?=$lang['Surname']?>*"><br><br>
          </div>
          <h3><?=$lang['UserSettings']?></h3>
          <div>
              <input name="login" data-rule="login" placeholder="<?=$lang['Login']?>*"><br>
              <input name="pass" data-rule="password" type="password" placeholder="<?=$lang['PWord']?>*"><br>
          </div>
        </div>
        <input type="submit" name="submit" value="<?=$lang['SignUp']?>">
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
