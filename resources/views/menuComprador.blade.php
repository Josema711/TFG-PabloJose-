<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <style>


    h1 {

text-align: center;


      color: BLACK;
      margin-left: 40px;
      font-family: 'Cantarell', sans-serif;



    }
    h2 {

text-align: center;


      color: BLACK;
      margin-left: 40px;
      font-family: 'Cantarell', sans-serif;



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
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>


<h2> ULTIMAS SUBASTAS</h2>
<li>subasta1 con imagen y info</li>
<li>subasta 2 conimagen e info</li>
<li>subasta3 con imagen e info</li>
<li>sybasta 4  con imagen e info</li>

<form action="/salida" method="get">
	 <input type="submit" value="Salir">
</form>


  </body>
</html>
