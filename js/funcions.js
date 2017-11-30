/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    al clicar una lletra mostra l'apartat corresponent
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

document.getElementById("lletraPDiv").addEventListener("click", function() {
    document.getElementById("stripe_lletra_U").style.visibility = "hidden";
    document.getElementById("stripe_lletra_L").style.visibility = "hidden";
    document.getElementById("stripe_lletra_S").style.visibility = "hidden";
    document.getElementById("stripe_lletra_E").style.visibility = "hidden";

    document.getElementById("stripe_lletra_P").style.visibility = "visible";
});

document.getElementById("lletraUDiv").addEventListener("click", function() {
	document.getElementById("stripe_lletra_P").style.visibility = "hidden";
    document.getElementById("stripe_lletra_L").style.visibility = "hidden";
    document.getElementById("stripe_lletra_S").style.visibility = "hidden";
    document.getElementById("stripe_lletra_E").style.visibility = "hidden";

    document.getElementById("stripe_lletra_U").style.visibility = "visible";
});

document.getElementById("lletraLDiv").addEventListener("click", function() {
	document.getElementById("stripe_lletra_P").style.visibility = "hidden";
    document.getElementById("stripe_lletra_U").style.visibility = "hidden";
    document.getElementById("stripe_lletra_S").style.visibility = "hidden";
    document.getElementById("stripe_lletra_E").style.visibility = "hidden";

    document.getElementById("stripe_lletra_L").style.visibility = "visible";
});

document.getElementById("lletraSDiv").addEventListener("click", function() {
	document.getElementById("stripe_lletra_P").style.visibility = "hidden";
    document.getElementById("stripe_lletra_U").style.visibility = "hidden";
    document.getElementById("stripe_lletra_L").style.visibility = "hidden";
    document.getElementById("stripe_lletra_E").style.visibility = "hidden";

    document.getElementById("stripe_lletra_S").style.visibility = "visible";
});

document.getElementById("lletraEDiv").addEventListener("click", function() {
	document.getElementById("stripe_lletra_P").style.visibility = "hidden";
    document.getElementById("stripe_lletra_U").style.visibility = "hidden";
    document.getElementById("stripe_lletra_L").style.visibility = "hidden";
    document.getElementById("stripe_lletra_S").style.visibility = "hidden";


    document.getElementById("stripe_lletra_E").style.visibility = "visible";
});

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    al passar per sobre una lletra aquesta s'aclareix
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/*var lletres = document.getElementsByClassName("lletra");

var aclarir = function(lletra) {
	var id = lletra.id;
	console.log(id);
	document.getElementById(id).style.color = "rgb(19,42,74)";
};

//Array.from(lletres, ll => ll.addEventListener("mouseenter", alert("dfaf")));

for (var i = 0; i < lletres.length; i++) {
    lletres[i].addEventListener('click', aclarir(lletres[i]), false);
}*/

document.getElementById("lletraP").addEventListener("mouseenter", function() {
	this.style.color = "rgb(19,42,74)";
	var txt = mostrarTextLletraP();
	document.getElementById("textLletraP").innerHTML = txt;
});

document.getElementById("lletraU").addEventListener("mouseenter", function() {
	this.style.color = "rgb(19,42,74)";
});

document.getElementById("lletraL").addEventListener("mouseenter", function() {
	this.style.color = "rgb(19,42,74)";
});

document.getElementById("lletraS").addEventListener("mouseenter", function() {
	this.style.color = "rgb(19,42,74)";
});

document.getElementById("lletraE").addEventListener("mouseenter", function() {
	this.style.color = "rgb(19,42,74)";
});


