<?php
$firma = 'Szprycha';
$rok = date('Y');

$cennik = [
    ['nazwa' => 'Przegląd podstawowy', 'cena' => 120],
    ['nazwa' => 'Przegląd generalny', 'cena' => 250],
    ['nazwa' => 'Serwis i regulacja hamulców', 'cena' => 60],
    ['nazwa' => 'Centrowanie koła', 'cena' => 50],
    ['nazwa' => 'Wymiana dętki lub opony', 'cena' => 40],
];
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <script src="app.js" defer></script>
    <title>Szprycha – serwis rowerowy</title>
  </head>
  <body>
    <header class="site-header">
      <a class="logo" href="#">
        <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
          <title id="logo-tytul">Szprycha</title>
          <circle cx="28" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5" />
          <circle cx="92" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5" />
          <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#222" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
          <polyline points="48,14 60,42 80,14" fill="none" stroke="#222" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span>Szprycha</span>
      </a>
      <button class="menu-toggle" aria-expanded="false">Menu</button>
      <nav class="menu">
        <a href="#uslugi">Usługi</a>
        <a href="#cennik">Cennik</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
    </header>

    <main>
      <section id="uslugi">
        <h2>Nasza oferta</h2>
        <div class="cards">
          <article class="card">
            <h3>Przegląd podstawowy</h3>
            <p>
              Kontrola stanu technicznego, regulacja hamulców i przerzutek,
              sprawdzenie połączeń śrubowych oraz smarowanie łańcucha.
            </p>
            <p class="card_price">od 120 zł</p>
          </article>

          <article class="card card--highlight">
            <h3>Przegląd generalny</h3>
            <p>
              Rozbiórka i mycie napędu, serwis piast, sterów i suportu,
              centrowanie kół oraz pełna regulacja całego roweru.
            </p>
            <p>Najczęściej wybierane</p>
            <p class="card_price">od 250 zł</p>
          </article>

          <article class="card">
            <h3>Serwis hamulców</h3>
            <p>
              Wymiana klocków lub okładzin, prostowanie tarcz, regulacja zacisków
              oraz odpowietrzanie układów hydraulicznych.
            </p>
            <p class="card_price">od 60 zł</p>
          </article>

          <article class="card">
            <h3>Koła i ogumienie</h3>
            <p>
              Szybka wymiana dętki lub opony, uszczelnianie systemów bezdętkowych
              oraz precyzyjne centrowanie obręczy.
            </p>
            <p class="card_price">od 40 zł</p>
          </article>
        </div>
      </section>

      <section id="cennik">
        <h2>Cennik</h2>
        <table class="price-table">
          <thead>
            <tr>
              <th class="service">Usługa</th>
              <th class="num">Cena</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cennik as $usluga): ?>
              <tr>
                <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                <td class="num"><?= $usluga['cena'] ?> zł</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </section>
    </main>

    <footer id="kontakt">
      <h3>Kontakt</h3>
      <p>Pracownia Rowerowa Szprycha</p>
      <p>ul. Gdańska 1, 85-005 Bydgoszcz</p>
      <p><a href="tel:+48420213769">tel. 420 213 769</a></p>
      <p><a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
      <p>© <?= $rok ?> <?= $firma ?></p>
    </footer>
  </body>
</html>