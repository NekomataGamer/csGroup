<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar conta</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
    <form class="form-signin" method="post" action="<?php echo site_url('login/inserirCadastro'); ?>">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar conta</h1>
        <label for="inputEmail" class="sr-only">Nome</label>
        <input type="text" id="inputEmail" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="*********" required>
        
        <?php include_once(__DIR__.'/comuns/mensagens.php'); ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>

        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</body>

</html>