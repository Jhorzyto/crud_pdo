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
    <div class="container"
    ">
    <?php if (isset($error)) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?= $error ?></strong>
        </div>
    <?php endif; ?>
    <form class="form-inline" method="post" action="criar.php">
        <div class="form-group">
            <label for="nomePais">Nome do Pais</label>
            <input type="text" class="form-control" placeholder="Nome do Pais" name="nome_pais">
        </div>
        <button type="submit" class="btn btn-default">Criar</button>
    </form>
    </div>
</main>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
