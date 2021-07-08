  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>

<link rel="stylesheet" type="text/css" href="nav.css">



<style>



* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>


<!--NavBar -->
        
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.html">MusicPlanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre Nos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               DJ
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a href="mesas.php">Mesas de Mistura</a>
                  <a href="gd.php">Gira Discos</a>
                  <a href="controladoras.php">Controladoras</a>
                  <br>
                  <a href="headphones.php">Head Phones</a>
                  <a href="leitores.php">Leitores[XDJ & CDJ]</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Estudio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a href="monitores.php">Monitores de Estudio</a><br>
                  <a href="samplers.php">Samplers & Efeitos</a>
                  <a href="sintetizadores.php">Sintetizadores</a>
                  <a href="teclados.php">Teclados</a>
                  <a href="controladores.php">Controladores MIDI</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a href="cursodjbeginner.php">Curso DJ Begginer</a>
                 <a href="cursodjmaster.php">Curso DJ Master</a>
                 <a href="cursoprodutor.php">Curso Produtor</a>
                 <a href="scratch.php">Curso Scratch</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!--NavBar fim -->


<br>

<div class="container">
    <div class="row">
      <div class="col-md-12"><h5 align="center"><b>Leitores Multimédia</b></h5></div>
      <br>
      <br>
  </div>
      <div class="row">
        
           
        <div class="col-md-3 col-sm-6">
            

              
             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/djs1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>DJS-1000</h6>
                <h5>1098.00€</h5>
  <!-- tirar caracteristicas
                <p class="card-text"><b>Sampler Sequenciador stand alone<br><br>
Ecran táctil colorido<br><br>
MIDI in/out, USB e LINK RJ45</b></p>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
             
        
    </div>
            </div>
        </div>  




         <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/denonsc6000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Denon</a>
                </h4>
                 <h6>SC-6000 Prime</h6>
                <h5>1499.00€</h5>
          <!--      <p class="card-text"><b> OFERTA DE HEADPHONES HD 25 SENNHEISER<br><br>
                Leitor multimédia profissional<br><br>
                Display 10.1" Touchscreen e WiFi Streaming </p></b>
              -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
              </div>
            </div>
        </div>  





 <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdj3000.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>CDJ-3000</h6>
                <h5>2400€</h5>
               <!-- <p class="card-text"><b>  Leitor Mutimédia profissional para DJ<br><br>
               Novas funções Touch Preview, Touch Cue e 3Band Waveform<br><br>
                Microprocessador incorporado para um performance superior </p></b>
              -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
             
                
              </div>
            </div>
        </div>  




 <div class="col-md-3 col-sm-6">
            

             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdj350.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>CDJ 350</h6>
                <h5>580.00€</h5>
              <!--  <p class="card-text"><b> Leitor Multimédia Profissional<br><br>
              Ecra LCD multi-color de pequenas dimensões<br><br>
             Compactivel com CD, PEN e MidiUSB </p></b>
           -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
                
              </div>
            </div>
        </div>    




 <div class="col-md-3 col-sm-6">
            

              
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdn77.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>CDN 77 USB</h6>
                <h5>333.00€</h5>
               <!-- <p class="card-text"><b> Headphones Profissionais de DJ<br><br>
              Permite carregar duas musicas em simultâneo a partir do mesmo suporte USB<br><br>
              Slot de CD's </p></b>
            -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  



<div class="col-md-3 col-sm-6">
            

    <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdj850.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>CDJ 850</h6>
                <h5>899.00€</h5>
             <!--   <p class="card-text"><b>Leitor Multimedia Profissional<br><br>
            Ecra LCD multi-color<br><br>
              Compactivel com CD, PEN e MidiUSB </p></b>
            -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ndx.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>NDX-400</h6>
                <h5>109.0€</h5>
              <!--  <p class="card-text"><b>Compativel com MP3, CDS<br><br>
Entrada USB<br><br>
Auto BPM e TAP</b><br>
-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  


<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ndx500.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>NDX 500</h6>
                <h5>209.0€</h5>
               <!-- <p class="card-text"><b>Leitor CDs / USB Profissional<br><br>
Controlador USB MIDI<br><br>
Pitch variável até 100%</b><br>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            
<div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdj2000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>CDJ 2000NXS2 </h6>
                <h5>1989.0€</h5>
               <!-- <p class="card-text"><b>Leitor Multimédia Profissional<br><br>
Ecrá LCD tátil de 7"<br><br>
Compativel com CD, Pen e MidiUSB</b><br>
              -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  





<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/cdj900.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>CDJ-900 NXS </h6>
                <h5>1299.0€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 5Hz 40kHz<br><br>
Impedância: 48 ohms</b><br>
              -->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>
    
</div>


<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xdj700.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ 700</h6>
                <h5>615.00€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais de Estúdio/DJ<br><br>
Frequência : 15Hz 28kHz<br><br>
Impedância: 32 ohms</b><br>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">





</div>
    </div>

</div>




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xdj1000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ 1000</h6>
                <h5>1090.00€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais de Estúdio/DJ<br><br>
Frequência : 10Hz - 30kHz<br><br>
Impedância: 32 ohms</b><br>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">



</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xdjrr.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ RR</h6>
                <h5>970.00€</h5>
              <!--  <p class="card-text"><b>Headphone DJ Profissional<br><br>
Range 5 hz - 30.000 Khz<br><br>
Design atraente<br><br></b>
-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rx2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ RX-2</h6>
                <h5>1459.00€</h5>
             <!--   <p class="card-text"><b>Auscultadores de DJ Profissionais<br><br>
Frequências 20 Hz - 20 kHz<br><br>
Impedância: 32 ohms
<br><br></b>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xdjxz.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ-XZ</h6>
                <h5>1999.00€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais Bluetooth alta qualidade<br><br>
Frequência de resposta: 20 Hz – 20000 Hz<br><br>
Impedância: 32 Ohm<br><br></b>
-->
              </div>
             <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a> 
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xdjr1.png " alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>XDJ-R1</h6>
                <h5>439.00€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais Modulares alta qualidade<br><br>
Frequência de resposta: 20 Hz – 20000 Hz<br><br>
Impedância: 32 Ohm<br><br></b>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>








































<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>