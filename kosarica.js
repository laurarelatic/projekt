let kosarica = JSON.parse(localStorage.getItem("kosarica")) || [];
const container = document.getElementById("kosarica-proizvodi");
function prikaziKosaricu(){
    container.innerHTML = "";
    if(kosarica.length === 0){
        container.innerHTML = "<h2>Košarica je prazna.</h2>";
        return;
    }

    kosarica.forEach((proizvod, index) => {
        container.innerHTML += `
        <div class="proizvod">
            <img src="${proizvod.slika}" width="150">
            <h2>${proizvod.naziv}</h2>
            <p>${proizvod.cijena}</p>
            <button onclick="obrisiProizvod(${index})">
                Ukloni
            </button>
        </div>
        
        `;
    });
}

function obrisiProizvod(index){

    let stock = JSON.parse(localStorage.getItem("stock")) || {};
    stock[kosarica[index].naziv]++;
    localStorage.setItem("stock", JSON.stringify(stock));
    kosarica.splice(index, 1);
    localStorage.setItem("kosarica", JSON.stringify(kosarica));
    prikaziKosaricu();
}

prikaziKosaricu();
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