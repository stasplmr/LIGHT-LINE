<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>LIGHT-LINE fitness</title>

    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='unitegallery/themes/slider/ug-theme-slider.js'></script>
</head>
<body>
    <div id="header">
        <img src="images/logo.png" class="logo">
        <table class="nav-table">
            <tr>
                <td><a href="index.html">Головна</a></td>
                <td><a href="subscriptions.html">Абонементи</a></td>
                <td><a href="gallery.html">Галерея</a></td>
                <td><a href="trainees.html">Тренери</a></td>
                <td><a href="JavaScript: alert('Дана сторінка знаходиться у стані розробки')">Розклад</a></td>
            </tr>
        </table>
        <form id="auth-form">
            <h3>Авторизація</h3>
            <input type="text" name="login" placeholder="Логін">
            <input type="password" name="password" placeholder="Пароль"><br>
            <input type="submit" value="Увійти" onclick="alert('Наразі функцію авторизації вимкнено')">
        </form>
    </div>
    <div id="content">
        <h1>LIGHT-LINE fitness</h1>
        <h2>Графік роботи нашого фітнес клубу</h2>
        <div id="time-block">
            <a href="//24timezones.com/%D0%9A%D0%B8%D1%97%D0%B2/%D1%87%D0%B0%D1%81" style="text-decoration: none" class="clock24"
            id="tz24-1636572173-c1367-eyJob3VydHlwZSI6IjI0Iiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIxIiwic2hvd3RpbWV6b25lIjoiMCIsInR5cGUiOiJkIiwibGFuZyI6InVrIn0="
            title="" target="_blank" rel="nofollow">Час в  Києві</a>
            <script type="text/javascript" src="https://w.24timezones.com/l.js" async></script>
        </div>
        <div id="weather">
           <a class="weatherwidget-io" href="https://forecast7.com/uk/50d4530d52/kiev/" data-label_1="KYIV"
           data-label_2="WEATHER" data-mode="Current" data-days="3" data-textcolor="#ffffff" >KYIV WEATHER</a>
            <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);
            js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
        <table class="schedule">
            <th>День:</th>
            <th>Час роботи:</th>
            <tr>
                <td>ПН</td>
                <td>8:00 - 21:00</td>
            </tr>
            <tr>
                <td>ВТ</td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td>СР</td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td>ЧТ</td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td>ПТ</td>
                <td>8:00 - 22:00</td>
            </tr>
            <tr>
                <td>СБ</td>
                <td>9:00 - 22:00</td>
            </tr>
            <tr>
                <td>НД</td>
                <td>9:00 - 20:00</td>
            </tr>
        </table>
    </div>

    <div id="description">
        <div class="text">
            <h3>Наш сайт надає такі можливості:</h3>
            •	Вибір абонементів та додаткових послуг до нього<br>
            •	Ознайомлення з тренерським складом клубу<br>
            •	Створення акаунту (як тренерського, так і клієнтського)<br>
            •	Оцінювання якості роботи тренера<br>
            •	Створення індивідуального фітнес-плану<br>
            •	Перегляд робочого графіку тренера<br>
            •	Перегляд новин клубу<br>
            •	Перегляд блогу тренера<br>
        </div>


        <div id="gallery" style="display:none; width: 40%; margin: 3%; float: left">
            <img alt="Preview Image 1"
                 src="images/photo-1.jpg"
                 data-image="images/photo-1.jpg">
            <img alt="Preview Image 2"
                 src="images/photo-2.jpg"
                 data-image="images/photo-2.jpg">
            <img alt="Preview Image 3"
                 src="images/photo-3.jpg"
                 data-image="images/photo-3.jpg">
            <img alt="Preview Image 4"
                 src="images/photo-4.jpg"
                 data-image="images/photo-4.jpg">
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#gallery").unitegallery();
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
