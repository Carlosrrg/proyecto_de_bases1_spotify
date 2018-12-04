var miaudio,reproducir,barra,progreso,inicio,Iniciorespaldo,buscar,biblioteca,EscuchadosRecientemente,top50,divinicio,divbuscar,divbiblioteca,divEscuchadosRecientemente,divtop50,divsubprincipal,divVolumen,divControlarVolumen;

bucle2=setInterval(termino,30);

function comenzar(){

	/*variables para el reproductor*/
	miaudio=document.getElementById("musica");
	reproducir=document.getElementById("reproducir");
	barra=document.getElementById("barra");
	progreso=document.getElementById("progreso");
	divVolumen=document.getElementById("volumen");
	divControlarVolumen=document.getElementById("controlarVolumen");

	/*variables para botones de la barra lateral*/
	inicio=document.getElementById("buttonInicio");
	buscar=document.getElementById("buttonBuscar");
	biblioteca=document.getElementById("Btnbiblioteca");
	EscuchadosRecientemente=document.getElementById("BtnEscuchadosRecientemente");
	top50=document.getElementById("Btntop50");
	Iniciorespaldo=document.getElementById("buttonIniciorespaldo");
	
	
	/*variables para div*/
	divinicio=document.getElementById("inicio");
	divbuscar=document.getElementById("buscar");
	divbiblioteca=document.getElementById("biblioteca");
	divEscuchadosRecientemente=document.getElementById("EscuchadosRecientemente");
	divtop50=document.getElementById("top50");
	divsubprincipal=document.getElementById("subprincipal");

	/*eventos  para los botones del reproductor*/
	reproducir.addEventListener("click",play,false);
	barra.addEventListener("click",desplazar,false);
	divVolumen.addEventListener("click",volumen,false);

	/*eventos volumen*/

	
	/*eventos con las variables de los botones de la barra lateral */
	inicio.addEventListener("click",inicio1,false);
	buscar.addEventListener("click",buscar1,false);
	biblioteca.addEventListener("click",biblioteca1,false);
	EscuchadosRecientemente.addEventListener("click",EscuchadosRecientemente1,false);
	top50.addEventListener("click",top501,false);
	Iniciorespaldo.addEventListener("click",inicio1,false);


	miaudio.volume=0.5;

}

function play(){

	if((miaudio.paused==false) && (miaudio.ended==false)){
		miaudio.pause();
		document.getElementById("imagenplay").src="../img/play.png";

	}else{

		miaudio.play();
		document.getElementById("imagenplay").src="../img/pausa.png";
		bucle=setInterval(adelantar,30);


	}

}

function adelantar(){
	if(miaudio.ended==false){
		var total=parseInt(miaudio.currentTime*500/miaudio.duration);
		progreso.style.width=total+"px";

	}

	


}
function volumen(vol) {

		var ratonY=vol.pageX-divVolumen.offsetLeft;

		var nuevoVolumen=ratonY/100;

		miaudio.volume=nuevoVolumen;
		divControlarVolumen.style.width=ratonY+"px";

		if (nuevoVolumen==0.0) {
			document.getElementById('imagenSonido').src = "../img/sonidobajo.png";

		}
		else if(nuevoVolumen>0.0 && nuevoVolumen<0.9){
			document.getElementById('imagenSonido').src = "../img/sonidomedio.png";

		}else{
			document.getElementById('imagenSonido').src = "../img/sonidoalto.png";
		}

		
	}

function desplazar(posicion){

	if( miaudio.ended==false){

		var ratonX=posicion.pageX-barra.offsetLeft;

		var nuevoTiempo=ratonX*miaudio.duration/500;

		miaudio.currentTime=nuevoTiempo;
		progreso.style.width=ratonX+"px";
	}




}

function termino() {

	if(miaudio.ended==true)
		document.getElementById("imagenplay").src="../img/play.png";
}



function inicio1(){
	
	divinicio.style.display = 'block';
	divtop50.style.display = 'none';
	divEscuchadosRecientemente.style.display = 'none';
	divbiblioteca.style.display = 'none';
	divbuscar.style.display = 'none';
	divsubprincipal.style.background='linear-gradient(#2D2E51, #0D0E18)';




}
function buscar1(){
	divinicio.style.display = 'none';
	divtop50.style.display = 'none';
	divEscuchadosRecientemente.style.display = 'none';
	divbiblioteca.style.display = 'none';
	divbuscar.style.display = 'block';
	divsubprincipal.style.background='linear-gradient(#1A2B57, #090E1D)';




}
function biblioteca1(){
		divinicio.style.display = 'none';
		divtop50.style.display = 'none';
		divEscuchadosRecientemente.style.display = 'none';
		divbiblioteca.style.display = 'block';
		divbuscar.style.display = 'none';
		divsubprincipal.style.background='linear-gradient(#1A2B57, #090E1D)';





}
function EscuchadosRecientemente1(){
			divinicio.style.display = 'none';
			divtop50.style.display = 'none';
			divEscuchadosRecientemente.style.display = 'block';
			divbiblioteca.style.display = 'none';
			divbuscar.style.display = 'none';
			divsubprincipal.style.background='linear-gradient(#384C5F, #10151B)';



}
function top501(){
		divinicio.style.display = 'none';
		divtop50.style.display = 'block';
		divEscuchadosRecientemente.style.display = 'none';
		divbiblioteca.style.display = 'none';
		divbuscar.style.display = 'none';
		divsubprincipal.style.background='linear-gradient(#1B4C69, #07161E)';



}



window.addEventListener("load",comenzar,false);