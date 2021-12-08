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

    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='unitegallery/themes/slider/ug-theme-slider.js'></script>


</head>
<body>
  <div id="main-content">
  <?php
  include('header.php');
  include('config/db_connect.php');

  $query = "SELECT id, name, text, date FROM news ORDER BY date DESC";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo('Error selecting news:'. mysqli_error($conn));
  } else {
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_object($result))
      {?>
        <div class="news-container">
          <h1><?=$row->name;?></h1><br>
          <p><?=$row->text;?></p>
          <h5><?=$row->date; ?></h5>
          <font size="-2"><a href="edit.php?a=edit&id=<?=$row->id; ?>">edit</a> |
          <a href="edit.php?a=delete&id=<?=$row->id; ?>">delete</a></font>
        </div>
      <?php }
    } else {
       echo '<font size="-2">No news in the database</font>';
    }
      mysqli_close($conn);
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
</body>
</html>
