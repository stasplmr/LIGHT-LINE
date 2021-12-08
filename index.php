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
    </div>
    <div id="main-content">
        <h1>LIGHT-LINE fitness</h1>
        <div id="time-block">
            <a href="//24timezones.com/%D0%9A%D0%B8%D1%97%D0%B2/%D1%87%D0%B0%D1%81" style="text-decoration: none" class="clock24"
               id="tz24-1636572173-c1367-eyJob3VydHlwZSI6IjI0Iiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIxIiwic2hvd3RpbWV6b25lIjoiMCIsInR5cGUiOiJkIiwibGFuZyI6InVrIn0=" title="" target="_blank" rel="nofollow"><?php echo $lang['KTime']?></a>
            <script type="text/javascript" src="https://w.24timezones.com/l.js" async></script>
        </div>
        <div id="weather">
            <?php
                echo "<a class='weatherwidget-io' href='https://forecast7.com/".$currentLang."/50d4530d52/kiev/' data-label_1='KYIV'
                                     data-label_2='WEATHER' data-mode='Current' data-days='3' data-textcolor='#ffffff' >".$lang['KWeather']."</a>";
            ?>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);
                    js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
        <h2><?php echo $lang['Timetable']?></h2>
        <table class="schedule">
            <th><?php echo $lang['Day']?></th>
            <th><?php echo $lang['WorkTime']?></th>
            <tr>
                <td><?php echo $lang['Mon']?></td>
                <td>8:00 - 21:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Tue']?></td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Wed']?></td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Thu']?></td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Fri']?></td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Sat']?></td>
                <td>9:00 - 22:00</td>
            </tr>
            <tr>
                <td><?php echo $lang['Sun']?></td>
                <td>9:00 - 20:00</td>
            </tr>
        </table>
    </div>
    <div id="description">
        <div class="text">
            <h3><?php echo $lang['Opportunities']?></h3>
            <?php echo $lang['firstOpportunity']?><br>
            <?php echo $lang['secondOpportunity']?><br>
            <?php echo $lang['thirdOpportunity']?><br>
            <?php echo $lang['fourthOpportunity']?><br>
            <?php echo $lang['fifthOpportunity']?><br>
            <?php echo $lang['sixthOpportunity']?><br>
            <?php echo $lang['seventhOpportunity']?><br>
            <?php echo $lang['eighthOpportunity']?><br>
        </div>


        <div id="gallery" style="display:none; width: 40%; margin: 3%; float: left">
            <img alt="Preview Image 1"
                 src="images/photo-1.jpg" data-image="images/photo-1.jpg">
            <img alt="Preview Image 2"
                 src="images/photo-2.jpg" data-image="images/photo-2.jpg">
            <img alt="Preview Image 3"
                 src="images/photo-3.jpg" data-image="images/photo-3.jpg">
            <img alt="Preview Image 4"
                 src="images/photo-4.jpg" data-image="images/photo-4.jpg">
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#gallery").unitegallery();
            });
        </script>
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
