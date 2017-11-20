/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* al clicar una lletra mostra l'apartat corresponent */

document.getElementById("lletraP").addEventListener("click", function() {
    document.getElementById("infoScroll2U").style.visibility = "hidden";
    document.getElementById("infoScroll2L").style.visibility = "hidden";
    document.getElementById("infoScroll2S").style.visibility = "hidden";
    document.getElementById("infoScroll2E").style.visibility = "hidden";

    document.getElementById("infoScroll2P").style.visibility = "visible";
});

document.getElementById("lletraU").addEventListener("click", function() {
	document.getElementById("infoScroll2P").style.visibility = "hidden";
    document.getElementById("infoScroll2L").style.visibility = "hidden";
    document.getElementById("infoScroll2S").style.visibility = "hidden";
    document.getElementById("infoScroll2E").style.visibility = "hidden";

    document.getElementById("infoScroll2U").style.visibility = "visible";
});

document.getElementById("lletraL").addEventListener("click", function() {
	document.getElementById("infoScroll2P").style.visibility = "hidden";
    document.getElementById("infoScroll2U").style.visibility = "hidden";
    document.getElementById("infoScroll2S").style.visibility = "hidden";
    document.getElementById("infoScroll2E").style.visibility = "hidden";

    document.getElementById("infoScroll2L").style.visibility = "visible";
});

document.getElementById("lletraS").addEventListener("click", function() {
	document.getElementById("infoScroll2P").style.visibility = "hidden";
    document.getElementById("infoScroll2U").style.visibility = "hidden";
    document.getElementById("infoScroll2L").style.visibility = "hidden";
    document.getElementById("infoScroll2E").style.visibility = "hidden";

    document.getElementById("infoScroll2S").style.visibility = "visible";
});

document.getElementById("lletraE").addEventListener("click", function() {
	document.getElementById("infoScroll2P").style.visibility = "hidden";
    document.getElementById("infoScroll2U").style.visibility = "hidden";
    document.getElementById("infoScroll2L").style.visibility = "hidden";
    document.getElementById("infoScroll2S").style.visibility = "hidden";


    document.getElementById("infoScroll2E").style.visibility = "visible";
});

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* al passar per sobre una lletra aquesta s'aclareix */

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
	return "hola que tal";
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* al sortir d'una lletra aquesta s'enfosqueix */


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

