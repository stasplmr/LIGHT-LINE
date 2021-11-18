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
                <td><a href="index.php">Головна</a></td>
                <td><a href="subscriptions.php">Абонементи</a></td>
                <td><a href="gallery.php">Галерея</a></td>
                <td><a href="trainees.php">Тренери</a></td>
                <td><a href="JavaScript: alert('Дана сторінка знаходиться у стані розробки')">Розклад</a></td>
            </tr>
        </table>
    <div id="auth-form">
        <form>
            <h3>Авторизація</h3>
            <input type="text" name="login" placeholder="Логін">
            <input type="password" name="password" placeholder="Пароль"><br>
            <input type="submit" value="Увійти" onclick="alert('Наразі функцію авторизації вимкнено')">
        </form>
    <input id="sign-up" type="submit" value="Зареєструватися" onclick="location.href='sign-up.php'">
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
    LIGHT-LINE fitness 2021<br>
    <ul class="social-links">
        <li><a class="icon-twitter" href="https://twitter.com" title="..." target="_blank" rel="noopener"></a></li>
        <li><a class="icon-facebook" href="https://facebook.com" title="..." target="_blank" rel="noopener"></a></li>
        <li><a class="icon-instagram" href="https://instagram.com" title="..." target="_blank" rel="noopener"></a></li>
        <li><a class="icon-pinterest" href="https://pinterest.com" title="" target="_blank" rel="noopener"></a></li>
    </ul>
</div>
</body>
</html>