    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Inicializa los JavaScript -->
    <script>
document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
});
//js fixed header
window.onscroll = function() {
    myFunction()
};

var header = document.getElementById("myHeader");
var logo = document.getElementById("logo");
var sticky = header.offsetTop;


function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        logo.classList.remove("hide");
    } else {
        header.classList.remove("sticky");
        logo.classList.add("hide");
    }
}
// efecto parallax
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
});
// js Slider
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>



















    <footer class="page-footer blue-grey darken-3">
        <div class="container">
            <div class="row ">

                <!-- Escudo del colegio -->
                <div class="col s12 m4 green accent-4">
                    <br>
                </div>

                <!-- Redes Sociales -->
                <div class="col s12 m4 center">
                    <a href="https://www.facebook.com/tovaropa" target="_blank"><img src="./images/redes/fb.png"
                            style="border-radius: 50%; width:50px; height:50px;" alt="@tovaropa"></a>
                </div>

                <!-- Contacto -->
                <div class="col s12 m4">
                    <h4><b>Contáctanos</b> </h4>
                    <span>
                        <h5><b>Celular:</b></h5>
                        310 262 3169
                        <br>
                        <h5><b>Dirección:</b></h5>
                        calle#22 19-12 / Centro
                        <br>
                        calle#23 19-11 / Centro
                    </span>
                </div>
            </div>
        </div>
        <div class="col s12 blue-grey darken-1">
            <div class="footer-copyrigh center">
                © 2014 Copyright Text
            </div>
        </div>
    </footer>
