<?php
    setcookie('currentLang', 'ru', time() + (3600 * 24 * 30 * 6));
    $lang = array(
        "Main" => "Главная",
        "Subs" => "Абонементы",
        "Gallery" => "Галерея",
        "News" => "Новости",
        "Trainers" => "Тренеры",
        "Schedule" => "Расписание",
        "Auth" => "Авторизация",
        "Login" => "Логин",
        "PWord" => "Пароль",
        "SignIn" => "Войти",
        "SignUp" => "Зарегистрироваться",
        "KTime" => "Время в Киеве",
        "KWeather" => "Погода в Киеве",
        "Timetable" => "График работы нашего фитнес клуба",
        "Day" => "День:",
        "WorkTime" => "Время работы:",
        "Mon" => "ПН",
        "Tue" => "ВТ",
        "Wed" => "СР",
        "Thu" => "ЧТ",
        "Fri" => "ПТ",
        "Sat" => "СБ",
        "Sun" => "ВС",
        "Opportunities" => "Наш сайт предоставляет такие возможности:",
        "firstOpportunity" => "• Выбор абонементов и дополнительных услуг к нему",
        "secondOpportunity" => "• Ознакомление с тренерским составом клуба ",
        "thirdOpportunity" => "• Создание аккаунта (как тренерского, так и клиентского) ",
        "fourthOpportunity" => "• Оценка качества работы тренера ",
        "fifthOpportunity" => "• Создание индивидуального фитнес-плана",
        "sixthOpportunity" => "• Просмотр рабочего графика тренера ",
        "seventhOpportunity" => "• Просмотр новостей клуба ",
        "eighthOpportunity" => "• Просмотр блога тренера ",
        "selectedLang" => "Выбраный язык: Русский",
        'availableSubs' => 'Доступные абонементы',
                'choose' => 'Выберите абонемент',
        "month" => "1 месяц",
        "halfYear" => "6 месяцев",
        "year" => "1 год",
        "luxDesc" => "Услуги, входящие в абонемент 'LUX': занятия в тренажерном зале, кардиозале, групповые занятия, посещение бассейна, посещение сауны и массажного центра, SPA-зоны, а также возможность воспользоваться следующими дополнительными услугами: индивидуальные занятия по тренером, аренда оборудования, консультации с диетологом, посещение авторских курсов и занятий. Возможности абонемента:",
        'luxList' => "1. 2 Гостевые визиты <br>
                           2. Заморозка на время локдауна.
                           3. Фитнес консультирование <br>
                           4. Бесплатное пользование мини сейфом <br>
                           5. 15% скидки на дополнительные услуги.
                           6. Бесплатное предоставление полотенец и банных наборов при каждом посещении зала <br>
                           7. 10% скидки на питание в кафе зала.
                           8. Заморозка на 2 месяца.
                           9. Пользование ЛЮКС-раздевалкой <br>",
        "luxTime" => "Время посещения:<br>
                              Будние дни (8:00-22:00)<br>
                              Сб (9:00-22:00)<br>
                              Вс (9:00-20:00)<br>",
        "luxMonthFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории LUX в течение 1 месяца и по желанию продлить свой абонемент на 6/12 месяцев.
                               <br>Преимущества:",
        "luxMonthAdvantages" => "<br> • Скидка 10% на покупку нового абонемента типа “LUX” со сроком использования 6 месяцев или год
                                 <br> • 1 бесплатная консультация с диетологом",
        "luxHalfFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории LUX в течение 6 месяцев и по желанию продлить свой абонемент на 12 месяцев.
                              <br>Преимущества:",
        "luxHalfAdvantages" => "<br> • Скидка 10% на покупку нового абонемента типа “LUX” со сроком использования 1 год
                                <br> • Скидка 20% на покупку 30 индивидуальных занятий с тренером
                                <br> • 5 бесплатных занятий в групповой авторской тренировке",
        "luxYearFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории LUX в течение 1 года и по желанию обновить свой абонемент на 1 год.
                              <br> Преимущества:",
        "luxYearAdvantages" => "<br> • Скидка 15% на покупку нового абонемента типа “LUX” со сроком использования 1 год
                                <br> • Скидка 10% на посещение групповых занятий в течение 6-12 месяцев
                                <br> • 5 бесплатных занятий в групповой авторской тренировке
                                <br> • 1 бесплатная консультация с диетологом",
        "standardDesc" => "Услуги, входящие в абонемент 'Standard': занятия в тренажерном зале, кардиозале, групповые занятия, посещение бассейна, а также возможность воспользоваться следующими дополнительными услугами: индивидуальные занятия с тренером, аренда оборудования, посещение SPA-зоны. Возможности абонемента:<br>",
        "standardList" => "1. Два гостевых визита<br>
                           2. Заморозка на время локдауна<br>
                           3. Фитнес консультации<br>",
        "standardTime" => "Время посещения:<br>
                           Будние дни (8:00-22:00)<br>
                           Сб (9:00-22:00)<br>
                           Вс (9:00-20:00)<br>",
        "standardMonthFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Standard в течение 1 месяца и по желанию продлить свой абонемент на 6/12 месяцев.
                                    <br>Преимущества:",
        "standardMonthAdvantages" => "<br> • Скидка 15% на покупку нового абонемента типа “Standard” со сроком использования 6 месяцев или год
                                      <br> • Скидка 10% на покупку нового абонемента типа “Premium+”/“LUX” со сроком использования 6 месяцев или год
                                      <br> • Скидка 10% на месячную аренду оборудования",
        "standardHalfFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Standard в течение 6 месяцев и по желанию продлить свой абонемент на 12 месяцев.
                                   <br>Преимущества:",
        "standardHalfAdvantages" => "<br> • Скидка 15% на покупку нового абонемента типа “Standard” со сроком использования 1 год
                                     <br> • Скидка 10% на покупку нового абонемента типа “Premium+”/“LUX” со сроком использования 1 год
                                     <br> • Скидка 10% на покупку 20 индивидуальных занятий с тренером
                                     <br> • Месяц бесплатного пользования мини сейфом",
        "standardYearFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Standard в течение 1 года и по желанию обновить свой абонемент на 1 год.
                                   <br>Преимущества:",
        "standardYearAdvantages" => "<br> • Скидка 15% на покупку нового абонемента типа “Standard” со сроком использования 1 год
                                     <br> • Скидка 10% на покупку нового абонемента типа “Premium+”/“LUX” со сроком использования 1 год
                                     <br> • Скидка 10% на посещение групповых занятий в течение 6-12 месяцев
                                     <br> • 2 месяца бесплатного пользования мини сейфом
                                     <br> • 10% скидки на питание в кафе клуба",
        "premiumDesc" => "Услуги, входящие в абонемент 'Premium+': занятия в тренажерном зале, кардиозале, групповые занятия, посещение бассейна, посещение сауны и массажного центра, а также возможность воспользоваться такими дополнительными услугами: индивидуальные занятия с тренером, аренда оборудования , посещение SPA-зоны, консультации с диетологом, посещение авторских курсов и занятий. Возможности абонемента:",
        "premiumList" => "1. 2 Гостевые визиты <br>
                          2. Заморозка на время локдауна.
                          3. Фитнес консультирование <br>
                          4. Бесплатное пользование мини сейфом <br>
                          5. 3 бесплатных визита в SPA <br>
                          6. 10% скидки на дополнительные услуги.
                          7. Заморозка на 2 месяца <br>",
        "premiumTime" => "Время посещения:<br>
                          Будние дни (8:00-22:00)<br>
                          Сб (9:00-22:00)<br>
                          Вс (9:00-20:00)<br>",
        "premiumMonthFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Premium+ в течение 1 месяца и по желанию продлить свой абонемент на 6/12 месяцев.
                                   <br> Преимущества:",
        "premiumMonthAdvantages" => "<br> • Скидка 10% на покупку нового абонемента типа “Premium+”/“LUX ” со сроком использования 6 месяцев или год
                                     <br> • Скидка 10% на месячную аренду оборудования
                                     <br> • 1 бесплатная консультация с диетологом",
        "premiumHalfFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Premium+ в течение 6 месяцев и по желанию продлить свой абонемент на 12 месяцев.
                                  <br> Преимущества:",
        "premiumHalfAdvantages" => "<br> • Скидка 10% на покупку нового абонемента типа “Premium+”/“LUX ” со сроком использования 1 год
                                    <br> • Скидка 10% на покупку 20 индивидуальных занятий с тренером
                                    <br> • Скидка 15% на посещение SPA-зоны
                                    <br> • 1 бесплатное занятие в групповой авторской тренировке",
        "premiumYearFeatures" => "Особенности: данный абонемент позволяет посещать зоны доступные для категории Premium+ в течение 1 года и по желанию обновить свой абонемент на 1 год.
                                  <br> Преимущества:",
        "premiumYearAdvantages" => "<br> • Скидка 15% на покупку нового абонемента типа “Premium+”/“LUX ” со сроком использования 1 год
                                    <br> • Скидка 10% на посещение групповых занятий в течение 6-12 месяцев
                                    <br> • 10% скидки на питание в кафе клуба
                                    <br> • Скидка 15% на посещение SPA-зоны
                                    <br> • 3 бесплатных занятия в групповой авторской тренировке"
    );
?>
