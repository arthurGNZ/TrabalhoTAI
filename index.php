<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
  <link rel="manifest" href="icons/site.webmanifest">
  <title>SisAgenda</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIS Agenda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Paginas/agenda.php">Minha Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Paginas/contato.php">Meus contatos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Telas</h1>
  <div class=elementos>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <i class="fa-solid fa-circle-user fa-10x borda"></i>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Meus contatos</h5>
            <p class="card-text">Cadastre e Gerencie todos os seus contatos</p>
            <a href="Paginas/contato.php" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <i class="fa-solid fa-calendar fa-10x borda"></i>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Minha agenda</h5>
            <p class="card-text">Cadastre e Gerencie todos os seus compromissos na sua agenda</p>
            <a href="Paginas/agenda.php" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>