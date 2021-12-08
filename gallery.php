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
    <script type='text/javascript' src='unitegallery/themes/tiles/ug-theme-tiles.js'></script>

</head>
<body>
    <?php include('header.php');?>

<div id="gallery" style="display:none; margin: 1%;">
    <img alt="" src="images/gallery/img1.jpg"
         data-image="images/gallery/img1.jpg">
    <img alt="" src="images/gallery/img2.jpg"
         data-image="images/gallery/img2.jpg">
    <img alt="" src="images/gallery/img3.jpg"
         data-image="images/gallery/img3.jpg">
    <img alt="" src="images/gallery/img4.jpg"
         data-image="images/gallery/img4.jpg">
    <img alt="" src="images/gallery/img6.jpg"
         data-image="images/gallery/img6.jpg">
    <img alt="" src="images/gallery/img5.jpg"
         data-image="images/gallery/img5.jpg">
    <img alt="" src="images/gallery/img7.jpg"
         data-image="images/gallery/img7.jpg">
    <img alt="" src="images/gallery/img8.jpg"
         data-image="images/gallery/img8.jpg">
    <img alt="" src="images/gallery/img9.jpg"
         data-image="images/gallery/img9.jpg">
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#gallery").unitegallery({
            tiles_type:"nested",
            tiles_nested_optimal_tile_width: 500
        });
    });
</script>

<div id="footer">
        LIGHT-LINE fitness 2021<br><?php echo $lang['selectedLang']?>
        <ul class="social-links">
            <li><a class="icon-ukr" href="gallery.php?lang=uk" title="..." rel="noopener"></a></li>
            <li><a class="icon-eng" href="gallery.php?lang=en" title="..." rel="noopener"></a></li>
            <li><a class="icon-rus" href="gallery.php?lang=ru" title="..." rel="noopener"></a></li>
        </ul>
</div>
</body>
</html>
