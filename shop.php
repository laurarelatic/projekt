<?php
require "db.php";

$proizvodi = $conn->query("
    SELECT *
    FROM sjajila
    ORDER BY id DESC
");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumiere | Luxury Slider</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       <nav>
    <a href="index.html">
        <div class="logo">
            <img src="slike/Group 8.png" alt="slika">
            Lumiere
        </div>
    </a>
    <div id="hamburgermeni">
        ☰
    </div>
    <ul id="izbornik">
        <li><a href="index.html">POČETNA</a></li>
        <li><a href="onama.html">O NAMA</a></li>
        <li><a href="shop.html">SHOP</a></li>
        <li><a href="kontakt.html">KONTAKT</a></li>
        <li class="cart-icon">
            <a href="kosarica.html">
                <img src="slike/Group 10 (1).png" alt="kosarica">
            </a>
            <span id="cart-count">0</span>
        </li>
    </ul>
</nav>
    </header>
     <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active">
            <div class="hero-content">
                <div class="product-container">
                    <div class="glow-effect"></div>
                    <img src="sjajila/Gemini_Generated_Image_2qz2i52qz2i52qz2-removebg-preview.png" alt="Sjajilo 1"
                        class="product-img">
                </div>
                <div class="hero-text">
                    <span class="subtitle">NOVO U PONUDI</span>
                    <h1>CRYSTAL<br> DEW GLOW</h1>
                    <p>Uhvatite svježinu jutarnje rose na usnama. Crystal Dew Glow sjajilo pruža proziran, staklast sjaj
                        uz lagani hidratantni sloj koji ostavlja usne glatkim i sočnim satima.</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <div class="hero-content">
                <div class="product-container">
                    <div class="glow-effect"></div>
                    <img src="sjajila/Gemini_Generated_Image_q5e0lzq5e0lzq5e0-removebg-preview.png" alt="Sjajilo 2"
                        class="product-img">
                </div>
                <div class="hero-text">
                    <span class="subtitle">NOVO U PONUDI</span>
                    <h1>GOLDEN <br> HOUR</h1>
                    <p>Ulovite savršeni sjaj zalaska sunca. Golden Hour sjajilo donosi toplinu i nevjerojatnu refleksiju
                        svjetlosti koja traje satima.</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <div class="hero-content">
                <div class="product-container">
                    <div class="glow-effect"></div>
                    <img src="sjajila/Gemini_Generated_Image_7rp9rf7rp9rf7rp9-removebg-preview.png" alt="Sjajilo 3"
                        class="product-img">
                </div>
                <div class="hero-text">
                    <span class="subtitle">NOVO U PONUDI</span>
                    <h1>BERRY <br> MIRAGE</h1>
                    <p>Zaronite u iluziju voćne slatkoće. Berry Mirage Shine donosi nježnu nijansu bobičastog sjaja s
                        refleksijama koje se mijenjaju na svjetlu, za zavodljiv i svjež izgled usana.</p>
                </div>
            </div>
        </div>

        <!-- Kontrole -->
        <div class="slider-controls">
            <button class="control-btn" onclick="prevSlide()">&#10094;</button>
            <button class="control-btn" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <!-- SHOP SEKCIJA -->
    <section class="products-section">

        <h2 class="section-title">Naša Sjajila</h2>

        <div class="products-container">

            <!-- BOX 1 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_2qz2i52qz2i52qz2-removebg-preview.png" alt="sjajilo">
                <h3>Crystal Dew Glow</h3>
                <p>Proziran staklasti sjaj s hidratantnim efektom.</p>
                <p style="font-size: large;"><strong>22,60 €</strong></p>
                <p class="stock" id="stock-Crystal Dew Glow">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Crystal Dew Glow',
                 '22,60 €',
                 'sjajila/Gemini_Generated_Image_2qz2i52qz2i52qz2-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 2 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_q5e0lzq5e0lzq5e0-removebg-preview.png" alt="sjajilo">
                <h3>Golden Hour</h3>
                <p>Topli i nevjerovatni zlatni pigmenti za luksuzan glow efekt.</p>
                <p style="font-size: large;"><strong>23,10 €</strong></p>
                <p class="stock" id="stock-Golden Hour">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Golden Hour',
                 '23,10 €',
                 'sjajila/Gemini_Generated_Image_q5e0lzq5e0lzq5e0-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 3 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_7rp9rf7rp9rf7rp9-removebg-preview.png" alt="sjajilo">
                <h3>Berry Mirage</h3>
                <p>Voćna berry nijansa s reflektirajućim sjajem.</p>
                <p style="font-size: large;"><strong>22,20 €</strong></p>
                <p class="stock" id="stock-Berry Mirage">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Berry Mirage',
                 '22,20 €',
                 'sjajila/Gemini_Generated_Image_7rp9rf7rp9rf7rp9-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 4 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_ydm5i1ydm5i1ydm5-removebg-preview.png" alt="sjajilo">
                <h3>Rose Quartz</h3>
                <p>Nježna ružičasta nijansa za svakodnevni look.</p>
                <p style="font-size: large;"><strong>18,99 €</strong></p>
                <p class="stock" id="stock-Rose Quartz">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Rose Quartz',
                 '18,99 €',
                 'sjajila/Gemini_Generated_Image_ydm5i1ydm5i1ydm5-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 5 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_yr9p7pyr9p7pyr9p-removebg-preview.png" alt="sjajilo">
                <h3>Midnight Sparkle</h3>
                <p>Intenzivan večernji sjaj za glamurozan izgled.</p>
                <p style="font-size: large;"><strong>21,80 €</strong></p>
                <p class="stock" id="stock-Midnight Sparkle">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Midnight Sparkle',
                 '21,80 €',
                 'sjajila/Gemini_Generated_Image_yr9p7pyr9p7pyr9p-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 6 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_v1fewpv1fewpv1fe-removebg-preview.png" alt="sjajilo">
                <h3>Peach Aura</h3>
                <p>Svjetla peach nijansa sa shimmer završetkom.</p>
                <p style="font-size: large;"><strong>19,99 €</strong></p>
                <p class="stock" id="stock-Peach Aura">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Peach Aura',
                 '19,99 €',
                 'sjajila/Gemini_Generated_Image_v1fewpv1fewpv1fe-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 7 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_ri2rpjri2rpjri2r-removebg-preview.png" alt="sjajilo">
                <h3>Diamond Kiss</h3>
                <p>Ultra reflective formula za efekt punijih usana.</p>
                <p style="font-size: large;"><strong>21,10 €</strong></p>
                <p class="stock" id="stock-Diamond Kiss">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Diamond Kiss',
                 '21,10 €',
                 'sjajila/Gemini_Generated_Image_ri2rpjri2rpjri2r-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>

            <!-- BOX 8 -->
            <div class="product-box">
                <img src="sjajila/Gemini_Generated_Image_s2su73s2su73s2su-removebg-preview.png" alt="sjajilo">
                <h3>Velvet Nude</h3>
                <p>Elegantna nude nijansa za sofisticirani makeup.</p>
                <p style="font-size: large;"><strong>20,50 €</strong></p>
                <p class="stock" id="stock-Velvet Nude">
                    Na stanju: 10
                </p>
                <a href="javascript:void(0)" class="btn-product" onclick="dodajUKosaricu(
                 'Velvet Nude',
                 '20,50 €',
                 'sjajila/Gemini_Generated_Image_s2su73s2su73s2su-removebg-preview.png'
                  )">
                    DODAJ U KOŠARICU
                </a>
            </div>
        </div>
