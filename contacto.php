<?php $pg = "contacto"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/logo-MG.ico" />
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php");?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
              <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
           </div>
           <div class="col-12 col-sm-6">
              <form action="" method="post">
                <div class="pb-3">
                  <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                </div>
                <div class="pb-3">
                  <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow">
              </div>
              <div class="pb-3">
                  <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow" required="">
              </div>
              <div class="pb-3">
                  <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                  
              </div>
              <div class="">
                  <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
              </div>
              </form>
           </div>
        </div>
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
    <div class="btn-whatsapp">
      <a href="https://api.whatsapp.com/send?phone=543547459311" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>
</html>