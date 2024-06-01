$(document).ready(function () {
  // Получаем данные из базы данных с помощью AJAX
  $.ajax({
    url: "http://localhost/wordpress-6.1.1-uk/wordpress/wp-content/themes/Taplink/out.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      console.log(data);
      // Отображаем данные в слайдере
      data.forEach(function (comment) {
        console.log(comment);
        var slide = '<div class="reviews-slider-item">';
        slide +=
          '<div class="reviews-title"><h4>' +
          comment.username +
          "</h4><p>" +
          comment.date +
          '</p><img src="http://localhost/wordpress-6.1.1-uk/wordpress/wp-content/themes/Taplink/assets/icons/stars.svg" alt="Stars" width="61" alt="Stars" width="61"></div>';
        slide +=
          '<div class="reviews-text"><p>' + comment.comment + "</p></div>";
        slide += "</div>";
        $(".reviews-slider").append(slide);
      });
      // Инициализируем слайдер после загрузки данных

      $(".reviews-slider").slick({
        adaptiveHeight: true,
        speed: 1000,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        centerMode: false,
        responsive: [
          {
            breakpoint: 770,
            settings: {
              arrows: false,
              dots: true,
              adaptiveHeight: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              speed: 1000,
              infinity: true,
              centerMode: false,
            },
          },
        ],
      });
    },
    error: function (data) {
      alert("Произошла ошибка при получении данных");
    },
  });

  $(".gallery-slider").slick({
    arrows: true,
    dots: true,
    adaptiveHeight: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 1000,
    infinite: true,
    centerMode: true,
    responsive: [
      {
        breakpoint: 770,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
        },
      },
    ],
  });
  $(".video-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    slide: "div",
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 770,
        settings: {
          arrows: false,
        },
      },
    ],
  });

  $(".diplomas-slider").slick({
    arrows: true,
    dots: true,
    adaptiveHeight: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 1000,
    infinite: true,
    responsive: [
      {
        breakpoint: 770,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Form

  //E-mail Ajax Send
  $(".podolog").submit(function () {
    //Change
    var th = $(this);
    var redirectUrl =
      "http://localhost/wordpress-6.1.1-uk/wordpress/thank_you/";
    $.ajax({
      type: "POST",
      url: "wp-content/themes/Taplink/mail.php", //Change
      data: th.serialize(),
    })
      .done(function () {
        //openModal();
        setTimeout(function () {
          // Done Functions
          // closeModal();
          window.location.href = redirectUrl;
          th.trigger("reset");
          th.trigger(".r");
        }, 0);
      })
      .fail(function () {
        alert("Помилка відправки форми");
      });
    return false;
  });
  $(".webinar").submit(function () {
    //Change
    var th = $(this);
    var redirectUrl = "https://tkachenko-beauty.com.ua/thank_you_webinar/";
    $.ajax({
      type: "POST",
      url: "https://tkachenko-beauty.com.ua/wp-content/themes/Taplink/mail.php",
      data: th.serialize(),
    })
      .done(function () {
        //openModal();
        setTimeout(function () {
          // Done Functions
          // closeModal();
          window.location.href = redirectUrl;
          th.trigger("reset");
          th.trigger(".r");
        }, 0);
      })
      .fail(function () {
        alert("Помилка відправки форми");
      });
    return false;
  });
});
//  Смена иконок в блоке при клике на блок

var imgContainers = [];

for (var i = 1; i <= 29; i++) {
  imgContainers.push($("#img-container-" + i));
}

imgContainers.forEach(function (container, index) {
  container.click(function () {
    container.find("img").toggleClass("transparent");
    container.find("img").toggleClass("top-" + (index + 1));
  });
});

/* Accordion */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// Плавный скроллинг с исключением для ссылки на #specialists-popup

$(document).ready(function () {
  $('[href^="#"]').on("click", function (event) {
    // Массив ссылок той, которые мы хотим исключить из обработки кликов
    let excludedLinks = [
      "#specialists-popup",
      "#servis-popup",
      "#information-popup",
    ];
    //  Если клик происходит по одной из ссылок из этого массива, то обработка клика просто пропускается

    if (excludedLinks.includes($(this).attr("href"))) {
      return; // Пропускаем обработку клика для исключенных ссылок
    }
    if ($(this).attr("hash") !== "") {
      event.preventDefault();
      let hash = $(this).prop("hash");
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        800,
        function () {}
      );
    }
  });
});

// Кнопка скроллинга вверх

$(document).ready(function () {
  var section2 = $("#admission");

  if (section2.length) {
    var section2Top = section2.offset().top;

    $(window).scroll(function () {
      var currentScrollTop = $(window).scrollTop();
      if (currentScrollTop > section2Top) {
        if ($(window).width() > 770) {
          $(".scroll-top").show();
        }
      } else {
        $(".scroll-top").hide();
      }
    });

    $(".scroll-top").click(function () {
      $("html, body").stop().animate(
        {
          scrollTop: 0,
        },
        1000
      );
      return false;
    });
  }
});

// Checkbox

function validateForm() {
  var checkboxes = document.getElementsByName("agree");
  if (checkboxes[0].checked) {
    return true;
  } else {
    alert("Пожалуйста, согласитесь с условиями");
    return false;
  }
}
