<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Goliath National Bank</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <style>

        body {
            background-color: #0a78b7;
        }
        
        .input {
            margin-bottom: 30px;
        }

        button#abrir {
            font-size: 26px;
            text-align: center;
            border-radius: 0;
        }

        h1 {
            color: #d9534f;
            text-align: center;
            margin: 0 auto 20px auto;
            font-weight: 500;
            font-size: 45px;
        }

        div.box-formulario {
            background-color: #FFF;
            padding: 30px;
            height: auto;
        }

        .navbar {
            background-color: #FFF;
            border-radius: 0;
        }
        .navbar-collapse {

            margin-top: 15px;

        }
    
    </style>
    
</head>
<body>

<?php include "includes/navbar.php"; ?>

<div class="container-fluid">
    <div class="col-md-2"></div>

    <div class="col-md-8 box-formulario">
        <h1>Nova Conta</h1>
        <form method="post" action="functions.php">
            <input class="form-control input" type="text" name="nome" placeholder="Nome Completo">
            <select class="form-control input" name="tipo" value="none">
                <option value="cc">Conta Corrente</option>
                <option value="cp">Conta Poupança</option>
            </select>
            <input class="form-control input" type="text" name="primeiro-deposito">
            <button class="btn btn-danger" type="submit" name="abrir" id="abrir">Abrir Conta</button>
        </form>
    </div>

    <div class="col-md-2"></div>

</div>


<script src="js/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</body>
</html>