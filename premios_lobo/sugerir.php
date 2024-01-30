<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Premios Lobo</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-opacity-10">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Lobos Awards</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="info.html">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="sugerir.php" style="border-bottom: 2px solid white;">Sugerir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="iniciar_sesion.html">Crear cuenta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <form method="post" enctype="multipart/form-data">
    <div class="sugerir">
        <h2>Sugerir</h2>
        <select class="form-select" aria-label="Default select example" name="categoria">
          <option selected disabled>Selecciona categoria</option>
          <option value="1">Quedada del año</option>
          <option value="2">Foto del año</option>
          <option value="3">Video del año</option>
          <option value="4">Fail del año</option>
          <option value="5">Mascota del año</option>
          <option value="6">Evento del año</option>
          <option value="7">Juego del año</option>
          <option value="8">Sitio de comida del año</option>
          <option value="9">Expresión del año</option>
          <option value="10">Meme del año</option>
        </select>
        <div class="mb-3">
            <h5 class="mt-3">Nombre</h5>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
        </div>
        <div class="mb-3">
            <h5 class="mt-3">Descripción</h5>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <h5 class="mt-3">Enviar archivo (opcional)</h5>
            <input class="form-control" type="file" id="formFile" name="imagen">
        </div>
        <input type="submit" name="boton" class="btn btn-outline-primary boton-enviar-sugerencia">
    </div>
</form>


  <div id="particles-js">
  </div>
  <script src="js/particles.min.js"></script>
  <script>
    particlesJS(
      {
  "particles": {
    "number": {
      "value": 600,
      "density": {
        "enable": true,
        "value_area": 631.3181133058181
      }
    },
    "color": {
      "value": "#b3b6b7"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 2.2,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 4,
        "size_min": 0.3,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#000000",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 600
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": false,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
    )
  </script>
  <script src="js/bootstrap.js"></script>

  <?php
  include("registrar.php");
  ?>
</body>
</html>