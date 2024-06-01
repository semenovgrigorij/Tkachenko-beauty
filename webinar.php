<?php

/*  Template name: Webinar */
?>

<?php get_header() ?>
<main>
  <section>
    <div class="webinar-wrapper">
      <div class="title-webinars">
        <h2>Онлайн-практикум «Робота с бородавками. Просто про складне»</h2>
      </div>
      <div class="webinars-blocks">
        <div class="price">
          <h3>ціна</h3>
          <h3><span>3000 гривень</span></h3>
        </div>
        <div class="webinars-block-1">
          <h3 class="title-webinar-block-1">Про <span>Онлайн-практикум</span> в цифрах:</h3>
          <div class="statistics-blocks">
            <div class="statistics-block-1">
              <h3>240</h3>
              <p><strong>хвилин</strong></p>
              <p>теоретичного та практичного матеріалу</p>
            </div>
            <div class="statistics-block-2">
              <h3>40+</h3>
              <p><strong>фотота та відео</strong></p>
              <p>матеріалу по темі</p>
            </div>
            <div class="statistics-block-3">
              <h3>2</h3>
              <p><strong>місяці</strong></p>
              <p>онлайн підтримки</p>
            </div>
            <div class="statistics-block-4">
              <h3>5</h3>
              <p><strong>технік</strong></p>
              <p>видалення бородавок та <span>1</span> найбільш ефективна</p>
            </div>
            <div class="statistics-block-5">
              <h3>1</h3>
              <p><strong>закритий телеграм канал</strong></p>
              <p>для відповідей на питання та обміну досвідом</p>
            </div>
          </div>
          <div class="wellcome">
            <p>Запрошую на мій новий практикум, де за 4 години ви отримаєте унікальні практичні
              навички роботи з бородавками.
            </p>
          </div>
        </div>
        <div id="registration" class="webinars-block-2">
          <h3 class="title-webinar-block-2">Реєстрація на участь у <span>oнлайн-практикумі</span></h3>
          <div class="date">
            <p>Лютий 29, 2024 12.00 РМ Україна/Київ</p>
            <p>Автор: Тетяна Ткаченко</p>
          </div>
          <form id="webinar-form" class="webinar" onsubmit="return validateForm()">
            <input type="hidden" name="project_name" value="Студия Татьяны Ткаченко">
            <input type="hidden" name="admin_email" value="semenovgrigorij57@gmail.com">
            <input type="hidden" name="form_subject" value="Регістрація на онлайн-практиум">
            <div class="name">
              <input tabindex="1" type="text" name="Клієнт" value="" required="required" placeholder="Ім’я*">
            </div>
            <div class="email">
              <input tabindex="2" type="email" name="Еmail клієнта" required="required" placeholder="Email*">
            </div>
            <div class="checkbox-webinar">
              <input type="checkbox" id="agreeCheckbox" name="agree" required>
              <a href="https://tkachenko-beauty.com.ua/zgoda/">Я погоджуюсь на обробку та використання моїх данних</a>
            </div>
            <button id="submitButton" class="button-form" type="submit">Зареєструватися</button>
          </form>
        </div>
        <div class="webinars-block-3">
          <h3 class="title-webinar-block-3">В чому унікальність цього практикума:</h3>
          <ul>
            <li>Ви навчитесь як працювати з бородавками безболісно</li>
            <li>Отримаєте чітку та повну схему всіх процедур</li>
            <li>Оволодієте досконалою технікою, яка дозволяє повністю відновити структуру шкіри
              після видалення бородавки.
            </li>
          </ul>
          <a class="button-form-bottom" href="#registration">Зареєструватися</a>
        </div>
        <div class="webinars-block-4">
          <h3 class="title-webinar-block-4">Автор практикума:</h3>
          <div class="teacher">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-block-4.jpg" alt="Портрет" width="120">
            <p><strong>Тетяна Ткаченко</strong>, практикуючий подолог.
              Навчалась у Анке Нірідау (офлайн курс), та у спеціалістів з інших країн Євросоюзу.
            </p>
            <ul>
              <li>Засновниця школи для майстрів манікюра, педикюра та подології</li>
              <li>Практикуючий подолог з 2015 року</li>
              <li>Суддя багатьох конкурсів з манікюру та педікюру</li>
              <li>Ментор та наставниця для молодих спеціалістів з 20 річним стажем</li>
              <li>Вже навчила трохи менше 3000 спеціалістів педікюру та манікюру</li>
              <li>Береться навіть за самі “безнадійні” випадки з ногами </li>
            </ul>
            <p><strong>Навчу вас працювати грамотно і з гарантією результатів.</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>