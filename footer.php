<footer>
    <div class="footer-wrapper">
        <div class="footer-logo">
            <a href="#header"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Logotype" width="60"></a>
            <div class="logo-text">
                <h1>Т<span class="logo-span">етяна</span> Т<span class="logo-span">каченко</span></h1>
                <p>Професійний подолог-наставник</p>
            </div>
        </div>
        <div class="footer-contacts">
            <p>м. Київ, вул. Князів Острозьких (колишня Московська) 17/2</p>
            <a href="tel:+380509345777">+38 050 934 5777</a>
            <p>Пн-Нд з 9:00 до 20:00</p>
            <a href="mailto:tkachenko.podology@gmail.com">tkachenko.podology@gmail.com</a>
        </div>
        <nav class="footer-nav">
            <ul class="footer-list">
                <li class="footer-item"><a href="#diplomas" class="footer-link">Про мене</a></li>
                <li class="footer-item"><a href="#price" class="footer-link">Ціни</a></li>
                <li class="footer-item"><a href="#contacts" class="footer-link">Контакти</a></li>
                <li class="footer-item"><a href="https://tkachenko-beauty.com.ua/offer/" class="footer-link">Договір оферти</a></li>
            </ul>
        </nav>
        <div class="footer-networks">
            <div class="footer-networks-icons">
                <a href="https://t.me/Tatiana_Podologist"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-telegram.svg" alt="Telegram" width="32"></a>
                <a href="https://www.facebook.com/podiatryacademy"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic_baseline-facebook.svg" alt="FB" width="32"></a>
                <a href="https://www.instagram.com/tatjanapodologia/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/insta.svg" alt="Instagram" width="32"></a>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bankcard.png" alt="Банківські карти" width="100">
            </div>
        </div>
    </div>
</footer>




<!-- Popup -->

<!-- Спецiалiсти-->

<div id="specialists-popup" class="popup">
    <a href="#popup" class="popup_area"></a>
    <div class="popup_body">
        <div class="popup_content">
            <div class="popup-header-logo">
                <a href="#popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Logotype" width="60"></a>
                <div class="popup-logo-text">
                    <h2>Т<span class="popup-logo-span">етяна</span> Т<span class="popup-logo-span">каченко</span></h2>
                    <p>Професійний подолог-наставник</p>
                </div>
            </div>
            <a href="http://localhost/wordpress-6.1.1-uk/wordpress/" class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" alt="Arrow" width="9.95">
                <p>Назад</p>
            </a>
            <a href="http://localhost/wordpress-6.1.1-uk/wordpress/" class="close-mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-back.svg" alt="Arrow" width="9.95">
            </a>
            <h3>Онлайн-запис на прийом</h3>
            <div class="specialists-popup_text">
                <h4>Виберіть спеціаліста</h4>
                <a href="#servis-popup">
                    <div class="specialists-block">
                        <div class="spesialists-block-left">
                            <h4>Тетяна Ткаченко</h4>
                            <p><span>Топ-майстер,</span> засновниця студії, подолог, стаж роботи 23 роки</p>
                        </div>
                        <div class="spesialists-block-right_1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/specialists-press.svg" class="plus" alt="Кнопка" width="32">
                        </div>
                        <div class="spesialists-block-right_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/specialists-press-active.svg" alt="Кнопка" width="32">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Подолог -->

