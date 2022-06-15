var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});


var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
});

const contzoom = document.getElementById('ct-zoom');
const img = document.getElementById('img-zoom');

	contzoom.addEventListener("mousemove", (e) =>{
		const x = e.clientX - e.target.offsetLeft;
		const y = e.clientY - e.target.offsetTop;

		console.log(x,y);

		img.style.transformOrigin = '${x}px ${y}px';
		img.style,transform = "scale(2)";
	});

	contzoom.addEventListener("mouseleave", () =>{
		img.style.transformOrigin = "center";
		img.style.transform = "scale(1)";
	});