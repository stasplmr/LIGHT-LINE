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
    <?php include('header.php');?>
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
