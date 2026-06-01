 let currentIdx = 0;
        const slides = document.querySelectorAll('.slide');

        function updateSlider() {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentIdx);
            });
        }

        function nextSlide() {
            currentIdx = (currentIdx + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            currentIdx = (currentIdx - 1 + slides.length) % slides.length;
            updateSlider();
        }

        let stock = JSON.parse(localStorage.getItem("stock")) || {
            "Crystal Dew Glow": 10,
            "Golden Hour": 10,
            "Berry Mirage": 10,
            "Rose Quartz": 10,
            "Midnight Sparkle": 10,
            "Peach Aura": 10,
            "Diamond Kiss": 10,
            "Velvet Nude": 10
        };

        function spremiStock() {
            localStorage.setItem("stock", JSON.stringify(stock));
        }

        function updateStockPrikaz() {
            for (let proizvod in stock) {
                const element = document.getElementById("stock-" + proizvod);
                if (element) {
                    element.innerText = "Na stanju: " + stock[proizvod];
                    if (stock[proizvod] <= 0) {
                        element.innerText = "RASPRODANO";
                        element.style.color = "red";
                    }

                }
            }
        }

        function dodajUKosaricu(naziv, cijena, slika) {
            if (stock[naziv] <= 0) {
                alert("Proizvod nije dostupan.");
                return;
            }

            let kosarica = JSON.parse(localStorage.getItem("kosarica")) || [];

            const proizvod = {
                naziv: naziv,
                cijena: cijena,
                slika: slika
            };

            kosarica.push(proizvod);
            localStorage.setItem("kosarica", JSON.stringify(kosarica));
            stock[naziv]--;
            spremiStock();
            updateStockPrikaz();
            updateCartCount();
        }

        function updateCartCount() {
            let kosarica = JSON.parse(localStorage.getItem("kosarica")) || [];
            const cartCount = document.getElementById("cart-count");
            if (cartCount) {

                if (kosarica.length > 0) {
                    cartCount.style.display = "flex";
                    cartCount.innerText = kosarica.length;

                } else {
                 cartCount.style.display = "none";
                }
            }
        }
        updateCartCount();
        updateStockPrikaz();
        let izbornikEl = document.getElementById("izbornik");

let hamburgermeniEl = document.getElementById("hamburgermeni");

if (window.innerWidth < 800){
    izbornikEl.className = "okomiti";
    izbornikEl.style.display = "none";

}else{
    izbornikEl.className = "vodoravni";
    izbornikEl.style.display = "flex";
    hamburgermeniEl.style.display = "none";
}

window.addEventListener('resize', function(){
    if (window.innerWidth < 800){
        izbornikEl.className = "okomiti";
        izbornikEl.style.display = "none";
        hamburgermeniEl.style.display = "block";

    }else{
        izbornikEl.className = "vodoravni";
        izbornikEl.style.display = "flex";
        hamburgermeniEl.style.display = "none";
    }

}, true);

let kliknuto = false;
hamburgermeniEl.addEventListener('click', function(){

    if(kliknuto == false){
        izbornikEl.className = "okomiti";
        izbornikEl.style.display = "flex";
        kliknuto = true;

    }else{
        izbornikEl.className = "okomiti";
        izbornikEl.style.display = "none";
        kliknuto = false;
    }

}, true);

