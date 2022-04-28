<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Agenda</title>
    <link rel="stylesheet" href="css/stylesAgendaForm.css" />
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
        <h1>Formulário Agenda</h1>
        <form>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Título</label>
                <input type="text" class="form-control" placeholder="Reuniões" id="titulo" name="titulo" >
            </div>
            <div class="row">
                <div class="col">
                    <label for="form-control" class="form-label">Data início</label>
                    <input type="date" class="form-control" id="data_inicio" name="data_inicio">
                </div>
                <div class="col">
                    <label for="form-control" class="form-label">Hora início</label>
                    <input type="time" class="form-control" id="hora_inicio" name="hora_inicio">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="form-control" class="form-label cabeca">Data fim</label>
                    <input type="date" class="form-control" id="data_fim" name="data_fim">
                </div>
                <div class="col">
                    <label for="form-control" class="form-label cabeca">Hora fim</label>
                    <input type="time" class="form-control" id="hora_fim" name="hora_fim">
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label cabeca">Local</label>
                <input type="text" class="form-control" placeholder="Rua João Machado..." id="local" name="local"/>
            </div>
            <div class="col-md-12">
                <label for="formGroupExampleInput" class="form-label">Contato convidado</label>
                <select id="inputState" class="form-select" id="convidado_id" name="convidado_id">
                    <option></option>
                </select>
            </div>
            <label for="textarea">Descrição</label>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingTextarea2" style="height: 100px" id="descricao" name="descricao"></textarea>
                <label for="floatingTextarea2">Ponto de referência...</label>
            </div>
            <div class="botoes">
                <button type="submit" class="btn btn-success"> <i class="fa-solid fa-floppy-disk plus"></i>Salvar</button>
                <a type="button" class="btn btn-primary" href="agenda.php"> <i class="fa-solid fa-arrow-left plus"></i>Voltar</a>
            </div>
    </div>
    </form>
    </div>


    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>