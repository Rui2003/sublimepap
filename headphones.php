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
              <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
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
                  <a href="monitores.html">Monitores de Estudio</a><br>
                  <a href="samplers.html">Samplers & Efeitos</a>
                  <a href="sintetizadores.html">Sintetizadores</a>
                  <a href="teclados.html">Teclados</a>
                  <a href="controladores.html">Controladores MIDI</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a href="beginner.html">Curso DJ Begginer</a>
                 <a href="master.html">Curso DJ Master</a>
                 <a href="produtor.html">Curso Produtor</a>
                 <a href="scratch.html">Curso Scratch</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!--NavBar fim -->


<br>

<div class="container">
    <div class="row">
      <div class="col-md-12"><h5 align="center"><b>Head Phones</b></h5></div>
      <br>
      <br>
  </div>
      <div class="row">
        
           
        <div class="col-md-3 col-sm-6">
            

              
             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/x10.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>HDJ X-10</h6>
                <h5>275.00€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 5 - 40.000 Hz<br><br>
Impedância: 32 ohms</b></p>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
             
        
    </div>
            </div>
        </div>  




         <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rhp30.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RHP-30 Black</h6>
                <h5>125.00€</h5>
               <!-- <p class="card-text"><b>  Auscultadores para DJ<br><br>
                Driver de 40 mm<br><br>
                Frequência de Resposta 10 Hz a 24 kHz </p></b>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
              </div>
            </div>
        </div>  





 <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rhp30s.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RHP-30 Silver</h6>
                <h5>125.00€</h5>
               <!-- <p class="card-text"><b>  Auscultadores para DJ<br><br>
                Driver de 40 mm<br><br>
                Frequência de Resposta 10 Hz a 24 kHz </p></b>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
             
                
              </div>
            </div>
        </div>  




 <div class="col-md-3 col-sm-6">
            

             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/akg.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">AKG</a>
                </h4>
                 <h6>K181 Dj UE</h6>
                <h5>125.00€</h5>
               <!-- <p class="card-text"><b> Headphones Profissionais de DJ<br><br>
              Frequências: 5 Hz – 30000 Hz<br><br>
               Impedância: 42 Ohms </p></b>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
          
                
              </div>
            </div>
        </div>    




 <div class="col-md-3 col-sm-6">
            

              
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/x7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>HDJ X7</h6>
                <h5>149.00€</h5>
              <!--  <p class="card-text"><b> Headphones Profissionais de DJ<br><br>
              Frequências: 5 Hz – 30000 Hz<br><br>
               Impedância: 36 ohms </p></b>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  



<div class="col-md-3 col-sm-6">
            

    <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/hd25.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sennheiser</a>
                </h4>
                 <h6>HD-25</h6>
                <h5>149.00€</h5>
              <!--  <p class="card-text"><b> Headphones Profissionais de DJ<br><br>
              Frequências: 6 Hz – 22000 Hz<br><br>
               Impedância: 70 ohms </p></b>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/srh.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Shure</a>
                </h4>
                 <h6>SRH440</h6>
                <h5>89.0€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 10 – 22 000 Hz<br><br>
Impedância: 44 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  


<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/240a.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Shure</a>
                </h4>
                 <h6>SRH240A</h6>
                <h5>60.0€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 20 – 20 000 Hz<br><br>
Impedância: 44 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            
<div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/s7k.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>HDJ-S7-K </h6>
                <h5>189.0€</h5>
                <!--<p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 5Hz 40kHz<br><br>
Impedância: 48 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  





<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/s7w.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>HDJ-S7-W </h6>
                <h5>189.0€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais de DJ<br><br>
Frequência : 5Hz 40kHz<br><br>
Impedância: 48 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>


<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rh1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Rane</a>
                </h4>
                 <h6>RH-1</h6>
                <h5>49.0€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais de Estúdio/DJ<br><br>
Frequência : 15Hz 28kHz<br><br>
Impedância: 32 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">





</div>
    </div>

</div>




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rh2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Rane</a>
                </h4>
                 <h6>RH-2</h6>
                <h5>69.0€</h5>
           <!--     <p class="card-text"><b>Headphones Profissionais de Estúdio/DJ<br><br>
Frequência : 10Hz - 30kHz<br><br>
Impedância: 32 ohms</b><br>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">



</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/redwavecarbon.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>Red Wave Carbon</h6>
                <h5>60.00€</h5>
              <!--  <p class="card-text"><b>Headphone DJ Profissional<br><br>
Range 5 hz - 30.000 Khz<br><br>
Design atraente<br><br></b>-->

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rh2500.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6> RH-2500</h6>
                <h5>35.00€</h5>
                <!--<p class="card-text"><b>Auscultadores de DJ Profissionais<br><br>
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
              <a href="#"><img class="card-img-top" src="img/aiaiai1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">AIAIAI</a>
                </h4>
                 <h6>TMA-2 MOVE</h6>
                <h5>220.00€</h5>
              <!--  <p class="card-text"><b>Headphones Profissionais Bluetooth alta qualidade<br><br>
Frequência de resposta: 20 Hz – 20000 Hz<br><br>
Impedância: 32 Ohm<br><br></b>-->

              </div>
             <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a> 
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/tma2hd.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">AIAIAI</a>
                </h4>
                 <h6>TMA-2-HD</h6>
                <h5>299.00€</h5>
               <!-- <p class="card-text"><b>Headphones Profissionais Modulares alta qualidade<br><br>
Frequência de resposta: 20 Hz – 20000 Hz<br><br>
Impedância: 32 Ohm<br><br></b>-->

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