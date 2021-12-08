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
    <script>
        $( function() {
            $( "#menu" ).menu();
        } );

        $( function () {
            $('#menu').height($('.subs-description').height());
        })
    </script>
    <link rel="stylesheet" href="style.css">
    <title>LIGHT-LINE fitness</title>
</head>
<body>
  <?php include('header.php');?>
<div id="content">
    <ul id="menu">
        <h2><?php echo $lang['availableSubs'] ?></h2>
        <li><a href="subscriptions_standard.php">Standard</a></li>
        <li><a href="subscriptions_premium.php">Premium+</a></li>
        <li><a href="subscriptions_lux.php">LUX</a></li>
    </ul>
    <div class="subs-description">
        <h2><?php echo $lang['choose']?></h2>
    </div>
</div>
<div id="footer">
        LIGHT-LINE fitness 2021<br><?php echo $lang['selectedLang']?>
        <ul class="social-links">
            <li><a class="icon-ukr" href="subscriptions.php?lang=uk" title="..." rel="noopener"></a></li>
            <li><a class="icon-eng" href="subscriptions.php?lang=en" title="..." rel="noopener"></a></li>
            <li><a class="icon-rus" href="subscriptions.php?lang=ru" title="..." rel="noopener"></a></li>
        </ul>
</div>
</body>
</html>
