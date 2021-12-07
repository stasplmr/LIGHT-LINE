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
<div id="main-content">
    <div id="gallery" style="margin:0 auto;display:none;">
        <img alt="Відео 1"
             data-type="youtube"  src="https://i.ytimg.com/vi/NeRFo07uBOE/mqdefault.jpg"
             data-image="https://i.ytimg.com/vi/NeRFo07uBOE/sddefault.jpg"
             data-description="Відео 1"
             data-videoid="NeRFo07uBOE" style="display:none">
        <img alt="Відео 2"
             data-type="youtube"  src="https://i.ytimg.com/vi/w_JRuEkhDLI/mqdefault.jpg"
             data-image="https://i.ytimg.com/vi/w_JRuEkhDLI/sddefault.jpg"
             data-description="Відео 2"
             data-videoid="w_JRuEkhDLI" style="display:none">
        <img alt="Відео 3"
             data-type="youtube"  src="https://i.ytimg.com/vi/s7RuFvp-QcY/mqdefault.jpg"
             data-image="https://i.ytimg.com/vi/s7RuFvp-QcY/sddefault.jpg"
             data-description="Відео 3"
             data-videoid="s7RuFvp-QcY" style="display:none">
        <img alt="Відео 4"
             data-type="youtube"  src="https://i.ytimg.com/vi/TJqG7jZAIEU/mqdefault.jpg"
             data-image="https://i.ytimg.com/vi/TJqG7jZAIEU/sddefault.jpg"
             data-description="Відео 4"
             data-videoid="TJqG7jZAIEU" style="display:none">
        <img alt="Відео 5"
             data-type="youtube"  src="https://i.ytimg.com/vi/Klk7U-hP35s/mqdefault.jpg"
             data-image="https://i.ytimg.com/vi/Klk7U-hP35s/sddefault.jpg"
             data-description="Відео 5"
             data-videoid="Klk7U-hP35s" style="display:none">
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("#gallery").unitegallery({
                theme_skin:"slider"
            });
        });
    </script>

</div>
<div id="footer">
        LIGHT-LINE fitness 2021<br><?php echo $lang['selectedLang']?>
        <ul class="social-links">
            <li><a class="icon-ukr" href="trainees.php?lang=uk" title="..." rel="noopener"></a></li>
            <li><a class="icon-eng" href="trainees.php?lang=en" title="..." rel="noopener"></a></li>
            <li><a class="icon-rus" href="trainees.php?lang=ru" title="..." rel="noopener"></a></li>
        </ul>
</div>
</body>
</html>