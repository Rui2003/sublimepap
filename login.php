<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Planet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">MusicPlanet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
       <li class="active"><a href="sobre.html">About Us</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="dj.html">DJ<span class="caret"></span></a>
        <ul class="dropdown-menu">
       <li><a href="mesas.php">Mesas de Mistura</a></li>
          <li><a href="gd.html">Gira Discos</a></li>
          <li><a href="controladoras.html">Controladoras</a></li>
          <li><a href="headphones.html">Head Phones</a></li>
          <li><a href="leitores.html">Leitores [XDJ & CDJ]</a></li>
        </ul>
      </li>

     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="homem.html">Estúdio<span class="caret"></span></a>
     <ul class="dropdown-menu">
    <li>  <a href="monitores.html">Monitores de Estúdio</a></li>
      <li><a href="samplers.html">Samplers & Efeitos</a></li>
      <li><a href="sintetizadores.html">Sintetizadores</a></li>
      <li><a href="teclados.html">Teclados</a></li>
      <li><a href="controladores.html">Controladores MIDI</a></li>
</ul>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="crianca.html">Cursos<span class="caret"></span></a>
        <ul class="dropdown-menu"></li>
     <li><a href="beginner.html">Curso DJ Begginer</a></li>
      <li><a href="master.html">Curso DJ Master</a></li>
      <li><a href="produtor.html">Curso Produtor</a></li>
        <li><a href="scratch.html">Curso Scratch</a></li>

    </ul>
    
    </ul>





    <ul class="nav navbar-nav navbar-right">
      <li><a href="registar.php"><span class="glyphicon glyphicon-user"></span> Registar</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
    </ul>
  </div>





  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/dj1.jpg");
   min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="bg-img">
  <form action="/processa_login.php" class="container">
    <h1>Login</h1>
        <form method="post" action="processa_login.php">

    <label for="nome"><b>Nome de Utilizador</b></label>
    <input type="text" placeholder="Insira um nome de utilizador." name="nome" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Insira uma palavra passe." name="password" required>

     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Insira o seu Email." name="email" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
</body>
</html>

</div>
</form>
</body>
</html>