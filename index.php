<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste formulário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="form.png" type="image/x-icon">
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row">
            <div class="input-field col s6">Nome <input type="text" name="vname" placeholder="Digite seu nome"></div>
            <div class="input-field col s6">Data de nascimento<input type="date" name="vdata" id="" placeholder="Digite seu ano de nascimento"></div>
            <input class="btn waves-effect waves-light" type="submit">
        </div>
    </form>

    <?php
    if ($_POST) {
        $name = $_POST['vname'];
        $data = $_POST['vdata'];

        if (empty($name && $data)) {
            echo "Digite nome e data de nascimento";
        } else {
            $date = new DateTime($data);
            $idadeData1 = $date->diff(new DateTime());


            echo "Meu nome é $name, nasci em $data  e tenho  $idadeData1->y anos.";
        }
    }
    ?>

</body>

</html>