<form class="podolog">
    <input type="hidden" name="project_name" value="Студия Татьяны Ткаченко">
    <input type="hidden" name="admin_email" value="semenovgrigorij57@gmail.com">
    <input type="hidden" name="form_subject" value="Выбор услуг подолога">


    <div id="servis-popup" class="popup">

        <a href="#specialists-popup" class="popup_area"></a>
        <div class="popup_body">
            <div class="popup_content">
                <div class="popup-header-logo">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Logotype" width="60"></a>
                    <div class="popup-logo-text">
                        <h2>Т<span class="popup-logo-span">етяна</span> Т<span class="popup-logo-span">каченко</span></h2>
                        <p>Професійний подолог-наставник</p>
                    </div>
                </div>
                <a href="#specialists-popup" class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" alt="Arrow" width="9.95">
                    <p>Назад</p>
                </a>
                <a href="#specialists-popup" class="close-mobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-back.svg" alt="Arrow" width="9.95">
                </a>
                <h3>Онлайн-запис на прийом</h3>
                <div class="popup_text-servis">
                    <h4>Виберати послугу</h4>

                    <div class="block-servis">
                        <label for="consultation">
                            <div id="img-container-1" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Консультація (30хв)</h4>
                                    <div class="price-top-right-servis">
                                        <h4>400</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при виконанні процедури консультація<br> безкоштовна). Діагностика
                                        стопи,
                                        збір<br>
                                        анамнезу,
                                        алгоритм рішення проблеми,<br> рекомендації.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-1" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-1" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="consultation" class="input" type="checkbox" name="Консультація" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="pedicure_1">
                            <div id="img-container-2" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Парамедичний педикюр</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1000</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>
                                        Обробка стопи та нігтьової пластини, нанесення засобів по догляду за стопою<br>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-2" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-2" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="pedicure_1" class="input" type="checkbox" name="Парамедичний педикюр" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="paramedical_2">
                            <div id="img-container-3" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Парамедичний педикюр (підвищенної складності)</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1200</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>З використанням насадки OMNICUT,вирішення проблеми гіпергідрозу,обробка ділянок стопи з помірним ороговінням<br>
                                        (при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div id="img-container-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-3" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-3" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="paramedical_2" class="input" type="checkbox" name="Парамедицинський педикюр" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="paramedical+">
                            <div id="img-container-4" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Парамедичний педикюр (найвищої складності)</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1500</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>З використанням насадки OMNICUT,обробка гіперкератозу,розшивання тріщин,видалення піднігтьової мозолі.
                                        <br>
                                        (при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-4">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-4" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-4" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="paramedical+" class="input" type="checkbox" name="Парамедицинський педикюр повищеної складності" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="wart-removal">
                            <div id="img-container-5" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Забір аналізів (мікроскопія)</h4>
                                    <div class="price-top-right-servis">
                                        <h4>900</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>нігті та шкіра,<br>
                                        (при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-5">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-5" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-5" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="wart-removal" class="input" type="checkbox" name="Забір аналізів (мікроскопія)
                                            " value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="injury">
                            <div id="img-container-6" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Травмований ніготь</h4>
                                    <div class="price-top-right-servis">
                                        <p>1 ніготь -</p>
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(зачистка гематоми,<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-6" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="s6" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="injury" class="input" type="checkbox" name="Травмований ніготь" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="corn">
                            <div id="img-container-7" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Мозолі</h4>
                                    <div class="price-top-right-servis">
                                        <p>від</p>
                                        <h4>200</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(залежно від складності, при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-7">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-7" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-7" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="corn" class="input" type="checkbox" name="Мозолі" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="wart">
                            <div id="img-container-8" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Видалення бородавок</h4>
                                    <div class="price-top-right-servis">
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(1 од., при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-8">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-8" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-8" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="wart" class="input" type="checkbox" name="Видалення бородавок" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="insoles">
                            <div id="img-container-9" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Індивідуальні розвантажувальні устілки</h4>
                                    <div class="price-top-right-servis">
                                        <p>від</p>
                                        <h4>1000</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(в залежності від кількості елементів розвантаження,<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-9">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-9" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-9" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="insoles" class="input" type="checkbox" name="Індивідуальні розвантажувальні устілки" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="ortose">
                            <div id="img-container-10" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Індивідуальні ортози</h4>
                                    <div class="price-top-right-servis">
                                        <p>від</p>
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(в залежності від складності, при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-10">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-10" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-10" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="ortose" class="input" type="checkbox" name="Індивідуальні ортози" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="bandage">
                            <div id="img-container-11" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Виготовлення розвантажувального бандажу</h4>
                                    <div class="price-top-right-servis">
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-11">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-11" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-11" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="bandage" class="input" type="checkbox" name="Виготовлення розвантажувального бандажу" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="onihomicose">
                            <div id="img-container-12" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Обробка кутикули та зачистка нігтів уражених оніхомікозом</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1000</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(без обробки стоп,<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-12">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-12" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-12" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="onihomicose" class="input" type="checkbox" name="Обробка кутикули та зачистка нігтів уражених оніхомікозом" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="cleaning">
                            <div id="img-container-13" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Зачистка пошкодженої частини нігтя (ціна за 1 ніготь)</h4>
                                    <div class="price-top-right-servis">
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(в залежності від складності,<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-13">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-13" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-13" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="cleaning" class="input" type="checkbox" name="Зачистка пошкодженої частини нігтя" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="onihogrifose">
                            <div id="img-container-14" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Зачистка оніхогрифозу</h4>
                                    <div class="price-top-right-servis">
                                        <p>1 ніготь -</p>
                                        <h4>300</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-14">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-14" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-14" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="onihogrifose" class="input" type="checkbox" name="Обробка оніхогрифоза" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="resection">
                            <div id="img-container-15" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Резекція взрослого нігтя</h4>
                                    <div class="price-top-right-servis">
                                        <h4>500-800</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(в залежності від складності<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-15">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-15" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-15" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="resection" class="input" type="checkbox" name="Резекція взрослого нігтя" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="tamponade">
                            <div id="img-container-16" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Встановлення тампонади</h4>
                                    <div class="price-top-right-servis">
                                        <p>1 ніготь -</p>
                                        <h4>200</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(каполін,лігозано,<br>
                                        при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-16">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-16" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-16" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="tamponade" class="input" type="checkbox" name="Встановлення тампонади" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="granulums">
                            <div id="img-container-17" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Лікування гранульоми</h4>
                                    <div class="price-top-right-servis">
                                        <h4>200</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-17">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-17" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-17" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="granulums" class="input" type="checkbox" name="Лікування гранульоми" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="titan">
                            <div id="img-container-18" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Встановлення титанової нитки</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1200</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-18">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-18" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-18" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="titan" class="input" type="checkbox" name="Встановлення титанової нитки" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="freser">
                            <div id="img-container-19" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Встановлення скоби Фрезера</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1600</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-19">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-19" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-19" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="freser" class="input" type="checkbox" name="Встановлення скоби Фрезера" value="Спеціаліст Тетяна Ткаченко">
                    </div>
                    <div class="block-servis">
                        <label for="zto">
                            <div id="img-container-20" class="price-block-servis">
                                <div class="price-top-servis">
                                    <h4>Встановлення скоби ЗТО</h4>
                                    <div class="price-top-right-servis">
                                        <h4>1800</h4>
                                        <p>₴</p>
                                    </div>
                                </div>
                                <div class="price-bottom-servis">
                                    <p>(при проведенні процедур консультація безкоштовна). Дбайливість та<br> професіоналізм у роботі з клієнтами –<br> це головні якості нашого майстра.
                                    </p>
                                    <div class="check-box-servis">
                                        <p>Додати</p>
                                        <div class="img-container-20">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box_after.svg" class="top-20" alt="Кнопка" width="36">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check-box.svg" class="bottom-20" alt="Кнопка" width="36">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="zto" class="input" type="checkbox" name="Встановлення скоби ЗТО" value="Спеціаліст Тетяна Ткаченко">
                    </div>

                    <a href="#information-popup" class="servise-button">Оформити заявку</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Информация -->

    <div id="information-popup" class="popup">
        <a href="#" class="popup_area"></a>
        <div class="popup_body">
            <div class="popup_content">
                <div class="popup-header-logo">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Logotype" width="60"></a>
                    <div class="popup-logo-text">
                        <h1>Т<span class="popup-logo-span">етяна</span> Т<span class="popup-logo-span">каченко</span></h1>
                        <p>Професійний подолог-наставник</p>
                    </div>
                </div>
                <a href="#servis-popup" class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" alt="Arrow" width="9.95">
                    <p>Назад</p>
                </a>
                <a href="#servis-popup" class="close-mobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-back.svg" alt="Arrow" width="9.95">
                </a>
                <h3>Онлайн-запис на прийом</h3>

                <div class="information-popup_text">
                    <h4>Заповніть інформацію</h4>

                    <div class="name">
                        <input tabindex="1" type="text" name="Клієнт" value="" required="required" placeholder="Ім’я*">
                    </div>
                    <div class="telephon">
                        <input tabindex="2" type="tel" name="Телефон клієнта" value="" required="required" placeholder="Введіть номер телефону*">
                    </div>
                    <div class="email">
                        <input tabindex="3" type="text" name="Еmail клієнта" required="required" placeholder="Email*">
                    </div>
                    <div class="coment">
                        <textarea tabindex="4" name="text" placeholder="Коментар:"></textarea>
                    </div>
                    <button class="information-button">Оформити запис</button>


                </div>

            </div>
        </div>
    </div>
</form>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>