function mostrarTextLletraP() {
	return "PLAN Diseña tu estrategia digital";
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    al sortir d'una lletra aquesta s'enfosqueix
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

document.getElementById("lletraP").addEventListener("mouseout", function() {
	this.style.color = "rgb(5,29,65)";
	document.getElementById("textLletraP").innerHTML = "";
});

document.getElementById("lletraU").addEventListener("mouseout", function() {
	this.style.color = "rgb(5,29,65)";
});

document.getElementById("lletraL").addEventListener("mouseout", function() {
	this.style.color = "rgb(5,29,65)";
});

document.getElementById("lletraS").addEventListener("mouseout", function() {
	this.style.color = "rgb(5,29,65)";
});

document.getElementById("lletraE").addEventListener("mouseout", function() {
	this.style.color = "rgb(5,29,65)";
});


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    variable que conté tots el json amb tots els textos necessaris
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
var json;

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* funció que carrega l'arxiu .json i el parseja en una variable
   tmb assigna cada text del json a l'element html adequat */
$(document).ready(function(){
    var url = "json/data.json";
    $.getJSON(url, function(data) {
        var str = JSON.stringify(data);
        json = JSON.parse(str);

        document.getElementById("seccio_portada_text").innerHTML = json.apartados[0].contenido;
      
        document.getElementById("seccio_digital_pulse_txt_2").innerHTML = json.apartados[1].contenido;

        document.getElementById("stripe_titol1_lletra_P").innerHTML = json.apartados[2].secciones[0].titulo;
        document.getElementById("stripe_titol2_lletra_P").innerHTML = json.apartados[2].secciones[0].subtituloSecundario;
        document.getElementById("stripe_contingut1_text1_lletra_P").innerHTML = json.apartados[2].secciones[0].detalle[0].titulo;
        document.getElementById("stripe_contingut1_text2_lletra_P").innerHTML = json.apartados[2].secciones[0].detalle[0].contenido;
        document.getElementById("stripe_contingut2_text1_lletra_P").innerHTML = json.apartados[2].secciones[0].detalle[1].titulo;
        document.getElementById("stripe_contingut2_text2_lletra_P").innerHTML = json.apartados[2].secciones[0].detalle[1].contenido;

        document.getElementById("stripe_titol1_lletra_U").innerHTML = json.apartados[2].secciones[1].titulo;
        document.getElementById("stripe_titol2_lletra_U").innerHTML = json.apartados[2].secciones[1].subtituloSecundario;
        document.getElementById("stripe_contingut1_text1_lletra_U").innerHTML = json.apartados[2].secciones[1].detalle[0].titulo;
        document.getElementById("stripe_contingut1_text2_lletra_U").innerHTML = json.apartados[2].secciones[1].detalle[0].contenido;
        document.getElementById("stripe_contingut2_text1_lletra_U").innerHTML = json.apartados[2].secciones[1].detalle[1].titulo;
        document.getElementById("stripe_contingut2_text2_lletra_U").innerHTML = json.apartados[2].secciones[1].detalle[1].contenido;

        document.getElementById("stripe_titol1_lletra_L").innerHTML = json.apartados[2].secciones[2].titulo;
        document.getElementById("stripe_titol2_lletra_L").innerHTML = json.apartados[2].secciones[2].subtituloSecundario;
        document.getElementById("stripe_contingut1_text1_lletra_L").innerHTML = json.apartados[2].secciones[2].detalle[0].titulo;
        document.getElementById("stripe_contingut1_text2_lletra_L").innerHTML = json.apartados[2].secciones[2].detalle[0].contenido;
        document.getElementById("stripe_contingut2_text1_lletra_L").innerHTML = json.apartados[2].secciones[2].detalle[1].titulo;
        document.getElementById("stripe_contingut2_text2_lletra_L").innerHTML = json.apartados[2].secciones[2].detalle[1].contenido;

        document.getElementById("stripe_titol1_lletra_S").innerHTML = json.apartados[2].secciones[3].titulo;
        document.getElementById("stripe_titol2_lletra_S").innerHTML = json.apartados[2].secciones[3].subtituloSecundario;
        document.getElementById("stripe_contingut1_text1_lletra_S").innerHTML = json.apartados[2].secciones[3].detalle[0].titulo;
        document.getElementById("stripe_contingut1_text2_lletra_S").innerHTML = json.apartados[2].secciones[3].detalle[0].contenido;
        document.getElementById("stripe_contingut2_text1_lletra_S").innerHTML = json.apartados[2].secciones[3].detalle[1].titulo;
        document.getElementById("stripe_contingut2_text2_lletra_S").innerHTML = json.apartados[2].secciones[3].detalle[1].contenido;

        document.getElementById("stripe_titol1_lletra_E").innerHTML = json.apartados[2].secciones[4].titulo;
        document.getElementById("stripe_titol2_lletra_E").innerHTML = json.apartados[2].secciones[4].subtituloSecundario;
        document.getElementById("stripe_contingut1_text1_lletra_E").innerHTML = json.apartados[2].secciones[4].detalle[0].titulo;
        document.getElementById("stripe_contingut1_text2_lletra_E").innerHTML = json.apartados[2].secciones[4].detalle[0].contenido;
        document.getElementById("stripe_contingut2_text1_lletra_E").innerHTML = json.apartados[2].secciones[4].detalle[1].titulo;
        document.getElementById("stripe_contingut2_text2_lletra_E").innerHTML = json.apartados[2].secciones[4].detalle[1].contenido;

        /* falta la resta .. */

    })
});


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* E V E N T   L I S T E N E R S */

var scroll_portada = document.getElementById('seccio_portada');
var scroll_dp = document.getElementById('seccio_digital_pulse');
var scroll_pulse = document.getElementById('seccio_pulse');
var scroll3 = document.getElementById('scroll3');
var scroll4 = document.getElementById('scroll4');
var scroll5 = document.getElementById('scroll5');

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* E V E N T   L I S T E N E R S   X   F E R   S C R O L L */


scroll_portada.addEventListener('wheel', function(e) {
  if (e.deltaY > 0) {
    scroll_dp.scrollIntoView();
  }
});


scroll_dp.addEventListener('wheel', function(e) {
  if (e.deltaY < 0) {
    scroll_portada.scrollIntoView();
  }
  if (e.deltaY > 0) {
    scroll_pulse.scrollIntoView();
  }
});

scroll_pulse.addEventListener('wheel', function(e) {
  if (e.deltaY < 0) {
    scroll_dp.scrollIntoView();
  }
  if (e.deltaY > 0) {
    scroll3.scrollIntoView();
  }
});


scroll3.addEventListener('wheel', function(e) {
  if (e.deltaY < 0) {
    scroll_pulse.scrollIntoView();
  }
  if (e.deltaY > 0) {
    scroll4.scrollIntoView();
  }
});

scroll4.addEventListener('wheel', function(e) {
  if (e.deltaY < 100) {
    scroll3.scrollIntoView();
  }
  if (e.deltaY > 0) {
    scroll5.scrollIntoView();
  }
});

scroll5.addEventListener('wheel', function(e) {
  if (e.deltaY < 0) {
    scroll4.scrollIntoView();
  }
});


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* E V E N T   L I S T E N E R S   X RESALTAR UN TXT DEL MENÚ SEGONS LA SECCIÓ ACTUAL */

scroll_portada.addEventListener('mouseover', function(){
    document.getElementById("navbarLi1").classList.add("hoverClass");
});

scroll_portada.addEventListener('mouseleave', function(){
    document.getElementById("navbarLi1").classList.remove("hoverClass");
});

scroll_dp.addEventListener('mouseover', function(){
    document.getElementById("navbarLi2").classList.add("hoverClass");
});

scroll_dp.addEventListener('mouseleave', function(){
    document.getElementById("navbarLi2").classList.remove("hoverClass");
});

scroll_pulse.addEventListener('mouseover', function(){
    document.getElementById("navbarLi3").classList.add("hoverClass");
});

scroll_pulse.addEventListener('mouseleave', function(){
    document.getElementById("navbarLi3").classList.remove("hoverClass");
});