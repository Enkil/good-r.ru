<?php

require_once ('vendor/autoload.php');
require_once ('settings.php');

// UTM
use UtmCookie\UtmCookie;
UtmCookie::init();
UtmCookie::setName('president_utm');
UtmCookie::setOverwrite(true);
$dateInterval = DateInterval::createFromDateString('1 day');
UtmCookie::setLifetime($dateInterval);
?>

<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
  <head>
    <title><?php echo $app['title']; ?></title>
    <meta charset="utf-8">
    <!-- Set preload resources (https://w3c.github.io/resource-hints/)-->
    <link rel="prefetch" href="fonts/airport/regular/Airport.otf">
    <!-- Main Meta information-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="<?php echo $app['description']; ?>">
    <meta name="author" content="">
    <!-- Meta Information-->
    <meta name="robots" content="index, follow">
    <meta name="language" content="Russian">
    <meta name="msapplication-tooltip" content="<?php echo $app['title']; ?>">
    <meta name="msapplication-starturl" content="<?php echo $app['domain']; ?>">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="<?php echo $app['title']; ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $app['title']; ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <!-- Web Application Manifest-->
    <link rel="manifest" href="manifest.json">
    <!-- Tile icon for Win8 (144x144 + title color)-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- OpenGraph microformat-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $app['title']; ?>">
    <meta property="og:site_name" content="<?php echo $app['title']; ?>">
    <meta property="og:url" content="<?php echo $app['domain']; ?>">
    <meta property="og:description" content="<?php echo $app['description']; ?>">
    <meta property="og:image" content="">
    <!-- Twitter microformat-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo $app['domain']; ?>">
    <meta name="twitter:creator" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="<?php echo $app['title']; ?>">
    <meta name="twitter:description" content="<?php echo $app['description']; ?>">
    <meta name="twitter:image" content="">
    <meta name="twitter:domain" content="<?php echo $app['domain']; ?>">
    <link rel="canonical" href="/">
    <link rel="image_src" href="#">
    <link rel="shortlink" href="#">
    <link type="text/plain" rel="author" href="humans.txt">
    <link rel="stylesheet" href="css/app.min.css">
    <!-- Site verification-->
    <meta name="google-site-verification" content="<?php echo $app['googleSiteVerification']; ?>">
    <meta name="yandex-verification" content="<?php echo $app['yandexVerification']; ?>">
    <!-- Facebook Pixel Code-->
    <script>
      !function (f, b, e, v, n, t, s) {
          if (f.fbq)return;
          n = f.fbq = function () {
              n.callMethod ?
                      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq)f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
      }(window,
              document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo $app['facebookPixel']; ?>', {
          em: 'insert_email_variable,'
      });
      fbq('track', 'PageView');
      fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $app['facebookPixel']; ?>&ev=PageView&noscript=1"></noscript>
  </head>
  <body>
    <header class="page-header">
      <div class="container">
        <div class="row">
          <div class="column -xs-4 -md-2 _pl0">
            <div class="page-logo"><img src="img/pics/logo.png" alt="<?php echo $app['title']; ?>"></div>
          </div>
          <div class="column -xs-8 -md-3">
            <div class="contacts"><a class="link -phone" href="tel:88006005454" title="Позвоните нам бесплатно">8 800 600 54 54</a><a class="link -email" href="mailto:office@good-r.ru" title="Напишите нам">office@good-r.ru</a></div>
          </div>
          <div class="column -xs-7 _pr0 _pl0 -xs-stretch _sm-hidden-down">
            <ul class="menu">
              <li class="item"><a class="link -emergency" href="index.php#emergency" title="Экстренная помощь"><span>Экстренная помощь</span></a></li>
              <li class="item"><a class="link -about" href="index.php#about" title="О Нас"><span>О Нас</span></a></li>
              <li class="item"><a class="link -building" href="#services" title="Недвижимость"><span>Недвижимость</span></a></li>
              <li class="item"><a class="link -justice" href="#services" title="Юристы"><span>Юристы</span></a></li>
              <li class="item"><a class="link -advantages" href="#advantages" title="Преимущества"><span>Преимущества</span></a></li>
              <li class="item"><a class="link -contacts" href="#contacts" title="Контакты"><span>Контакты</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="page-text">
        <div class="container">
          <div class="row">
            <section class="column -xs-12">
              <h2 class="h2-title" id="agreement">Соглашение об обрабтке персональных данных</h2>
              <div class="text"><p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.<br><br>Все лица заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных.<br><br>Под персональными данными Гражданина понимается нижеуказанная информация:<br><br>общая информация (Имя, телефон и адрес электронной почты); посетители сайта направляют свои персональные данные для получения услуг расчёта стоимости заказа.<br><br>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение(обновление, изменение), использование, уничтожение.<br><br>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p></div>
              <div class="action">
                <div class="page-logo"><img src="img/pics/logo.png" alt="<?php echo $app['title']; ?>"></div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <section class="page-services" id="services">
        <div class="container">
          <div class="row">
            <div class="column -xs-12">
              <h2 class="h2-title">НАШИ УСЛУГИ</h2>
            </div>
          </div>
          <div class="row">
            <div class="column -xs-12 -md-6 _p0">
                    <figure class="service-block">
                      <div class="front">
                        <h3>Недвижимость</h3><img class="img" src="img/pics/service-1.png" alt="Недвижимость">
                      </div>
                      <figcaption class="caption">
                        <div class="text"><p> - Вы арендуете недвижимость у Департамента городского имущества г. Москвы и хотели бы приобрести недвижимость в собственность;</p><p> -Вы хотите арендовать помещение (здание) или выкупить его через аукцион;</p><p> - Вы хотите продать права аренды или продать договор купли-продажи;</p><p> - Вам отказывают из-за неузаконенной перепланировки, окончания срока действия договора (если заявление на выкуп до его окончания), отказываются продлевать договор аренды</p><p>Мы готовы Вам помочь!</p><p>Пошаговая проработка стратегии, подготовка и подача документов, проведение оценки, оптимизация стоимости недвижимости, представление Ваших интересов в суде.</p></div><a class="btn js-openModal" href="javascript:void(0)" title="Получить консультацию" id=""><span>Получить консультацию</span></a>
                      </figcaption>
                    </figure>
            </div>
            <div class="column -xs-12 -md-6 _p0">
                    <figure class="service-block">
                      <div class="front">
                        <h3>Юридические <br/> услуги</h3><img class="img" src="img/pics/service-2.png" alt="Юридические &lt;br/&gt; услуги">
                      </div>
                      <figcaption class="caption">
                        <div class="text"><p>Решение обратиться к юристу или адвокату всегда является сиюминутной безотлагательной необходимостью, связанной с бизнесом, решением семейных и личных вопросов, ограничением свободы и других,не терпящих отсрочки дел.</p><p> «Бизнес Решения» предоставляют услуги специалистов высокого уровня в уголовном и гражданском праве.</p><p> - Автоюристы – возврат водительского удостоверения при лишении, снятие ареста с автомобиля;</p><p> - Адвокаты уголовного права – представление интересов на всех стадиях уголовного процесса, смягчение приговора, защита от давления следствия и т.д.;</p><p> - Арбитражный юрист – представление интересов Вашего бизнеса;</p><p> - Земельные споры, взыскание долгов, жилищные споры, наследственные дела, раздел имущества и т.д.</p></div><a class="btn js-openModal" href="javascript:void(0)" title="Получить консультацию" id=""><span>Получить консультацию</span></a>
                      </figcaption>
                    </figure>
            </div>
          </div>
        </div>
      </section>
      <section class="page-advantages">
        <div class="container">
          <div class="row">
            <div class="column -xs-12">
              <h2 class="h2-title" id="advantages">Наши преимущества</h2>
            </div>
          </div>
          <div class="row wow slideInLeft">
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/team.png" alt="Команда">
                      <h3>Команда</h3>
                      <p>Работаем только с профессионалами в своей области</p>
                    </article>
            </div>
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/info.png" alt="Информативность">
                      <h3>Информативность</h3>
                      <p>Вы будете знать о каждом шаге и его результате незамедлительно</p>
                    </article>
            </div>
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/initional.png" alt="Инициативность">
                      <h3>Инициативность</h3>
                      <p>Всегда предложим несколько вариантов решения любой задачи</p>
                    </article>
            </div>
          </div>
          <div class="row wow slideInRight">
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/mim.png" alt="Посредники">
                      <h3>Посредники</h3>
                      <p>Мы работаем без них</p>
                    </article>
            </div>
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/reliability.png" alt="Надежность">
                      <h3>Надежность</h3>
                      <p>Деловая репутация для нас не пустое слово. Мы гордимся и дорожим своими клиентами</p>
                    </article>
            </div>
            <div class="column -xs-12 -sm-4">
                    <article class="advantage-block"><img src="img/pics/complicity.png" alt="Сопричастность">
                      <h3>Сопричастность</h3>
                      <p>Ваш успех - наша цель!</p>
                    </article>
            </div>
          </div>
          <div class="row _justify-center">
            <div class="column -xs-12 -md-8 -xl-5">
              <div class="action"><a class="btn js-openModal" href="javascript:void(0)" title="Получить консультацию" id=""><span>Получить консультацию</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="page-footer" id="contacts">
      <div class="map-block">
        <div class="map" id="map"></div>
        <div class="container contacts-block">
          <div class="row _justify-center">
            <div class="column -xs-3">
              <div class="page-logo"><img src="img/pics/logo-white.png" alt="<?php echo $app['title']; ?>"></div>
            </div>
            <div class="column -xs-12 -md-4 -lg-3 -lg-offset-1">
              <p class="address">
                Москва
                <br/>
                Черноморский бульвар, д.4
              </p><a class="link -phone" href="tel:88006005454" title="Позвоните нам бесплатно">8 800 698 54 54</a><a class="link -email" href="mailto:office@good-r.ru" title="Напишите нам">office@good-r.ru</a>
            </div>
            <div class="column -xs-12 -md-5 -lg-4 -lg-offset-1">
                  <form class="page-form -footer" method="post" action="form.php">
                    <div class="form">
                      <h4>Остались вопросы? Мы будем рады ответить!</h4>
                      <label class="-name">
                        <input type="text" name="name" placeholder="Ваше имя" required>
                      </label>
                      <label class="-phone">
                        <input type="tel" name="phone" placeholder="+7(999)999-99-99" required>
                      </label>
                      <label>
                        <input type="hidden" name="formname" value="Форма в подвале">
                      </label>
                      <button>Заказать звонок</button>
                    </div>
                    <p class="success">
                      Спасибо за обращение!
                      <br>
                      Наш специалист свяжется с вами.
                    </p>
                  </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="column -xs-12">
            <div class="entity">
              <p>Индивидуальный предприниматель Евтушенко Антон Александрович, ОГРНИП:315774600172601, ИНН:772072860002<br><a href="agreement.php">Соглашение об обработке персональных данных</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal-block">
      <div class="modal"><span class="close js-modalClose"></span>
        <div class="container">
          <div class="row _justify-center">
            <div class="column -xs-6 _text-center">
              <div class="page-logo"><img src="img/pics/logo-white.png" alt="<?php echo $app['title']; ?>"></div>
                  <form class="page-form -modal" method="post" action="form.php">
                    <div class="form">
                      <h4>Оставьте ваши контактные данные и мы свяжемся с вами через 2 минуты!</h4>
                      <label class="-name">
                        <input type="text" name="name" placeholder="Ваше имя" required>
                      </label>
                      <label class="-phone">
                        <input type="tel" name="phone" placeholder="+7(999)999-99-99" required>
                      </label>
                      <label>
                        <input type="hidden" name="formname" value="Форма в модальном окне">
                      </label>
                      <button>Заказать звонок</button>
                    </div>
                    <p class="success">
                      Спасибо за обращение!
                      <br>
                      Наш специалист свяжется с вами.
                    </p>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scripts">
      <script src="https://maps.google.com/maps/api/js"></script>
      <script src="js/app.js"></script>
      <!-- Google Analytics-->
      <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', '<?php echo $app['googleAnalytics'] ?>', 'auto');
        ga('send', 'pageview');
      </script>
      <!-- Yandex.Metrika counter-->
      <script>
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter<?php echo $app['yandexMetrika'] ?> = new Ya.Metrika(
                            {
                                id: 41772859,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true,
                                webvisor: true
                            });
                }
                catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            }
            else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
      </script>
      <noscript>
        <div><img src="https://mc.yandex.ru/watch/<?php echo $app['yandexMetrika'] ?>" style="position:absolute; left:-9999px" alt=""></div>
      </noscript>
      <!-- CallbackKiller-->
      <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
      <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=<?php echo $app['CallbackkillerID']?>" charset="UTF-8" async></script>
    </div>
  </body>
  <!---->
  <!--    .svg-sprite._hide-->
  <!--        //include ../../../build/svg/sprite/sprite.svg-->
</html>