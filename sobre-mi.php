<?php $pg = "sobre_mi"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre-mi</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="images/logo-MG.ico" />
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
  <header class="container">
      <?php include_once("menu.php");?>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 mt-4">
          <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
          <p>Apasionado por la tecnología, siempre aprendiendo herramientas nuevas. soy programador web Full Stack y
            Modelador 3D.</p>
          <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
        </div>
        <div class="col-12 col-sm-4">
          <img src="images/marco.jpg" alt="Marco Luciano Giampietro" title="Marco Luciano Giampietro"
            class="img-circle">
        </div>
      </div>
    </div>
    <section id="tecnologias">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="my-sm-5">Stack tecnológico</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Javascript</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/javascript.jpeg">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>PHP</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/php.jpg">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>HTML5</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/html5.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>React.js</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/react.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>jQuery</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/jquery.jpg">
            </div>
          </div>
        </div>
        <div class="row mt-sm-4 mt-0">
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Bootstrap</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/bootstrap.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Blender</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/blender.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>CSS</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/css.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Git</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/git.png">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="experiencia" class="container">
      <div class="row">
        <div class="col-12 pt-5 pb-4">
          <h2><i class="fas fa-briefcase"></i>Experiencia laboral</h2>
        </div>
      </div>
      <div class="row shadow bg-white rounded">
        <div class="col-12">
          <div class="row">
            <div class="col-2 p-5 my-auto d-none d-sm-block">
              <img src="images/logo-ies.png" class="img-fluid logos" title="IES">
            </div>
            <div class="col-12- col-sm-10 p-3">
              <h3>Pasantia de Auxiliar Operaciones (IT)</h3>
              <h4>Colegio Universitario IES</h4>
              <h5>2022 - 2023</h5>
              <p>Como auxiliar de Operaciones, mis obligaciones eran hacer periodicamente mantenimientos a servidores de
                la institución.
                Arreglar y hacer mantenimiento a laboratorios y sus respectivas PC. Solucionar problemas y consultas de
                alumnos, docentes y personal de la institución.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="formacion" class="container">
      <div class="row">
        <div class="col-12 pt-5 pb-4">
          <h2><i class="fas fa-graduation-cap"></i> Formación académica</h2>
        </div>
      </div>
      <div class="row shadow bg-white rounded p-1">
        <div class="col-12 col-sm-6">
          <div class="row">
            <div class="col-2 py-3 my-auto d-none d-sm-block">
              <img src="images/logo-ies.png" class="img-fluid logos" title="IES">
            </div>
            <div class="col-12- col-sm-10 p-3">
              <h3>Técnico Superior en Desarrollo de Simulaciones Virtuales y Videojuegos</h3>
              <h4>Colegio Universitario IES</h4>
              <h5>2021-2022</h5>
              <p>2/3 años realizados.<br>
                https://ies21.edu.ar</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="formacion" class="container mb-5">
      <div class="row">
        <div class="col-12 pt-5 pb-4">
          <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
        </div>
      </div>
      <div class="row shadow bg-white rounded p-1">
        <div class="col-12 col-sm-6">
          <div class="row">
            <div class="col-2 py-3 my-auto d-none d-sm-block">
              <img src="images/logos_coderhouse.png" class="img-fluid logos" title="coder">
            </div>
            <div class="col-12- col-sm-10 p-3">
              <h3>Modelado 3D (Blender)</h3>
              <h4>CODERHOUSE</h4>
              <h5>Expedición: nov 2022</h5>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="row">
            <div class="col-2 py-3 my-auto d-none d-sm-block">
              <img src="images/logo-depcsuite.svg" class="img-fluid logos" title="depcsuite">
            </div>
            <div class="col-12- col-sm-10 p-3">
              <h3>Desarrollo Web Full Stack</h3>
              <h4>DEPCSUITE</h4>
              <h5>Expedición: may 2023</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="idiomas">
      <div class="container">
        <div class="row py-5 mx-0">
          <div class="col-sm-6 col-12">
            <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
              <div class="col-4 text-center card">
                <i class="fas fa-comment-alt"></i>
              </div>
              <div class="col-8 pt-5">
                <h2>IDIOMAS</h2>
                <ul>
                  <li>ESPAÑOL - Nativo</li>
                  <li>INGLÉS - Intermediate B1</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
              <div class="col-4 text-center card">
                <i class="fas fa-star"></i>
              </div>
              <div class="col-8 p-5">
                <h2>HOBBIES</h2>
                <ul>
                  <li>Gimnasio</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="container mt-auto pb-4">
    <div class="row mt-5 pb-3">
      <div class="col-12 col-sm-3 text-center text-sm-start">
        <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/marco-luciano-giampietro/" target="_blank" title="Linkedin"><i
            class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
        Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a>
      </div>
      <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
        <a href="mailto:marcosgiampietro67@gmail.com" target="_blank">marcosgiampietro67@gmail.com</a>
      </div>
    </div>
  </footer>
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=543547459311" target="_blank" title="Whatsapp"><i
        class="fab fa-whatsapp"></i></a>
  </div>
</body>

</html>