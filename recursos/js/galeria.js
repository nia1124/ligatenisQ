
var gal =document.getElementById('foto');
var ImagenArray = ["../recursos/img/fondoheader.jpg","../recursos/img/n1.jpg", "../recursos/img/n2.jpg"];

var imagenIndex=0;
foto.setAttribute("src","../recursos/img/n2.jpg");
function cambiarImagenes()
{
	foto.setAttribute("src", ImagenArray [imagenIndex]);
	foto.setAttribute("class", "img-responsive");
	imagenIndex++;

	if (imagenIndex>=ImagenArray.length) 
		{
			imagenIndex=0;
		};
}

var intervalo = setInterval(cambiarImagenes,5000);

foto.onClick=function()
{
	clearInterval(intervalo);
}

