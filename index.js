  let izbornikEl = document.getElementById("izbornik");
        let hamburgermeniEl = document.getElementById("hamburgermeni");
        if (window.innerWidth < 800) {
            izbornikEl.className = "okomiti";
            izbornikEl.style.display = "none";
        } else {
            izbornikEl.className = "vodoravni";
            izbornikEl.style.display = "flex";
            hamburgermeniEl.style.display = "none";
        }

        window.addEventListener('resize', function () {
            if (window.innerWidth < 800) {
                izbornikEl.className = "okomiti";
                izbornikEl.style.display = "none";
                hamburgermeniEl.style.display = "block";
            } else {
                izbornikEl.className = "vodoravni";
                izbornikEl.style.display = "flex";
                hamburgermeniEl.style.display = "none";
            }

        }, true);
        let kliknuto = false;
        hamburgermeniEl.addEventListener('click', function () {
            if (kliknuto == false) {
                izbornikEl.className = "okomiti";
                izbornikEl.style.display = "flex";
                kliknuto = true;
            } else {
                izbornikEl.className = "okomiti";
                izbornikEl.style.display = "none";
                kliknuto = false;
            }
        }, true);

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

        setInterval(nextSlide, 6000);

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