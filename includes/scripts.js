
/* Mostra a Label com a descrição da utilização das informações do input nos formulários */
function mostrahelp(labelidhelp){

	document.getElementById(labelidhelp).style.visibility = "visible";

}

function menuclick(pagina){
	alert("aa");
	$( "#content" ).load( "./"+ pagina +".html" );
	$(this).addClass("menuativo");
}



function returnUid() {
   var ref      = createRef();
   var authData = ref.getAuth();
   
   if (authData) {
       return authData.uid;
   }
}

function returnEmail() {
   var ref      = createRef();
   var authData = ref.getAuth();
   
   if (authData) {
       return authData.password.email;
   }
}