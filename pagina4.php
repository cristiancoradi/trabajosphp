<!Doctype HTML5>
<HTML>
<HEAD>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css\style5.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</HEAD>
<BODY>
<div class="conteiner-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php"><strong>Pagina de inicio</strong> <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="pagina1.php"><strong>web1</strong></a>
                    <a class="nav-item nav-link active" href="pagina2.php"><strong>web2</strong></a>
                    <a class="nav-item nav-link active" href="pagina3.php"><strong>web3</strong></a>
                    <a class="nav-item nav-link active" href="pagina4.php"><strong>web4</strong></a>
                    <a class="nav-item nav-link active" href="pagina5.php"><strong>web5</strong></a>
                    <a class="nav-item nav-link active" href="pagina6.php"><strong>web6</strong></a>
                    <a class="nav-item nav-link active" href="pagina7.php"><strong>web7</strong></a>
                  </div>
                </div>
              </nav>
<header>Generar aleatoriamente un valor entre 1 y 7, mostrar el día determinado de la semana. (If anidados)</header>
<div class="espacio"></div>
<div class="ejercicio">
<div class="ram">
<?php
  $num=rand(1,7);
  echo $num ;
  ?>
</div>
<div class="respuesta">
<?php
  if ($num <=1 ) {
    echo "Hoy es lunes";
  } else {
    if ($num <=2 ) {
        echo "Hoy es martes ";
      } else {
        if ($num <=3 ) {
            echo "Hoy es miercoles ";
          } else {
            if ($num <=4 ) {
                echo "Hoy es jueves ";
              } else {
                if ($num <=5 ) {
                    echo "Hoy es viernes ";
                  } else {
                    if ($num <=6 ) {
                        echo "Hoy es sabado ";
                      } else {
                        echo "Hoy es domingo";
                      }
                  }
              }
          }
      }
  }
?>
</div>
</div>
<div class="espacio1"></div>
</div>
</BODY>
</HTML>