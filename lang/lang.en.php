<?php
    setcookie('currentLang', 'en', time() + (3600 * 24 * 30 * 6));
    $lang= array(
        "Main" => "Main",
        "Subs" => "Subscriptions",
        "Gallery" => "Gallery",
        "Trainers" => "Trainers",
        "Schedule" => "Schedule",
        "Auth" => "Authorization",
        "Login" => "Login",
        "PWord" => "Password",
        "SignIn" => "Sign in",
        "SignUp" => "Sign up",
        "KTime" => "Time in Kyiv",
        "KWeather" => "Weather in Kyiv",
        "Timetable" => "Working hours of our fitness club",
        "Day" => "Day:",
        "WorkTime" => "Working hours:",
        "Mon" => "Mon",
        "Tue" => "Tue",
        "Wed" => "Wed",
        "Thu" => "Thu",
        "Fri" => "Fri",
        "Sat" => "Sun",
        "Sun" => "Sat",
        "Opportunities" => "Our site provides the following features:",
        "firstOpportunity" => "• Choice of subscriptions and additional services to it",
        "secondOpportunity" => "• Getting acquainted with the coaching staff of the club",
        "thirdOpportunity" => "• Creating an account (both coaching and client)",
        "fourthOpportunity" => "• Evaluating the quality of the coach's work",
        "fifthOpportunity" => "• Creating an individual fitness plan",
        "sixthOpportunity" => "• View the coach's work schedule",
        "seventhOpportunity" => "• View club news",
        "eighthOpportunity" => "• View the coach's blog",
        "selectedLang" => "Selected language: English",
        'availableSubs' => 'Available subscriptions',
        'choose' => 'Choose a subscription',
        "month" => "1 month",
        "halfYear" => "6 months",
        "year" => "1 year",
        "luxDesc" => "Services included in the 'LUX' subscription: gym, cardio, group classes, swimming pool, sauna and massage center, SPA-zone, as well as the opportunity to use the following additional services: individual classes with coach, equipment rental, consultation with a nutritionist, attending author's courses and classes. Subscription options: ",
        'luxList' => "1. 2 Guest visits <br>
                           2. Freezing for the time of lockdown <br>
                           3. Fitness counseling <br>
                           4. Free use of mini safe <br>
                           5. 15% discount on additional services <br>
                           6. Free provision of towels and bath sets with each visit to the hall <br>
                           7. 10% discount on meals in the cafe hall <br>
                           8. Freezing for 2 months <br>
                           9. Use of LUXURY locker room <br> ",
        "luxTime" => "Visiting time: <br>
                              Weekdays (8: 00-22: 00) <br>
                              Sat (9: 00-22: 00) <br>
                              Sun (9: 00-20: 00) <br> ",
        "luxMonthFeatures" => "Features: This subscription allows you to visit the areas available for the LUX category for 1 month and if desired to extend your subscription for 6/12 months.
                               <br> Advantages: ",
        "luxMonthAdvantages" => "<br> • 10% discount on the purchase of a new 'LUX' season ticket with a term of 6 months or a year
                                 <br> • 1 free consultation with a nutritionist ",
        "luxHalfFeatures" => "Features: This subscription allows you to visit the areas available for the LUX category for 6 months and if desired to extend your subscription for 12 months.
                              <br> Advantages: ",
        "luxHalfAdvantages" => "<br> • 10% discount on the purchase of a new 'LUX' season ticket with a validity period of 1 year
                                <br> • 20% discount on the purchase of 30 individual lessons with a coach
                                <br> • 5 free classes in group author training ",
        "luxYearFeatures" => "Features: This subscription allows you to visit the zones available for the LUX category for 1 year and, if desired, renew your subscription for 1 year.
                              <br> Advantages: ",
        "luxYearAdvantages" => "<br> • 15% discount on the purchase of a new 'LUX' season ticket with a validity period of 1 year
                                <br> • 10% discount on attending group classes for 6-12 months
                                <br> • 5 free classes in group author training
                                <br> • 1 free consultation with a nutritionist ",
        "standardDesc" => "Services included in the 'Standard' subscription: gym, cardio, group classes, swimming pool, as well as the opportunity to use the following additional services: individual classes with a coach, equipment rental, visit to the SPA-zone. Subscription options: <br> ",
        "standardList" => "1. Two guest visits <br>
                           2. Freezing for the time of lockdown <br>
                           3. Fitness Consulting <br> ",
        "standardTime" => "Visiting time: <br>
                           Weekdays (8: 00-22: 00) <br>
                           Sat (9: 00-22: 00) <br>
                           Sun (9: 00-20: 00) <br> ",
        "standardMonthFeatures" => "Features: This subscription allows you to visit the zones available for the Standard category for 1 month and if you wish to extend your subscription for 6/12 months.
                                    <br> Advantages: ",
        "standardMonthAdvantages" => "<br> • 15% discount on the purchase of a new 'Standard' season ticket with a term of 6 months or a year
                                      <br> • 10% discount on the purchase of a new season ticket such as “Premium +” / “LUX” with a term of 6 months or a year
                                      <br> • 10% discount on monthly equipment rental ",
        "standardHalfFeatures" => "Features: This subscription allows you to visit the zones available for the Standard category for 6 months and if you wish to extend your subscription for 12 months.
                                   <br> Advantages: ",
        "standardHalfAdvantages" => "<br> • 15% discount on the purchase of a new 'Standard' season ticket with a validity period of 1 year
                                     <br> • 10% discount on the purchase of a new season ticket type 'Premium +' / 'LUX' with a term of 1 year
                                     <br> • 10% discount on the purchase of 20 individual lessons with a coach
                                     <br> • Month of free use of mini safe ",
        "standardYearFeatures" => "Features: This subscription allows you to visit areas available for the Standard category for 1 year and, if desired, renew your subscription for 1 year.
                                   <br> Advantages: ",
        "standardYearAdvantages" => "<br> • 15% discount on the purchase of a new 'Standard' season ticket with a validity period of 1 year
                                     <br> • 10% discount on the purchase of a new season ticket type 'Premium +' / 'LUX' with a term of 1 year
                                     <br> • 10% discount on attending group classes for 6-12 months
                                     <br> • 2 months of free use of mini safe
                                     <br> • 10% discount on meals in the club's cafe ",
        "premiumDesc" => "Premium + services: gym, cardio, group classes, swimming pool, sauna and massage center, as well as the possibility to use the following additional services: individual lessons with a coach, equipment rental , visiting the SPA-zone, consulting a nutritionist, attending author's courses and classes. Subscription options: ",
        "premiumList" => "1. 2 Guest Visits <br>
                          2. Freezing for the time of lockdown <br>
                          3. Fitness counseling <br>
                          4. Free use of mini safe <br>
                          5. 3 free visits to the SPA <br>
                          6. 10% discount on additional services <br>
                          7. Freezing for 2 months <br> ",
        "premiumTime" => "Visiting Time: <br>
                          Weekdays (8: 00-22: 00) <br>
                          Sat (9: 00-22: 00) <br>
                          Sun (9: 00-20: 00) <br> ",
        "premiumMonthFeatures" => "Features: This subscription allows you to visit the areas available for the Premium + category for 1 month and if you wish to extend your subscription for 6/12 months.
                                   <br> Advantages: ",
        "premiumMonthAdvantages" => "<br> • 10% discount on the purchase of a new subscription type 'Premium +'/'LUX' with a term of 6 months or a year
                                     <br> • 10% discount on monthly equipment rental
                                     <br> • 1 free consultation with a nutritionist ",
        "premiumHalfFeatures" => "Features: This subscription allows you to visit the areas available for the Premium + category for 6 months and if you wish to extend your subscription for 12 months.
                                  <br> Advantages: ",
        "premiumHalfAdvantages" => "<br> • 10% discount on the purchase of a new subscription type 'Premium +'/'LUX' with a term of 1 year
                                    <br> • 10% discount on the purchase of 20 individual lessons with a coach
                                    <br> • 15% discount on visiting the SPA-zone
                                    <br> • 1 free lesson in group author training ",
        "premiumYearFeatures" => "Features: This subscription allows you to visit the areas available for the Premium + category for 1 year and, if desired, renew your subscription for 1 year.
                                  <br> Advantages: ",
        "premiumYearAdvantages" => "<br> • 15% discount on the purchase of a new subscription type 'Premium +'/'LUX' with a term of 1 year
                                    <br> • 10% discount on attending group classes for 6-12 months
                                    <br> • 10% discount on meals in the club's cafe
                                    <br> • 15% discount on visiting the SPA-zone
                                    <br> • 3 free classes in group author training "
    );
?>