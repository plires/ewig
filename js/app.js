import AOS from 'aos';
import Swiper from './../node_modules/swiper/swiper-bundle.esm.browser.min.js';

const header = document.getElementsByTagName('header')[0]
const nav = document.getElementsByTagName('nav')[0]
const toggle = document.getElementById('btn_menu')
const btnMenuProducts = document.getElementById('btn_menu_products')
const contentProducts = document.getElementById('content_products')
const arrowProduct = document.getElementById('arrow_product')

var swiper = new Swiper(".swiper", {
  slidesPerView: 2,
  // centeredSlides: true,
  spaceBetween: 12,
  autoplay: 
  {
    delay: 2000,
  },
  loop: true,
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    // 768: {
    //   slidesPerView: 4,
    //   spaceBetween: 40,
    // },
    // 1024: {
    //   slidesPerView: 5,
    //   spaceBetween: 50,
    // },
  },
});

AOS.init({
  // Global settings:
  // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  // initClassName: 'aos-init', // class applied after initialization
  // animatedClassName: 'aos-animate', // class applied on animation
  // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  
  // // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  // offset: 120, // offset (in px) from the original trigger point
  // delay: 0, // values from 0 to 3000, with step 50ms
  // duration: 400, // values from 0 to 3000, with step 50ms
  // easing: 'ease', // default easing for AOS animations
  once: false, // si la animación debe ocurrir solo una vez, mientras se desplaza hacia abajo
  // mirror: false, // whether elements should animate out while scrolling past them
  // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

btnMenuProducts.addEventListener('click', function(){
	contentProducts.classList.toggle('open')
	arrowProduct.classList.toggle('rotate')
});

toggle.addEventListener('click', function(){
	menuToggle()
});

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (toggle.classList.contains("fa-bars")) {
		toggle.classList.remove('fa-bars')
		toggle.classList.add('fa-times')
	} else {
		toggle.classList.add('fa-bars')
		toggle.classList.remove('fa-times')
	}
}
/*HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
DEL SCROLL HACIA ARRIBA O ABAJO
*/
var scrollVar = -200;
window.addEventListener('scroll', function() {
	if ( document.body.getBoundingClientRect().top >= scrollVar )
		showlHeader()
	else {
		hidelHeader()
	}
});

function showlHeader() {
	header.classList.remove('fixed')
}

function hidelHeader() {
	header.classList.add('fixed')
}

function validateForm() {
	// Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      return true
    }
    form.classList.add('was-validated');
      return false
  });
}

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

// Carrusel Aspiracional Home
function galleryHome(imgs) {

  var expandImg = document.getElementById("expandedImg");
  var numberText = document.getElementById("number_text");

  const srcNew = imgs.src.replace('small','large');
  const text = imgs.getAttribute("data-text")
  const number = imgs.getAttribute("data-number")

  var imgText = document.getElementById("img_text");
  expandImg.src = srcNew; // Remplazamos la imagen
  imgText.innerHTML = text; // Remplazamos el texto
  numberText.innerHTML = number; // Remplazamos el numero

}

window.galleryHome = galleryHome; // hacemos la funcion global por webpack
// Carrusel Aspiracional Home end

if ( filename === '' || filename === 'index.php' ) { // Scripts para page especifica (String vacio = Home o raiz)

}



