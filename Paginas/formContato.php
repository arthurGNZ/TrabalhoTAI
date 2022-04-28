<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styleForm.css" />
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
          <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome">
        </div>
      </div>
      <div class="row form">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Telefone 01" name="telefone1" id="telefone1">
        </div>
        <div class="col-md-3">
          <select id="inputState" class="form-select">
            <option >Tipo telefone 1</option>
            <option>Comercial</option>
            <option>Casa</option>
            <option>Celular</option>
            <option>Principal</option>
          </select>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="row form">
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Telefone 02" name="telefone2" id="telefone2">
          </div>
          <div class="col-md-3">
            <select id="inputState" class="form-select">
              <option>Tipo telefone 2</option>
              <option>Comercial</option>
              <option>Casa</option>
              <option>Celular</option>
              <option>Principal</option>
            </select>
          </div>
          <div class="botoes">
            <button type="submit" class="btn btn-success"> <i class="fa-solid fa-floppy-disk plus"></i>Salvar</button>
            <a type="button" class="btn btn-primary" href="contato.php"> <i class="fa-solid fa-arrow-left plus"></i>Voltar</a>
          </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>