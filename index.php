<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="css/estil.css">

</head>
<!-- The scrollable area -->
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

	<div class="container-fluid">

		<nav class="navbar" id="myScrollspy">
			<!--<ul class="nav nav-pills nav-stacked">-->
			<ul class="nav navbar-nav">
          		<li class="active" id="navbarLi1"><a href="#portada">Inicio</a></li>
          		<li id="navbarLi2"><a href="#seccio_digital_pulse">Digital pulse</a></li>
          		<li id="navbarLi3"><a href="#seccio_pulse">Pulse</a></li>
          		<li id="navbarLi4"><a href="#scroll3">Toma tu pulso digital</a></li>
          		<li id="navbarLi5"><a href="#scroll4">Modalidades</a></li>
          		<li id="navbarLi6"><a href="#scroll5">Contacto</a></li>
        	</ul>
		</nav>

		<div id="contingut">


            <!--                -->
            <!-- S E C C I Ó  0 --> <!-- P O R T A D A -->
            <!--                -->

			<div id="seccio_portada">
                
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <img id="digitalPulseGranIMG" src="media/digitalPulse.png">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <img id="seidorGranIMG" src="media/seidorGran.png">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <img id="pulseGranIMG" src="media/pulseGran.png">
                            </div>
                        </div>
                    </div>

                    <p id="seccio_portada_text"></p>
                
      		</div>

            <!--                -->
            <!-- S E C C I Ó  1 --> <!-- D I G I T A L   P U L S E -->
            <!--                -->

            <div id="seccio_digital_pulse">

                <?php include 'php/bodyHeader.php'; ?>

                <div id="seccio_digital_pulse_div"></div>
                    <h1 id="seccio_digital_pulse_txt_1">Acelera tu <span class="txtToBlue">pulso digital</span></h1>
                    <p id="seccio_digital_pulse_txt_2"></p>
                    <p id="seccio_digital_pulse_txt_3">Te acompañamos en este viaje, desde la definición de tu visión digital hasta el despliegue de la tecnología;<br>situando siempre a las personas en el centro, porque ellas son las verdaderas protagonistas del cambio.</p>
                    <p id="seccio_digital_pulse_txt_4">Acelera el pulso digital de tu organización para ganar competitividad y optimizar resultados. </p>
                    <p id="seccio_digital_pulse_txt_5">¿Quieres latir en digital?</p>
                
            </div>
      		
            <!--                -->
            <!-- S E C C I Ó  2 --> <!-- P U L S E -->
            <!--                -->

      		<div id="seccio_pulse">
        		
                <?php include 'php/bodyHeader.php';?>

                <!-- LLETRES -->

                <div id="lletresPulse">
                    
                    <!-- LLETRA P -->
                    <div id="lletraPDiv">
                        <span class="lletra" id="lletraP">P</span>
                        <span class="textLletra" id="textLletraP"></span>
                    </div>
                    
                    <!-- LLETRA U -->
                    <div id="lletraUDiv">
                        <span class="lletra" id="lletraU">U</span>
                        <span class="textLletra" id="textLletraU"></span>
                    </div>
                    
                    <!-- LLETRA L -->
                    <div id="lletraLDiv">
                        <span class="lletra"  id="lletraL">L</span>
                        <span class="textLletra" id="textLletraL"></span>
                    </div>

                    <!-- LLETRA S -->
                    <div id="lletraSDiv">
                        <span class="lletra"  id="lletraS">S</span>
                        <span class="textLletra" id="textLletraS"></span>
                    </div>

                    <!-- LLETRA E -->
                    <div id="lletraEDiv">
                        <span class="lletra"  id="lletraE">E</span>
                        <span class="textLletra" id="textLletraE"></span>
                    </div>
                </div>


                <!-- INFORMACIÓ DE CADA UNA DE LES LLETRES -->
                <!-- NOMÉS UN DE VISIBLE A L'HORA -->

                <!-- LLETRA P -->
                <div id="stripe_lletra_P">
                    
                    <p class="stripe_titol1" id="stripe_titol1_lletra_P"></p>
                    <p class="stripe_titol2" id="stripe_titol2_lletra_P"></p>
                    
                    <div class="stripe_continguts">
                        
                        <div class="stripe_contingut1">
                            <span class="stripe_text1" id="stripe_contingut1_text1_lletra_P"></span>
                            <img src="media/check.png">
                            <br>
                            <span class="stripe_text2_lletra_P" id="stripe_contingut1_text2_lletra_P"></span>
                        </div>

                        <div class="stripe_contingut2_lletra_P">
                            <span class="stripe_text1" id="stripe_contingut2_text1_lletra_P"></span>
                            <img src="media/map.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut2_text2_lletra_P"></span>
                        </div>
                    </div>
                </div>


                <!-- LLETRA U -->
                <div id="stripe_lletra_U">
                    
                    <p class="stripe_titol1" id="stripe_titol1_lletra_U"></p>
                    <p class="stripe_titol2" id="stripe_titol2_lletra_U"></p>
                    
                    <div class="stripe_continguts">
                        
                        <div class="stripe_contingut1">
                            <span class="stripe_text1" id="stripe_contingut1_text1_lletra_U"></span>
                            <img src="media/office.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut1_text2_lletra_U"></span>
                        </div>

                        <div class="stripe_contingut2">
                            <span class="stripe_text1" id="stripe_contingut2_text1_lletra_U"></span>
                            <img src="media/wins.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut2_text2_lletra_U"></span>
                        </div>
                    </div>
                </div>
                

                <div id="stripe_lletra_L">
                    
                    <p class="stripe_titol1" id="stripe_titol1_lletra_L"></p>
                    <p class="stripe_titol2" id="stripe_titol2_lletra_L"></p>
                    
                    <div class="stripe_continguts">
                        
                        <div class="stripe_contingut1">
                            <span class="stripe_text1" id="stripe_contingut1_text1_lletra_L"></span>
                            <img src="media/office.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut1_text2_lletra_L"></span>
                        </div>

                        <div class="stripe_contingut2">
                            <span class="stripe_text1" id="stripe_contingut2_text1_lletra_L"></span>
                            <img src="media/seminars.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut2_text2_lletra_L"></span>
                        </div>
                    </div>
                </div>

                <div id="stripe_lletra_S">
                    
                    <p class="stripe_titol1" id="stripe_titol1_lletra_S"></p>
                    <p class="stripe_titol2" id="stripe_titol2_lletra_S"></p>
                    
                    <div class="stripe_continguts">
                        
                        <div class="stripe_contingut1">
                            <span class="stripe_text1" id="stripe_contingut1_text1_lletra_S"></span>
                            <img src="media/office.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut1_text2_lletra_S"></span>
                        </div>

                        <div class="stripe_contingut2">
                            <span class="stripe_text1" id="stripe_contingut2_text1_lletra_S"></span>
                            <img src="media/network.png">
                            <br>
                            <!-- s'ha de canviar per la URL correcte -->
                            <span class="stripe_text2"><a href="http://www.google.com/search?q=Club+digital+ESADE" id="stripe_contingut2_text2_lletra_S"></a></span>
                        </div>
                    </div>
                </div>

                <div id="stripe_lletra_E">
                    
                    <p class="stripe_titol1" id="stripe_titol1_lletra_E"></p>
                    <p class="stripe_titol2" id="stripe_titol2_lletra_E"></p>
                    
                    <div class="stripe_continguts">
                        
                        <div class="stripe_contingut1">
                            <span class="stripe_text1" id="stripe_contingut1_text1_lletra_E"></span>
                            <img src="media/office.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut1_text2_lletra_E"></span>
                        </div>

                        <div class="stripe_contingut2">
                            <span class="stripe_text1" id="stripe_contingut2_text1_lletra_E"></span>
                            <img src="media/ventures.png">
                            <br>
                            <span class="stripe_text2" id="stripe_contingut2_text2_lletra_E"></span>
                        </div>
                    </div>
                </div>

      		</div>

      		<div id="scroll2">
        		<h1>Section 2</h1>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      		</div>

      		<div id="scroll3">    
        		<h1>Section 3</h1>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      		</div>

      		<div id="scroll4">    
        		<h1>Section 4</h1>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      		</div>

            <div id="scroll5">    
                <h1>Section 5</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
		</div>

	</div>

    <!--<li class='hidden-xs'><a href="json/data.json" class="import"><i class='pix pix-2x'>import</i></a></li>
    <input type="file" id="input" class="upload-json"> --> <!-- escondido por CSS -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/funcions.js"></script>

</body>
</html>