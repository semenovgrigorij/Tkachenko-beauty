<?php
/*
    Template name: Thank_you_webinar
    */
?>
<?php get_header() ?>
<main>
  <section class="title">
    <div class="title-wrapper-thank_you_webinar">
      <div class="title-text-thank_you_webinar">
        <h3>Вiтаю!</h3><br>
        <!-- <h2>Ви зареєструвалися на онлайн-практикум<br></h2>
            <h2><span>«Робота с бородавками. Просто про складне»</span></h2> -->
        <h2>Ви щасливчик і це факт, тому що зареєструвалися на онлайн-практикум та отримуєте можливість купити курс <span>«Робота з бородавками. Просто про складне»</span> за найкращою ціною в історії продажу цього курсу.</h2>
        <p>Після завершення оплати, посилання на доступ до онлайн-практикума буде вислано на Вашу электронну пошту.</p>
        <p>Раджу підписатись на наш закритий Телеграмканал <a href="https://t.me/Tatiana_Podologist">@Tatiana_Podologist</a>, щоб мати можливість спілкуватись один з одним, задавати мені питання та отримувати поради і підримку.</p>
        <form class="liqpay-form" method="POST" action="https://www.liqpay.ua/api/3/checkout" accept-charset="utf-8">
          <input type="hidden" name="data" value="eyAidmVyc2lvbiIgOiAzLCAicHVibGljX2tleSIgOiAieW91cl9wdWJsaWNfa2V5IiwgImFjdGlv
                                        biIgOiAicGF5IiwgImFtb3VudCIgOiAxLCAiY3VycmVuY3kiIDogIlVTRCIsICJkZXNjcmlwdGlv
                                        biIgOiAiZGVzY3JpcHRpb24gdGV4dCIsICJvcmRlcl9pZCIgOiAib3JkZXJfaWRfMSIgfQ==" />
          <input type="hidden" name="signature" value="QvJD5u9Fg55PCx/Hdz6lzWtYwcI=" />
          <input type="image" class="button-img" alt="Кнопка" src="//static.liqpay.ua/buttons/payUk.png" />
        </form>
      </div>
      <div class="title-img-thank_you_webinar">
        <img class="img-thank_you_webinar" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-block-4.jpg" class="title-photo" alt="Woman" width="1100">
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>