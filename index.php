<?php
require_once './ler.php';
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Lista de Países</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
            <a href="criar_formulario.php" class="btn btn-default navbar-btn">Criar</a>
            <a href="index.php" class="btn btn-default navbar-btn">Listar</a>
        </div>
    </div>
</nav>
<main>
    <div class="container"">
    <?php if(isset($error)) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?=$error?></strong>
        </div>
    <?php endif; ?>
    <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Ultima Atualização</th>
                <th>-</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($dados as $dado): ?>
            <tr>
                <th scope="row"><?= $dado['pais_id']?></th>
                <td><?= $dado['pais']?></td>
                <td><?= $dado['ultima_atualizacao']?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="atualizar_formulario.php?pais_id=<?= $dado['pais_id']?>" class="btn btn-default">
                            Editar
                        </a>
                        <a href="apagar.php?pais_id=<?= $dado['pais_id']?>" class="btn btn-default">
                            Excluir
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
