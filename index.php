<?php
/*
Theme Name: Taplink
*/
?>
<?php get_header() ?>
<?php
  /* include 'messege-bot.php'; */
?> 

<main>
    <section id="title">
        <div class="title-wrapper">
            <div class="title-text">
                <h2>Вирішимо вашу проблему<br> <span>без болю</span></h2>
                <p>Для запису на консультацію залиште, будь ласка, онлайн заявку<br>
                    або напишіть нам у месенджері.</p>
                <div id="feedback-title" class="feedback">
                    <a href="#specialists-popup" class="button-specialists-popup">Онлайн-запис на прийом</a>
                    <a href="#networks" class="button-networks">Ми у соцмережах</a>
                    <a href="#contacts" class="button-contacts">Наші контакти</a>
                </div>
            </div>
            <div class="title-img">
                <div class="text-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Marker-min.svg" alt="Marker" width="12" />
                    <p>
                        23 роки у сфері<br>
                        краси та здоров'я
                    </p>
                </div>
                <div class="text-midle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Marker-min.svg" alt="Marker" width="12" />
                    <p>Без болю вирішу<br>проблеми стоп та нігтів</p>
                </div>
                <div class="text-bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Marker-min.svg" alt="Marker" width="12" />
                    <p>Працюю з<br>найскладнішими<br> випадками</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Img-title.jpg" class="title-photo" alt="Woman" width="500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Frame-7.jpg" class="title-photo-mobile" alt="Woman" width="300">
            </div>

        </div>
    </section>
    <section id="admission">
        <div class="admission-wrapper">
            <button class="scroll-top">
                <span class="go-top"></span>
            </button>
            <h3>Як проходить прийом</h3>
            <div class="admission-blocks">
                <div class="admission-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/admission-icons1.svg" alt="Icons" width="52">
                    <p>Проведення діагностики</p>
                </div>
                <div class="admission-line_top-mobile"></div>
                <div class="admission-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/admission-icons2.svg" alt="Icons" width="52">
                    <p>Збір анамнезу</p>
                </div>
                <div class="admission-line_bootom-mobile"></div>
                <div class="admission-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/admission-icons3.svg" alt="Icons" width="52">
                    <p>Проведення апаратної обробки рельєфу стопи</p>
                </div>
            </div>
        </div>
    </section>
    <section id="help">
        <div class="help-wrapper">
            <div class="help-img">
                <img class="help-img-desctop" src="<?php echo get_template_directory_uri(); ?>/assets/img/help-img.jpg" alt="Woman" width="409">
                <img class="help-img-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/hand_1.jpg" alt="Рука" width="100">
            </div>
            <div class="help-containt">
                <h3>З чим ми вам допоможемо</h3>
                <ul class="help-list">
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>врісший ніготь</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>тріщини на п'ятах</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>омозолілість</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>стрижневі мозолі</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>оніхолізис</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>оніхогрифоз</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>оніхокриптоз (грибок)</p>
                    </li>
                    <li class="help-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/help-icons.svg" alt="Marker" width="24">
                        <p>бородавки</p>
                    </li>
                </ul>
                <div id="help-feedback" class="feedback">
                    <a href="#specialists-popup">Онлайн-запис на прийом</a>
                </div>
            </div>
        </div>
    </section>
    <section id="price">
        <div class="price-wrapper">
            <h3>Ціни на послуги</h3>
            <p>(актуально на 2024 рік)</p>
            <button class="accordion">
                Послуги професiйного подолога
            </button>
            <div class="panel">
                <div class="price-block">
                    <div class="price-left">
                        <h4>Консультація (30хв)</h4>
                        <p>(при виконанні процедури консультація безкоштовна) Діагностика стопи,забір анамнезу,алгоритм вирішення проблеми,рекомендації.</p>
                    </div>
                    <div class="price-right">
                        <h4>400</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Парамедичний педикюр</h4>
                        <p>Обробка стопи та нігтьової пластини, нанесення засобів по догляду за стопою.</p>
                    </div>
                    <div class="price-right">
                        <h4>1000</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Парамедичний педикюр (підвищенної складності)</h4>
                        <p>З використанням насадки OMNICUT,вирішення проблеми гіпергідрозу, обробка ділянок стопи з помірним ороговінням.</p>
                    </div>
                    <div class="price-right">
                        <h4>1200</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Парамедицинський педикюр (найвищої складності)</h4>
                        <p>З використанням насадки OMNICUT,обробка гіперкератозу,розшивання тріщин,видалення піднігтьової мозолі.</p>
                    </div>
                    <div class="price-right">
                        <h4>1500</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Забір аналізів (мікроскопія)</h4>
                        <p>(нігті та шкіра)</p>
                    </div>
                    <div class="price-right">
                        <h4>900</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Травмований ніготь</h4>
                        <p>(зачистка гематоми)</p>
                    </div>
                    <div class="price-right">
                        <p>1 ніготь -</p>
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Мозолі</h4>
                        <p>(залежно від складності)</p>
                    </div>
                    <div class="price-right">
                        <p>від</p>
                        <h4>200</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Видалення бородавок</h4>
                        <p>(1 од.)</p>
                    </div>
                    <div class="price-right">
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Індивідуальні розвантажувальні устілки</h4>
                        <p>(в залежності від кількості елементів розвантаження)</p>
                    </div>
                    <div class="price-right">
                        <p>від</p>
                        <h4>1000</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Індивідуальні ортози</h4>
                        <p>(в залежності від складності)</p>
                    </div>
                    <div class="price-right">
                        <p>від</p>
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Виготовлення розвантажувального бандажу</h4>
                    </div>
                    <div class="price-right">
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Обробка кутикули та зачистка нігтів уражених оніхомікозом</h4>
                        <p>(без обробки стоп)</p>
                    </div>
                    <div class="price-right">
                        <h4>1000</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Зачистка уражених оніхомікозом нігтів</h4>
                        <p>(без обробки кутикули)</p>
                    </div>
                    <div class="price-right">
                        <div>
                            <p>1 ніготь -</p>
                            <h4>300</h4>
                            <p>₴</p>
                        </div>
                        <div>
                            <p>10 нігтів -</p>
                            <h4>700</h4>
                            <p>₴</p>
                        </div>

                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Зачистка оніхогрифозу</h4>
                    </div>
                    <div class="price-right">
                        <p>1 ніготь -</p>
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Травмований ніготь</h4>
                        <p>(зачистка гематоми)</p>
                    </div>
                    <div class="price-right">
                        <p>1 ніготь -</p>
                        <h4>300</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Резекція взрослого нігтя</h4>
                        <p>(в залежності від складності)</p>
                    </div>
                    <div class="price-right">
                        <h4>500-800</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Встановлення тампонади</h4>
                        <p>(каполін,лігозано)</p>
                    </div>
                    <div class="price-right">
                        <p>1 ніготь -</p>
                        <h4>200</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Лікування гранульоми</h4>
                    </div>
                    <div class="price-right">
                        <h4>200</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Встановлення титанової нитки</h4>
                    </div>
                    <div class="price-right">
                        <h4>1200</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Встановлення скоби Фрезера</h4>
                    </div>
                    <div class="price-right">
                        <h4>1600</h4>
                        <p>₴</p>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-left">
                        <h4>Встановлення скоби ЗТО</h4>
                    </div>
                    <div class="price-right">
                        <h4>1800</h4>
                        <p>₴</p>
                    </div>
                </div>
            </div>

            <div class="feedback-price">
                <div class="feedback">
                    <a href="#specialists-popup">Онлайн-запис на прийом</a>
                </div>
            </div>
        </div>
    </section>
    <section id="video">
        <div class="video-wrapper">
            <h3>Поради фахівця</h3>
            <!--                 <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-09-01_06-17-50_tatjana.mp4" controls width="400" height="600"></video> -->
            <div class="video-slider">
                <div class="video-slider-item">
                    <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-09-01_06-17-50_tatjana.mp4" controls width="400" height="600"></video>
                </div>
                <div class="video-slider-item">
                    <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-11-01_05-39-09.mp4" controls width="400" height="600"></video>
                </div>
                <div class="video-slider-item">
                    <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-11-01_05-51-37.mp4" controls width="400" height="600"></video>
                </div>
                <div class="video-slider-item">
                    <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-11-01_05-51-45.mp4" controls width="400" height="600"></video>
                </div>
                <div class="video-slider-item">
                    <video class="video" src="<?php echo get_template_directory_uri(); ?>/assets/img/video_2023-11-01_05-51-45 (2).mp4" controls width="400" height="600"></video>
                </div>
            </div>

        </div>
    </section>
    <section id="gallery">
        <div class="gallery-wrapper">
            <h3>Робота на результат</h3>
            <div class="gallery-slider">
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/299456107_111558358330402_8608070599847051671_n.jpg" alt="Образец работ" width="300">
                </div>
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/299192802_111558394997065_2549117933337878049_n-1.jpg" alt="Образец работ" width="300">
                </div>
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/299012197_111447508341487_8938160002684775631_n-2.jpg" alt="Образец работ" width="300">
                </div>
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/341160011_256271876822576_2368714230203144447_n-3.jpg" alt="Образец работ" width="300">
                </div>
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/299763309_111558104997094_4055186589857860341_n-4.jpg" alt="Образец работ" width="300">
                </div>
                <div class="gallery-slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tatjanapodologia_116916308_2025279080949095_4280072969820019091_n.jpg" alt="Образец работ" width="300">
                </div>
            </div>
        </div>
    </section>
    <section id="reviews">
        <div class="reviews-wrapper">
            <h3>Відгуки</h3>
            <div class="reviews-slider">

                <div class="reviews-slider-item">
                    <div class="reviews-title">
                        <h4>Федіна Людмила</h4>
                        <p>02.04.2023</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stars.svg" alt="Stars" width="61">
                    </div>
                    <div class="reviews-text">
                        <p>
                            "Рекомендую! Дійсно, професіонал і фанат
                            своєї справи! І як людина дуже
                            хороша,<br>
                            приємно до таких ходити. Я залишилась задоволена у вирішенні моєї проблеми,<br>
                            за один сеанс і адекватної ціни!"
                        </p>
                    </div>
                </div>
                <div class="reviews-slider-item">
                    <div class="reviews-title">
                        <h4>Наталія</h4>
                        <p>25.03.2023</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stars.svg" alt="Stars" width="61">
                    </div>
                    <div class="reviews-text">
                        <p>
                            Дякую за чудово
                            виконаний манікюр) Ви
                            просто майстер своєї
                            справи🥰 Вже тиждень
                            нігіткам, а вони як нові
                            та й дизайн супер, всі
                            колеги в захваті😍
                        </p>
                    </div>
                </div>
                <div class="reviews-slider-item">
                    <div class="reviews-title">
                        <h4>Олена</h4>
                        <p>11.04.2023</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stars.svg" alt="Stars" width="61">
                    </div>
                    <div class="reviews-text">
                        <p>
                            Добрий день! Хотіла б
                            залишити Вам свій
                            вдячний відгук. Не
                            змінювала майстра дуже
                            давно і було трішки
                            нервово) Але залишилась
                            неймовірно задоволена))
                            Ви велика молодець❤️👍👌
                        </p>
                    </div>
                </div>
                <div class="reviews-slider-item">
                    <div class="reviews-title">
                        <h4>Марія</h4>
                        <p>26.04.2023</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stars.svg" alt="Stars" width="61">
                    </div>
                    <div class="reviews-text">
                        <p>
                            Жанночка, хотiла дуже
                            подякувати за Вашу
                            роботу. Ви - майстер
                            своєї справи) з
                            задоволенням раджу Вас
                            своїм подругам та
                            колегам!!! Все так
                            акуратно і з такою
                            турботою, що хочеться
                            повертатись до Вас знов
                            і знов❤️Дуже Вам дякую🥰
                        </p>
                    </div>
                </div>
            </div>


            <div id="feedback-reviews" class="feedback">
                <a href="http://localhost/wordpress-6.1.1-uk/wordpress/form-reviews/">Залишити свій відгук</a>

            </div>
        </div>
    </section>
    <section id="diplomas">
        <div class="diplomas-wrapper">
            <h3>Дипломи</h3>
            <div class="diplomas-slider">
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_1.jpg" alt="Диплом" width="347"></div>
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_2.jpg" alt="Диплом" width="347"></div>
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_3.jpg" alt="Диплом" width="347"></div>
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_1.jpg" alt="Диплом" width="347"></div>
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_2.jpg" alt="Диплом" width="347"></div>
                <div class="diplomas-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diplomas_3.jpg" alt="Диплом" width="347"></div>
            </div>
        </div>
    </section>
    <section id="contacts">
        <div class="contacts-wrapper">
            <div class="contacts-left">
                <h3>Контакти</h3>
                <div class="contacts-blocks">
                    <div class="contacts-block">
                        <a href="https://goo.gl/maps/wMZBgE1FMwaQf7e79">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.svg" alt="Icons" width="36" />
                        </a>
                        <p>м. Київ, вул. Князів Острозьких (колишня Московська) 17/2</p>
                    </div>
                    <div class="contacts-block">
                        <a href="tel:+380509345777"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt="Icons" width="36" /><span>+38 050 934 5777</span></a>

                    </div>
                    <div class="contacts-block">
                        <a href="tel:+380509345777"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tel.svg" alt="Icons" width="36" /></a>
                        <p>Пн-Нд з 9:00 до 20:00</p>
                    </div>
                    <div class="contacts-block">
                        <a href="mailto:tkachenko.podology@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/admission-icons2.svg" alt="Icons" width="36">
                            <span>tkachenko.podology@gmail.com</span>
                        </a>
                    </div>
                </div>

                <div class="contacts-networks">
                    <p>Ми в соц. мережах:</p>
                    <div class="networks">
                        <a href="https://t.me/Tatiana_Podologist"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-telegram.svg" alt="Telegram" width="32"></a>
                        <a href="https://www.facebook.com/podiatryacademy"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-facebook.svg" alt="FB" width="32"></a>
                        <a href="https://www.instagram.com/tatjanapodologia/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/insta.svg" alt="Instagram" width="32"></a>
                    </div>
                </div>
            </div>
            <div class="contacts-right">
                <a href="https://goo.gl/maps/wMZBgE1FMwaQf7e79">
                    <img class="map-desctop" src="<?php echo get_template_directory_uri(); ?>/assets/icons/map.svg" alt="Map" width="642">
                </a>
            </div>
            <div class="contacts-networks-mobile">
                <a href="https://t.me/Tatiana_Podologist"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-telegram.svg" alt="Telegram" width="45"></a>
                <a href="https://www.facebook.com/podiatryacademy"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-facebook.svg" alt="FB" width="45"></a>
                <a href="https://www.instagram.com/tatjanapodologia/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/insta.svg" alt="Instagram" width="45"></a>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>