<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleForm1.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP</title>
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
          <a class="nav-link" aria-current="page" href="../index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agenda.php">Minha Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contato.php">Meus contatos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="page">
  <h1> Formulário Contato</h1>
  <form class="row gy-2 gx-3 align-items-center">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nome" aria-label="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Last name">
    </div>  
</div>
  

</div>
<script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>