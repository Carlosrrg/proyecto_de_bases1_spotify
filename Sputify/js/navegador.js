var miaudio,reproducir,barra,progreso,inicio,Iniciorespaldo,buscar,biblioteca,EscuchadosRecientemente,top50,divinicio,divbuscar,divbiblioteca,divEscuchadosRecientemente,divtop50;

bucle2=setInterval(termino,30);

function comenzar(){

	miaudio=document.getElementById("musica");
	reproducir=document.getElementById("reproducir");
	barra=document.getElementById("barra");
	progreso=document.getElementById("progreso");

	inicio=document.getElementById("buttonInicio");
	buscar=document.getElementById("buttonBuscar");
	biblioteca=document.getElementById("Btnbiblioteca");
	EscuchadosRecientemente=document.getElementById("BtnEscuchadosRecientemente");
	top50=document.getElementById("Btntop50");
	Iniciorespaldo=document.getElementById("buttonIniciorespaldo");
	
	divinicio=document.getElementById("inicio");
	divbuscar=document.getElementById("buscar");
	divbiblioteca=document.getElementById("biblioteca");
	divEscuchadosRecientemente=document.getElementById("EscuchadosRecientemente");
	divtop50=document.getElementById("top50");


	reproducir.addEventListener("click",play,false);
	barra.addEventListener("click",desplazar,false);

	inicio.addEventListener("click",inicio1,false);
	buscar.addEventListener("click",buscar1,false);
	biblioteca.addEventListener("click",biblioteca1,false);
	EscuchadosRecientemente.addEventListener("click",EscuchadosRecientemente1,false);
	top50.addEventListener("click",top501,false);
	Iniciorespaldo.addEventListener("click",inicio1,false);


}

function play(){

	if((miaudio.paused==false) && (miaudio.ended==false)){
		miaudio.pause();
		document.getElementById("imagenplay").src="../img/play.jpg";

	}else{

		miaudio.play();
		document.getElementById("imagenplay").src="../img/pausa.jpg";
		bucle=setInterval(adelantar,30);


	}

}

function adelantar(){
	if(miaudio.ended==false){
		var total=parseInt(miaudio.currentTime*500/miaudio.duration);
		progreso.style.width=total+"px";

	}


}

function desplazar(posicion){

	if((miaudio.paused==false) && (miaudio.ended==false)){

		var ratonX=posicion.pageX-barra.offsetLeft;

		var nuevoTiempo=ratonX*miaudio.duration/500;

		miaudio.currentTime=nuevoTiempo;
		progreso.style.width=ratonX+"px";
	}




}

function termino() {

	if(miaudio.ended==true)
		document.getElementById("imagenplay").src="../img/play.jpg";
}



function inicio1(){
	
	divinicio.style.display = 'block';
	divtop50.style.display = 'none';
	divEscuchadosRecientemente.style.display = 'none';
	divbiblioteca.style.display = 'none';
	divbuscar.style.display = 'none';



}
function buscar1(){
	divinicio.style.display = 'none';
	divtop50.style.display = 'none';
	divEscuchadosRecientemente.style.display = 'none';
	divbiblioteca.style.display = 'none';
	divbuscar.style.display = 'block';




}
function biblioteca1(){
		divinicio.style.display = 'none';
		divtop50.style.display = 'none';
		divEscuchadosRecientemente.style.display = 'none';
		divbiblioteca.style.display = 'block';
		divbuscar.style.display = 'none';





}
function EscuchadosRecientemente1(){
			divinicio.style.display = 'none';
			divtop50.style.display = 'none';
			divEscuchadosRecientemente.style.display = 'block';
			divbiblioteca.style.display = 'none';
			divbuscar.style.display = 'none';



}
function top501(){
		divinicio.style.display = 'none';
		divtop50.style.display = 'block';
		divEscuchadosRecientemente.style.display = 'none';
		divbiblioteca.style.display = 'none';
		divbuscar.style.display = 'none';



}



window.addEventListener("load",comenzar,false);