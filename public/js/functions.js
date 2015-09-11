//intervalo tiempo cambio img slide, 5 segundos, se llama a la función "avanzaSlide()"
setInterval('avanzaSlide()',7000);
 
//array con las clases para las diferentes imagenes
var arrayImagenes = new Array(".slider1",".slider2",".slider3");
 
//variable que nos permitirá saber qué imagen se está mostrando
var contador = 0;
 
//hace un efecto fadeIn para mostrar una imagen
function mostrar(div){
	$(div).ready(function(){				
  		$(arrayImagenes[contador]).fadeIn(1500);		
	});
}
 
//hace un efecto fadeOut para ocultar una imagen
function ocultar(div){
	$(div).ready(function(){				
  		$(arrayImagenes[contador]).fadeOut(1500);		
	});
}
 
//función principal
function avanzaSlide(){
        //se oculta la imagen actual
	ocultar(arrayImagenes[contador]);
        //aumentamos el contador en una unidad
	contador = (contador + 1) % 3;
        //mostramos la nueva imagen
    setTimeout("mostrar(arrayImagenes[contador])", 1500); 
	
}