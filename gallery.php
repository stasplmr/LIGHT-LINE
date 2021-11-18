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