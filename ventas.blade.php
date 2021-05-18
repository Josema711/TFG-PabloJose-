<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <style>


    h1 {

text-align: center;


      color: BLACK;
      margin-left: 40px;
      font-family: 'Cantarell', sans-serif;
      font-size: 150px;



    }
    h2 {

text-align: center;


      color: BLACK;
      margin-left: 40px;
      font-family: 'Cantarell', sans-serif;
      font-size:85px;



    }
    @import url('https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,700&display=swap');

body {
  font-family: Libre Caslon Text;
  background-color: grey;
}
* {
    margin: 0;
    padding: 0;
}

.container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    scroll-behavior: smooth;
    background: Grey;
    font-family: 'Cantarell', sans-serif;
}

h1 a {
  font-size: 80px;
  color: black;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 200px;
    font-family: 'Cantarell', sans-serif;
}

.popover {
   display: none;
   box-shadow: 0px 6px 8px rgba(19, 19, 19, .7);
}

.popover:target {
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.popover .content {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 0;
  height: 0;
  color: #fff;
  background-color: grey;
  animation: 1s grow ease forwards;
  text-align: center;
}

.nav_list  {
  list-style-type: none;
}

.nav_list a {
  text-decoration: none;
  font-size: 50px;
  color: #fff;
}

.nav_list_item {
  height: 100%;
  overflow: hidden;
}

.nav_list li {
  padding: 15px 0;
  text-transform: uppercase;
  transform: translateY(200px);
  opacity: 0;
  animation: 2s slideUp ease forwards .5s;
  position: relative;
}

.nav_list li::before {
  content: '';
  position: absolute;
  height: 2px;
  width: 0px;
  left: 0;
  bottom: 10px;
  background: #BF2E97;
  transition: all .5s ease;
}

.nav_list li:hover:before {
      width: 100%;
}

.popover p {
  padding: 50px;
  opacity: 0;
  animation: 1s fadeIn ease forwards 1s;
}

.popover .close::after {
  right: 0;
  top: 0;
  width: 50px;
  height: 50px;
  position: absolute;
  display: flex;
  z-index: 1;
  font-size: 30px;
  align-items: center;
  justify-content: center;
  background-color: black;
  color: #fff;
  content: "×";
  cursor: pointer;
  opacity: 0;
  animation: 1s fadeIn ease forwards .5s;
}

@keyframes grow {
  100% {
    height: 90%;
    width: 90%;
 }
}

@keyframes fadeIn {
100% {
  opacity: 1;
 }
}

@keyframes slideUp {
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}





    @import url('https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@1,700&display=swap');

    </style>
    <meta charset="utf-8">
    <title>KEUKEGEN</title>
  </head>
  <body>
    <div class="container">
    <h1>
       <a href="#menu">KEUKEGEN </a>
    </h1>

   <div class="popover" id="menu">
    <div class = 'content'>
     <a href="#" class="close"></a>
      <div class = 'nav'>
       <ul class = 'nav_list'>

         <div class = 'nav_list_item'>
   	  <li><a href="#">Inicio</a></li>
         </div>
        <div class = 'nav_list_item'>
   		<li><a href="#">Nuevos</a></li>
         </div>
       <div class = 'nav_list_item'>
   	  <li><a href="#">Seminuevos</a></li>
         </div>
       <div class = 'nav_list_item'>
   	  <li><a href="#">Clásicos</a></li>
         </div>
        <div class = 'nav_list_item'>
   		<li><a href="#">Modificados</a></li>
         </div>

   	</ul>
     </div>
    </div>
    </div>
    </div>


		<h2>PORTFOLIO</h2>
		    <div id="myBtnContainer">

		      <button class="btn "  onclick="filterSelection('all')"> Todos</button>
		      <button class="btn" onclick="filterSelection('deportivos')"> Deportivos</button>
		      <button class="btn" onclick="filterSelection('daily')"> Daily</button>
		      <button class="btn" onclick="filterSelection('exclusivos')"> Exclusivos </button>
		    </div>
		    <a href="principal.html"> <img src="imagenes/IMAGENES/IMAGENES/iconohome.png" height="5%" width="5%"alt=""> </a>


		    <div class="row">
		      <div class="column deportivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/deportivo1.jpg" alt="Mountains" style="width:100%">
		          <h2>Aston Martin DB11</h2>
		          <ul>
		            <li><h3>Potencia: 604cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 12.8L/100</h3></li>
		  </ul>
		        </div>
		      </div>
		      <div class="column deportivos">
		        <div class="content">

		          <img src="imagenes/IMAGENES/IMAGENES/deportivo2.jpg" alt="Lights" style="width:100%" > </a>
		          <h2>Lamborghini Huracán LP610-4 </h2>
		          <ul>
		    <li><h3>Potencia: 602cv</h3></li>
		    <li><h3>Traccion: Trasera</h3></li>
		    <li><h3>Consumo: Mixto 15L/100</h3></li>
		  </ul>

		        </div>
		      </div>
		      <div class="column deportivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/deportivo3.jpg" alt="Nature" style="width:100%">
		          <h2>Lamborghini Aventador SVJ LP-1400</h2>
		          <ul>
		            <li><h3>Potencia: 770cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 18L/100</h3></li>
		  </ul>
		        </div>
		      </div>
		      <div class="column deportivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/deportivo4.jpg" alt="Nature" style="width:100%">
		          <h2>Ferrari 488 GTB Fiorano</h2>
		          <ul>
		            <li><h3>Potencia: 630cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 14.5L/100</h3></li>

		  </ul>
		        </div>
		      </div>

		      <div class="column deportivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/deportivo5.jpg" alt="Nature" style="width:100%">
		          <h2>Ferrari 488</h2>
		          <ul>
		            <li><h3>Potencia: 550cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 12.5L/100</h3></li>

		  </ul>
		        </div>
		      </div>

		      <div class="column deportivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/deportivo6.jpg" alt="Nature" style="width:100%">
		          <h2>Ferrari SF90 Scuderia</h2>
		          <ul>
		            <li><h3>Potencia: 589cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 14.5L/100</h3></li>

		  </ul>
		        </div>
		      </div>




		      <div class="column daily">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/daily1.jpg" alt="Car" style="width:100%">
		          <h2>Ford focus ST Performance</h2>
		          <ul>
		            <li><h3>Potencia: 280cv</h3></li>
		            <li><h3>Traccion: Delantera</h3></li>
		            <li><h3>Consumo: Mixto 8.9L/100</h3></li>


		  </ul>
		        </div>
		      </div>
		      <div class="column daily">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/daily2.jpg" alt="Car" style="width:100%">
		          <h2>BMW M2 Competizione M Spec</h2>
		          <ul>
		            <li><h3>Potencia: 330cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 9.5L/100</h3></li>

		  </ul>
		        </div>
		      </div>
		      <div class="column daily">
		      <div class="content">
		        <img src="imagenes/IMAGENES/IMAGENES/daily3.jpg" alt="Car" style="width:100%">
		        <h2>Audi RS5 ABT</h2>
		        <ul>
		          <li><h3>Potencia: 550cv</h3></li>
		          <li><h3>Traccion: Quattro</h3></li>
		          <li><h3>Consumo: Mixto 12.5L/100</h3></li>

		</ul>
		      </div>
		    </div>
		    <div class="column daily">
		    <div class="content">
		      <img src="imagenes/IMAGENES/IMAGENES/daily4.jpg" alt="Car" style="width:100%">
		      <h2>Masserati Ghibli</h2>
		      <ul>
		        <li><h3>Potencia: 320cv</h3></li>
		        <li><h3>Traccion: Seleccionable</h3></li>
		        <li><h3>Consumo: Mixto 10.5L/100</h3></li>

		</ul>
		    </div>
		  </div>
		  <div class="column daily">
		  <div class="content">
		    <img src="imagenes/IMAGENES/IMAGENES/daily5.jpg" alt="Car" style="width:100%">
		    <h2>Masserati Levante</h2>
		    <ul>
		      <li><h3>Potencia: 350cv</h3></li>
		      <li><h3>Traccion: Completa </h3></li>
		      <li><h3>Consumo: Mixto 11.5L/100</h3></li>

		</ul>
		  </div>
		</div>
		<div class="column daily">
		<div class="content">
		  <img src="imagenes/IMAGENES/IMAGENES/daily6.jpg" alt="Car" style="width:100%">
		  <h2>Mercedes Clase E Cabrio 63S AMG Edition One</h2>
		  <ul>
		    <li><h3>Potencia: 560cv</h3></li>
		    <li><h3>Traccion: Seleccionable</h3></li>
		    <li><h3>Consumo: Mixto 13.3L/100</h3></li>


		</ul>
		</div>
		</div>


		      <div class="column exclusivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/exclusivo1.jpg" alt="People" style="width:100%">
		          <h2>Brabus G Wagon AMG</h2>
		          <ul>
		            <li><h3>Potencia: 620cv</h3></li>
		            <li><h3>Traccion: Completa</h3></li>
		            <li><h3>Consumo: Mixto 21.5L/100</h3></li>


		  </ul>
		        </div>
		      </div>
		      <div class="column exclusivos">
		        <div class="content">
		          <img src="imagenes/IMAGENES/IMAGENES/exclusivo2.jpg" alt="People" style="width:100%">
		          <h2>BMW M4 CS</h2>
		          <ul>
		            <li><h3>Potencia: 510cv</h3></li>
		            <li><h3>Traccion: Trasera</h3></li>
		            <li><h3>Consumo: Mixto 14.5L/100</h3></li>


		  </ul>
		        </div>
		      </div>  <div class="column exclusivos">
		          <div class="content">
		            <img src="imagenes/IMAGENES/IMAGENES/exclusivo5.jpg" alt="People" style="width:100%">
		            <h2>Lamborhini Urus Novitec Carbon Fiber</h2>
		            <ul>
		              <li><h3>Potencia: 585cv</h3></li>
		              <li><h3>Traccion: Completa </h3></li>
		              <li><h3>Consumo: Mixto 18.5L/100</h3></li>


		    </ul>
		          </div>
		        </div>  <div class="column exclusivos">
		            <div class="content">
		              <img src="imagenes/IMAGENES/IMAGENES/exclusivo3.jpg" alt="People" style="width:100%">
		              <h2>Ferrari F12 N-Largo</h2>
		              <ul>
		                <li><h3>Potencia: 710cv</h3></li>
		                <li><h3>Traccion: Trasera</h3></li>
		                <li><h3>Consumo: Mixto 18.5L/100</h3></li>


		      </ul>
		            </div>
		          </div>  <div class="column exclusivos">
		              <div class="content">
		                <img src="imagenes/IMAGENES/IMAGENES/exclusivo4.jpg" alt="People" style="width:100%">
		                <h2>Lamborhini Urus Novitec Carbon Fiber</h2>
		                <ul>
		                  <li><h3>Potencia: 585cv</h3></li>
		                  <li><h3>Traccion: Completa/Semi-Seleccionable</h3></li>
		                  <li><h3>Consumo: Mixto 18.5L/100</h3></li>


		        </ul>
		              </div>
		            </div>  <div class="column exclusivos">
		                <div class="content">
		                  <img src="imagenes/IMAGENES/IMAGENES/exclusivo6.jpg" alt="People" style="width:100%">
		                  <h2>Brabus Rocket 800 AMG EDITION BRABUS</h2>
		                  <ul>
		                    <li><h3>Potencia: 800cv</h3></li>
		                    <li><h3>Traccion: Completa</h3></li>
		                    <li><h3>Consumo: Mixto 17.5L/100</h3></li>


		          </ul>
		                </div>
		              </div>
		    <!-- END GRID -->
		    </div>


  </body>
</html>
