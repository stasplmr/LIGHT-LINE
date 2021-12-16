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
    <link rel="stylesheet" href="style.css">
    <title>LIGHT-LINE fitness</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='unitegallery/themes/slider/ug-theme-slider.js'></script>


</head>
<body>
  <?php
  include('header.php');
  include('config/db_connect.php');
  ?>
  <div id="main-content">
  <form id="searchNews" method="POST">
  <input type="text" name="login" placeholder="Пошук користувача за логіном">
  <button type="submit">Шукати!</button>
  </form>
  <p id="result"></p>
  </div>
  <div id="footer">
          LIGHT-LINE fitness 2021<br><?php echo $lang['selectedLang']?>
          <ul class="social-links">
              <li><a class="icon-ukr" href="index.php?lang=uk" title="..." rel="noopener"></a></li>
              <li><a class="icon-eng" href="index.php?lang=en" title="..." rel="noopener"></a></li>
              <li><a class="icon-rus" href="index.php?lang=ru" title="..." rel="noopener"></a></li>
          </ul>
  </div>
<script>
    $('#searchNews').submit(function() {
        var str = $(this).serialize();
        $.ajax({
            method: "POST",
            url: "searchUser.php",
            data: str,
            success: function (html) {
            $('#result').html(html);
            }
        })
    return false;
    });
</script>
</body>
</html>
