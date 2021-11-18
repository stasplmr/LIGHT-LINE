<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $( function() {
            $( "#accordion" ).accordion();
            $( "input[type='radio']" ).checkboxradio({
                icon: false
            });
            $( document ).tooltip();
            $( "#datepicker" ).datepicker();
        } );
    </script>
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
    <div id="center-block">
    <h1>Реєстрація</h1>
        <h2>Заповніть наведені нижче
        <span title="Обов'язкові поля відмічено зірочікою *">поля </span></h2>
        <form id="accordion">
            <h3>Інформація про користувача</h3>
            <div>
                    <input type="text" data-rule="name" placeholder="Ім'я*"><br>
                    <input type="text" data-rule="surname" placeholder="Прізвище*"><br><br>
                    <input type="text" id="datepicker" placeholder="Дата народження*"><br>
            </div>
            <h3>Налаштування акаунту</h3>
            <div>
                <input data-rule="email" placeholder="Email*"><br>
                <input data-rule="password" type="password" placeholder="Пароль*"><br>
                <input data-rule="password-confirmation" type="password" placeholder="Підтвердження паролю*"><br>
            </div>
            <h3>Вибір абонементу</h3>
            <div>
                <fieldset>
                    <legend>Доступні абонементи</legend>
                    <label for="radio-1">Standard</label>
                    <input type="radio" name="radio-1" id="radio-1">
                    <label for="radio-2">Premium+</label>
                    <input type="radio" name="radio-1" id="radio-2">
                    <label for="radio-3">LUX</label>
                    <input type="radio" name="radio-1" id="radio-3">
                </fieldset>
            </div>
            <h3>Додаткова інформація</h3>
            <div>
                <input type="text" class="additional-info" placeholder="Додаткова інформація про себе"><br><br>
            </div>
        </form>
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