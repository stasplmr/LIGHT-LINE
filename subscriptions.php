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
<div id="content">
    <ul id="menu">
        <h2>Доступні абонементи:</h2>
        <li><a href="subscriptions_standard.php">Standard</a></li>
        <li><a href="subscriptions_premium.php">Premium+</a></li>
        <li><a href="subscriptions_lux.php">LUX</a></li>
    </ul>
    <div class="subs-description">
        <h2>Оберіть абонемент</h2>
    </div>
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