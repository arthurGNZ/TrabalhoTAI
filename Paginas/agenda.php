<?php include "database/bdAgenda.php";
$objBD = new BD();
$result = $objBD->select();
if (!empty($_GET['id'])) {
  $objBD->remove($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styleAgenda.css  " />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
  <link rel="manifest" href="../icons/site.webmanifest">
  <title>Minha agenda</title>
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
            <a class="nav-link active" href="agenda.php">Minha Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Meus contatos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page">
    <h1> Listagem de agendas<h1>
        <form class="row gx-3 gy-2 align-items-center" method="POST" action="agenda.php">
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeInputName">Name</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Pesquisar">
          </div>
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
            <select class="form-select" id="opcoes" name="opcoes">
              <option selected value="titulo">Tipo</option>
              <option value="titulo">Titulo</option>
              <option value="localizacao">Local</option>
              <option value="convidado_id">Convidado</option>
            </select>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success"> <i class="fa-solid fa-magnifying-glass plus"></i>Buscar</button>
            <a type="button" class="btn btn-primary" href="formAgenda.php"> <i class="fa-solid fa-plus plus"></i>Cadastrar</a>
          </div>
        </form>
        <?php
        $objBD = new BD();
        $objBD->conn(); //abre a conexão,
        /*if (!empty($_POST['titulo'])) {
          $result = $objBD->search($_POST['titulo'], $_POST['opcoes']);
        } else {
          $result = $objBD->select();
        }*/
        if (!empty($_POST['titulo'])) {
          if ($_POST['opcoes'] == "convidado_id") {
            $nome = $objBD->convidadoNome($_POST['titulo']);
            foreach ($nome as $item) {
              $name = $item['id'];
            }
            $result = $objBD->search($name, $_POST['opcoes']);
          } else {
            $result = $objBD->search($_POST['titulo'], $_POST['opcoes']);
          }
        } else {
          $result = $objBD->select();
        }
        echo "  
  <table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Título</th>
      <th scope='col'>Data início</th>
      <th scope='col'>Hora início</th>
      <th scope='col'>Data fim</th>
      <th scope='col'>Hora fim</th>
      <th scope='col'>Local</th>
      <th scope='col'>Convidado</th>
      <th scope='col'>Descriçao</th>
      <th scope='col'>Ação</th>
      <th scope='col'>Ação</th>
    </tr>";
        foreach ($result as $item) {
          $convidado = $objBD->convidado($item['convidado_id']);
          foreach($convidado as $as){
            $nome = $as['nome'];
          
          echo "
  </thead>
  <tbody>
    <tr>
      <th scope='row'>" . $item['id'] . "</th>
      <td>" . $item['titulo'] . "</td>
      <td>" . $item['data_inicio'] . "</td>
      <td>" . $item['hora_inicio'] . "</td>
      <td>" . $item['data_fim'] . "</td>
      <td>" . $item['hora_fim'] . "</td>
      <td>" . $item['localizacao'] . "</td>
      <td>" . $nome ."</td>
      <td>" . $item['descricao'] . "</td>
      <td><a href='resagenda.php?id=" . $item['id'] . "'><i class='fa-solid fa-pen-to-square orange'></i><a></td>
      <td><a href='agenda.php?id=" . $item['id'] . "'><i class='fa-solid fa-trash red'</i></a></td>
    </tr>
  </tbody>";
        }}
        echo "</table>";
        ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div>
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
</body>

</html>