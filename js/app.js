import AOS from 'aos';

const header = document.getElementsByTagName('header')[0]
const nav = document.getElementsByTagName('nav')[0]
const toggle = document.getElementById('btn_menu')

AOS.init()


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
var scrollVar = -400;
window.addEventListener('scroll', function() {


	if ( document.body.getBoundingClientRect().top >= scrollVar )
		showlHeader()
	else
		hidelHeader()
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

if ( filename === 'index.php') { // Scripts para page especifica
	// Scripts
}