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
        <h3>LUX</h3>
        Послуги, котрі входять до абонементу "LUX ": заняття у тренажерному залі, кардіозалі, групові заняття, відвідування басейну, відвідування сауни та масажного центру, SPA-зони, а також можливість скористатися такими додатковими послугами: індивідуальні заняття з тренером, оренда обладнання, консультації з дієтологом, відвідування авторських курсів та занять.
        Можливості абонемента:<br>
        <ol>
            <li>2 Гостьові візити</li>
            <li>Замороження на час локдауну</li>
            <li>Фітнес консультування</li>
            <li>Безкоштовне користування міні сейфом</li>
            <li>15% знижки на додаткові послуги</li>
            <li>Безкоштовне надання рушників та банних наборів при кожному відвідуванні залу</li>
            <li>10% знижки на харчування в кафе залу</li>
            <li>Замороження на 2 місяці</li>
            <li>Користування ЛЮКС-роздягальнею</li>
        </ol>
        Час відвідування:<br>
        Будні дні (8:00-22:00)<br>
        Сб (9:00-22:00)<br>
        Нд (9:00-20:00)<br>
        <h4>1 місяць (LUX)</h4>
        Особливості: даний абонемент  надає можливість відвідувати зони доступні для категорії LUX протягом 1 місяця та за бажанням продовжити свій абонемент на  6/12 місяців.        <br>Переваги:
        <ul>
            <li>Знижка 10% на покупку нового абонемента типу “ LUX ” з терміном використання 6 місяців або рік</li>
            <li>1 безкоштовна консультація з дієтологом</li>
        </ul>
        <h4>6 місяців (LUX)</h4>
        Особливості: даний абонемент  надає можливість відвідувати зони доступні для категорії LUX протягом 6 місяців та за бажанням продовжити свій абонемент на  12 місяців.
        <br>Переваги:
        <ul>
            <li>Знижка 10% на покупку нового абонемента типу “ LUX ” з терміном використання  1 рік</li>
            <li>Знижка 20% на покупку 30 індивідуальних занять з тренером</li>
            <li>5 безкоштовних занять в груповому авторському тренуванні</li>
        </ul>
        <h4>1 рік (LUX)</h4>
        Особливості: даний абонемент  надає можливість відвідувати зони доступні для категорії LUX протягом 1 року та за бажанням оновити свій абонемент на 1 рік.
        <br>Переваги:
        <ul>
            <li>Знижка 15% на покупку нового абонемента типу “LUX” з терміном використання  1 рік</li>
            <li>Знижка 10% на відвідування групових занять протягом 6-12 місяців</li>
            <li>5 безкоштовних занять в груповому авторському тренуванні</li>
            <li>1 безкоштовна консультація з дієтологом</li>
        </ul>
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