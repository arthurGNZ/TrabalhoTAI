<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesContato.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus contatos</title>
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
<h1> Listagem de contatos<h1> 
<form class="row gx-3 gy-2 align-items-center" method="POST">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Name</label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="Pesquisar">
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect">
      <option selected>Tipo</option>
      <option value="1">Nome</option>
      <option value="2">Telefone</option>
      <option value="3">Email</option>
    </select>
  </div>
  <div class="col-auto">
    <button type="button" class="btn btn-outline-success"> <i class="fa-solid fa-magnifying-glass plus"></i>Buscar</button>
    <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-plus plus"></i>Cadastrar</button>
  </div>
</form>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Telefone 1</th>
      <th scope="col">Tipo Telefone 1</th>
      <th scope="col">Telefone 2</th>
      <th scope="col">Tipo Telefone 2</th>
      <th scope="col">Email</th>
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Arthur</td>
      <td>Henrique</td>
      <td>49 984174071</td>
      <td>Principal</td>
      <td>34332414</td>
      <td>Comercial</td>
      <td>grasnieviczarthur@gmail.com</td>
      <td><i class="fa-solid fa-pen-to-square orange"></i></td>
      <td><i class="fa-solid fa-trash red"></i></td>
    </tr>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div>
<script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
</body>
</html>