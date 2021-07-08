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
      <div class="col-md-12"><h5 align="center"><b>Gira Discos</b></h5></div>
      <br>
      <br>
  </div>
      <div class="row">
        
           
        <div class="col-md-3 col-sm-6">
            

              
             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp1000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RP 1000 MK2</h6>
                <h5>199.00€</h5>
                <br>
               <!-- <p class="card-text"><b>Gira-discos Profissional ideal para DJ<br><br>
Motor acionado por correia absorve vibracoes e ruidos indesejados<br><br>
Inclui agulha </b></p>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  
        




         <div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/mk7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Technics</a>
                </h4>
                 <h6>SL-1210 MK7</h6>
                <h5>899.00€</h5>

              <!--  <p class="card-text"><b>Gira-discos direct drive<br><br>
Torque 1,8 KG Pitch 8% / 16%<br><br>
Rotacoes: 33 1/3, 45 and 78 rpm<br><br>
Dimensoes (W x H x D): 453 x 169 x 353 mm peso 9,6 kg</b><br></p>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

          
              </div>
            </div>
        </div>  





 <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/vl12.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Denon</a>
                </h4>
                 <h6>VL12 Prime</h6>
                <h5>480.00€</h5>
               <!-- <p class="card-text"><b>Gira-discos analogico profissional<br><br>
Braco em forma de S para maior precisão e facilidade de control<br><br>
Iluminacao RGB integrada</b></p>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
             
                
              </div>
            </div>
        </div>  




 <div class="col-md-3 col-sm-6">
            

              
              <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/plx1000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>PLX-1000</h6>
                <h5>619.0€</h5>
              <!--  <p class="card-text"><b>Gira-discos profissional<br>
Traccao direta / Variacao de Pitch<br><br>
Torque: 4,5kg<br><br>
Cabos: RCA, Terra e de alimentacao destacaveis</b></p>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>    




 <div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/spin.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop </a>
                </h4>
                 <h6>Spin</h6>
                <h5>229.0€</h5>
              <!--  <p class="card-text"><b>Gira Disco portatil para Scratch<br><br>
Conexao Bluetooth para audio streaming<br><br>
App exclusiva Super Spin Duck Looper</b></p>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  



<div class="col-md-3 col-sm-6">
            

    <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/tt250.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>TT 250 USB</h6>
                <h5>249.90€</h5>
               <!-- <p class="card-text"><b>Gira-discos direct drive<br><br>
Conversao digital via USB<br><br>
Inclui agulha</b></p>
-->
              </div>  
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/turn3.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>TURN 3(V)</h6>
                <h5>475.0€</h5>
             <!--   <p class="card-text"><b>Gira-Discos Hifi analógico de alta fidelidade com interface digital USB<br><br>
4 efeitos integrados / Equalização de 3 bandas<br><br>
Inclui agulha e tampa de acrílico protectora</b><br>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  


<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/redbull.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Technics</a>
                </h4>
                 <h6>SL-1210 MK7R Red Bull BC One Limited Edition</h6>
                <h5>2925.00€</h5>
               <!-- <p class="card-text"><b>Gira-discos direct drive Edição Limitada Redbull<br><br><br>
Torque 1,8 KG Pitch 8% / 16%<br><br>
Dimensões (W x H x D): 453 x 169 x 353 mm peso 9,6 kg</b><br><br>
-->
              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp2000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RP-2000 MK2 </h6>
                <h5>170.00€</h5>
              <!--  <p class="card-text"><b>Gira-discos Profissional<br><br>
Chassi de metal<br><br>
2 velocidades 33 1/3 rpm, 45, totalmente manuais<br><br>
Dimensões: 450 x 144 x 352 milímetros<br><br>
</b><p>
-->

              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  





<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp4000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RP-4000 MK2</h6>
                <h5>1400.00€</h5>
              <!--  <p class="card-text"><b>Gira-discos Profissional<br><br>
3 velocidades, totalmente manual<br><br>
Controle de pitch +/- 10% e +/- 20%<br><br>
</b>-->
<div align="center">

</div>   
           </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>


<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp7000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RP-7000 MK2 Silver</h6>
                <h5>489.00€</h5>
               <!-- <p class="card-text"><b>Gira discos professional<br><br>
Pitch: ajuste variável +/-8%, +/-16%, +/-50%<br><br>
Bloqueio Quartz<br><p></b>-->


              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp8000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RP-8000 Straight</h6>
                <h5>600.00€</h5>
              <!--  <p class="card-text"><b>Gira discos professional<br><br>
Tracção directa<br><br>
BPM pode ser mostrado no visor<br><br></b>-->

              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/wd.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Enova</a>
                </h4>
                 <h6>VISION4 USB WD [v]</h6>
                <h5>250.00€</h5>
             <!--   <p class="card-text"><b>Gira-discos semi-profissional USB/ Bluetooth<br><br>
Velocidade de escolha: 33 ou 45T com um seletor no quadro<br><br>
Pré-amplificador RIAA integrado com seletor Line / Phono<br><br></b>-->

              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ntx1000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6> NTX 1000</h6>
                <h5>600.00€</h5>
              <!--  <p class="card-text"><b>Gira-Discos direct drive profissional<br><br>
Produto de Retoma<br><br>
Inclui caixa original e Respetivos acessórios
<br><br></b>-->

              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rp8000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>PLX-500</h6>
                <h5>309.00€</h5>
             <!--   <p class="card-text"><b>Gira discos professional<br><br>
Tracção directa<br><br>
BPM pode ser mostrado no visor<br><br></b>-->

              </div>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/1210.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Technics</a>
                </h4>
                 <h6>1210 M5G</h6>
                <h5>999.00€</h5>
               <!-- <p class="card-text"><b>Gira-Discso Profissional<br><br>
Não inclui agulha<br><br></b>-->

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