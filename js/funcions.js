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