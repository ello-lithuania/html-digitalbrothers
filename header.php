<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/main.css" />
    <title>Dev brothers</title>
  </head>
  <body>

<nav class="main-navbar">
  <div class="navbar-inner">
    <div class="navbar-inner-container">
      <a href="./index.php" class="navbar-brand">
          <img src="./img/logo.svg"/>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="btn-mobile-toggle" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg width="35" height="13" viewBox="0 0 35 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_195_122)">
        <path d="M0 12.4V10.13H35V12.4H0ZM0 2.27V0H35V2.27H0Z" fill="white"/>
        </g>
        <defs>
        <clipPath id="clip0_195_122">
        <rect width="35" height="12.4" fill="white"/>
        </clipPath>
        </defs>
        </svg>
      </button>
      <div class="desktop-navbar" id="navbar-default">
        <ul>
          <li>
            <a href="./index.php" class="active" aria-current="page">Pradinis</a>
          </li>
          <li>
            <a href="./paslaugos.php">Paslaugos</a>
          </li>
          <li>
            <a href="./portfolio.php">Portfolio</a>
          </li>
          <li>
            <a href="./atsiliepimai.php">Atsiliepimai</a>
          </li>
          <li>
            <a href="./apie-mus.php">Apie mus</a>
          </li>
          <li>
            <a href="./kontaktai.php">Kontaktai</a>
          </li>
        </ul>

          <select name="lang" id="lang">
              <option value="LT">LT</option>
              <option value="EN">EN</option>
          </select>
          <a class="btn-main btn-hover-orange" href="./kontaktai.php">Gauti pasiūlymą<img src="./img/icon-arrow.svg"/></a>

      </div>
    </div>
  </div>
</nav>

<div class="mobile-navbar hidden">
  <div class="mobile-navbar-brand">
    <a href="./index.php">
        <img src="./img/logo.svg"/>
    </a>
    <button class="btn-close"><img src="./img/icon-close.svg"/></button>
  </div>
  <ul>
    <li>
      <a href="./index.php">Pradinis</a>
    </li>
    <li>
      <a href="./paslaugos.php">Paslaugos</a>
    </li>
    <li>
      <a href="./portfolio.php">Portfolio</a>
    </li>
    <li>
      <a href="./atsiliepimai.php">Atsiliepimai</a>
    </li>
    <li>
      <a href="./apie-mus.php">Apie mus</a>
    </li>
    <li>
      <a href="./kontaktai.php">Kontaktai</a>
    </li>
  </ul>

  <select name="lang" id="lang">
            <option value="LT">LT</option>
            <option value="EN">EN</option>
  </select>
  <a class="btn-main btn-hover-orange" href="./kontaktai.php">Gauti pasiūlymą<img src="./img/icon-arrow.svg"></a>

</div>
