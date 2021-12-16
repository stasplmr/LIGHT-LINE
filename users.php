<?php
    @session_start();
    if (! $_SESSION['admin'])
    header('Location: error.php');
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

    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='unitegallery/themes/slider/ug-theme-slider.js'></script>

</head>
<body>
  <?php include('header.php');
  ?>
  <div id="main-content">
  <p id="time"></p>
  <?php
  include('config/db_connect.php');
  $sql = "SELECT users.name as name, users.surname as surname, roles.name as role
  FROM Users INNER JOIN roles ON users.role = roles.id";
  if ($result = $conn->query($sql)) {
    echo "<table class='schedule'><th>Ім'я</th><th>Прізвище</th><th>Роль</th>";
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['surname']."</td>";
        echo "<td>".$row['role']."</td>";

    }
    echo "</table>";
  }
  ?>
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
    function showTime() {
        $.ajax({
                url: "time.php",
                cache: false,
                success: function(html) {
                    $('p#time').html(html);
                }
            })
    };
    showTime();
    setInterval('showTime()', 1000);
  </script>


</body>
</html>
