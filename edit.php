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
  <?php
  include('header.php');
  ?>
  <div id="main-content">
    <div class="add-news">
  <?php
  include('config/db_connect.php');
  $admin_id = $_SESSION['admin-id'];
  $id = $_GET['id'];
  if((isset($_POST['update']) == '1')) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $query = "UPDATE news SET name = '$name', text = '$text' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      echo('Error select news: '. mysqli_error($conn));
    }else{
      echo $lang['NewsEdited'];
      }
  }
  if($_GET['a'] == 'delete') {
    $query = "DELETE FROM news WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      echo('Error delete news: '. mysqli_error($conn));
    }else{
        ?>
        <h3><?=$lang['NewsDeleted']?></h3>
        <?php
      }
  }
  if($_GET['a'] == 'edit') {
    $query = "SELECT name, text, date, author FROM news WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      echo('Error select news: '. mysqli_error($conn));
    }else{
      if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_object($result);
      }
      ?>
      <form name="form1" method="POST" action="edit.php?a=edit&id=<?=$id?>&update=1">
        <table align="center" color="white" width="50%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%"><?=$lang['NewsHeading']?></td>
            <td><input name="name" type="text" id="name" value="<?=$row->name?>"></td>
          </tr>
          <tr>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td><?=$lang['NewsText']?></td>
            <td><textarea name="text" id="text"><?=$row->text?></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input name="hiddenField" type="hidden" value="update">
                <input name="update" type="submit" id="update" value="<?=$lang['Update']?>">
              </div></td>
          </tr>
        </table>
      </form>
      <?php
    }
  }
    ?>
    </div>
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
