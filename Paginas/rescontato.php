<?php include "database/bd.php";
$objBD = new BD();
if(!empty($_POST['nome'])){
     $dados = [
      'id' => $_POST['id'],
      'nome' => $_POST['nome'],
      'sobrenome' => $_POST['sobrenome'],
      'telefone1' => $_POST['telefone1'],
      'tipo_tel1' => $_POST['tipo_tel1'],
      'telefone2' => $_POST['telefone2'],
      'tipo_tel2' => $_POST['tipo_tel2'],
      'email' => $_POST['email']
    ];
    $objBD->update($dados);
    header("location:contato.php");
  }elseif(!empty($_GET['id'])){
    $result=$objBD->find($_GET['id']);
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styleForm.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
  <link rel="manifest" href="../icons/site.webmanifest">
  <title>Formulário Contato</title>
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
    <form class="row gy-2 gx-3 align-items-center" action="rescontato.php" method="post">
      <input type="hidden" name="id" value="<?php echo !empty($result->id)? $result->id:"";?>">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?php echo !empty($result->nome)? $result->nome:"";?>">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome" value="<?php echo !empty($result->sobrenome)? $result->sobrenome:"";?>">
        </div>
      </div>
      <div class="row form">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Telefone 01" name="telefone1" id="telefone1" value="<?php echo !empty($result->telefone1)? $result->telefone1:"";?>">
        </div>
        <div class="col-md-3">
          <select id="inputState" class="form-select" id="tipo_tel1" name="tipo_tel1" >
            <option><?php echo $result->tipo_tel1;?></option>
            <?php if($result->tipo_tel1!="Comercial"){echo "<option value='Comercial'>Comercial</option>";}?>
            <?php if($result->tipo_tel1!="Casa"){echo "<option value='Casa'>Casa</option>";}?>
            <?php if($result->tipo_tel1!="Celular"){echo "<option value='Celular'>Celular</option>";}?>
            <?php if($result->tipo_tel1!="Principal"){echo "<option value='Principal'>Principal</option>";}?>
          </select>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="name@example.com" name="email" id="email" value="<?php echo !empty($result->email)? $result->email:"";?>">
        </div>
          <div class="col-md-3 form">
            <input type="text" class="form-control" placeholder="Telefone 02" name="telefone2" id="telefone2" value="<?php echo !empty($result->telefone2)? $result->telefone2:"";?>">
          </div>
          <div class="col-md-3 form">
            <select id="inputState" class="form-select" id="tipo_tel2" name="tipo_tel2">
            <option><?php echo $result->tipo_tel2;?></option>
            <?php if($result->tipo_tel2!="Comercial"){echo "<option value='Comercial'>Comercial</option>";}?>
            <?php if($result->tipo_tel2!="Casa"){echo "<option value='Casa'>Casa</option>";}?>
            <?php if($result->tipo_tel2!="Celular"){echo "<option value='Celular'>Celular</option>";}?>
            <?php if($result->tipo_tel2!="Principal"){echo "<option value='Principal'>Principal</option>";}?>
            </select>
          </div>
          <div class="botoes">
            <button type="submit" value="Inserir" class="btn btn-success"> <i class="fa-solid fa-floppy-disk plus"></i>Salvar</button>
            <a type="button" class="btn btn-primary" href="contato.php"> <i class="fa-solid fa-arrow-left plus"></i>Voltar</a>
          </div>
       
    </form>
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>