<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="scss/main.css" />
  <title>Nettowaku</title>
</head>

<div>
  <header>
    <div class="main-menu">
      <nav>
        <ul>
          <li><a class="main-menu-a" href="index.php">главная</a></li>
          <hr class="animated-hr">
          <li><a class="main-menu-a" href="aboutus.php">о компании</a></li>
          <hr class="animated-hr">
          <li><a class="main-menu-a" href="yslygi.php">услуги</a></li>
          <hr class="animated-hr">
          <li><a class="main-menu-a" href="profile.php">профиль</a></li>
          <hr class="animated-hr">
          <li><a class="main-menu-a" href="portfolio.php">портфолио</a></li>
          <hr class="animated-hr">
        </ul>
      </nav>
    </div>
    <div class="menu">
      <div class="burger-menu" onclick="toggleMenu()">
        <div class="burger-menu-line burger-menu-line-1"></div>
        <div class="burger-menu-line burger-menu-line-2"></div>
        <div class="burger-menu-line burger-menu-line-3"></div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="div-header-section">
      <div class="div-header">
        <h1 class="div-info fade-in">Nettowaku</h1>

        <div class="div-header-block">
          <div class="header-block-1 fade-in">
            <p>это современная компания, специализирующаяся в области дизайна, где творчество и инновации переплетаются
              с
              технологической экспертизой.</p>
          </div>
          <div class="header-block-2 fade-in">
            <div class="oval"></div>
            <div class="header-block-circle">
              <div class="arrow">
                <div class="arrow-1"></div>
                <div class="arrow-2"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- блок -->
  <div id="marquee-container">
    <div id="marquee-text" class="marquee-text">
      Мы рады приветствовать вас здесь и благодарим за ваш интерес к нашей организации. Мы рады приветствовать вас здесь
      и благодарим за ваш интерес к нашей организации.
      Мы рады приветствовать вас здесь и благодарим за ваш интерес к нашей организации.
      Мы рады приветствовать вас здесь и благодарим за ваш интерес к нашей организации.

    </div>
  </div>

  <!-- Контейнер преимуществ -->
  <div class="container-main">
    <div class="benefits">
      <div class="benefits-main">
        <h2 class="fade-in">Преимущества</h2>
      </div>
      <div class="individual-block fade-in">
        <div class="individual-oval-benefits">
          <h3 class="fade-in">индивидуальный подход</h3>
        </div>
        <div class="individual-block-benefits fade-in">
          <div class="individual-block-benefits-text">
            <p>Мы нацелены на достижение высоких стандартов качества во всех наших проектах. Мы гарантируем, что наши
              решения будут эффективными, надежными и соответствующими ожиданиям клиентов. Мы стремимся к полной
              удовлетворенности клиентов и успешным результатам.</p>
          </div>
        </div>
      </div>
      <div class="design-block fade-in">
        <div class="design-block-benefits fade-in">
          <h3 class="fade-in">творческий дизайн</h3>
        </div>
        <div class="design-block-text fade-in">
          <div class="design-block-text-mini fade-in">
            <p>Наша команда талантливых дизайнеров привносит свежие идеи и креативные решения в каждый проект. Мы
              стремимся создавать визуально привлекательные и функциональные дизайны, которые эффективно коммуницируют
              ценности и сообщение наших клиентов.</p>
          </div>
        </div>
      </div>

      <div class="results-block fade-in">
        <div class="results-block-benefits fade-in">
          <div class="results-block-benefits-text fade-in">
            <p>мы придаем большое значение пониманию потребностей и целей каждого клиента. Мы тщательно анализируем их
              требования и разрабатываем индивидуальные решения, отвечающие их уникальным потребностям. </p>
          </div>
        </div>
        <div class="results-oval-benefits">
          <h3 class="results-h3 fade-in">качество и результаты</h3>
        </div>
      </div>
    </div>

    <div>
      <h2 class="fade-in">Больше информации</h2>
    </div>
    <hr>
    <div class="footer-block-2 fade-in">
      <div class="footer-block-circle">
        <div class="arrow">
          <div class="footer-arrow-1"></div>
          <div class="footer-arrow-2"></div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/main.js"></script>

  </body>

</html>