<br><br>
   <div class="products-container">

<?php while($p = $proizvodi->fetch_assoc()): ?>

<div class="product-box">

    <img
        src="<?= htmlspecialchars($p['slika']) ?>"
        alt="<?= htmlspecialchars($p['naziv']) ?>"
    >

    <h3><?= htmlspecialchars($p['naziv']) ?></h3>

    <p><?= htmlspecialchars($p['opis']) ?></p>

    <p style="font-size: large;">
        <strong><?= number_format($p['cijena'], 2, ',', '.') ?> €</strong>
    </p>

  <p class="stock" id="stock-Velvet Nude">
                    Na stanju: 10
                </p>

    <a href="javascript:void(0)"
       class="btn-product"
       onclick="dodajUKosaricu(
           '<?= htmlspecialchars($p['naziv'], ENT_QUOTES) ?>',
           '<?= number_format($p['cijena'], 2, ',', '.') ?> €',
           '<?= htmlspecialchars($p['slika'], ENT_QUOTES) ?>'
       )">
        DODAJ U KOŠARICU
    </a>

</div>

<?php endwhile; ?>

</div>
  
    </section>
    <footer>
        <div class="footer-content">
            <div class="footer-logo">Lumiere</div>
            <ul class="footer-links">
                <li><a href="#">Privatnost</a></li>
                <li><a href="#">Uvjeti korištenja</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <p class="copyright">&copy; 2026 Lumiere Cosmetics. Sva prava pridržana.</p>
        </div>
    </footer>
<script src="shop.js"></script>
</body>

</html>