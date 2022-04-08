<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Listagem de Jogos</title>
</head>
<body>
    <?php
        require_once("includes/banco.php");
        require_once("includes/functions.php");
    ?>

    <div class="corpo">

            <?php
                $c = $_GET['cod'] ?? 0;
                $busca =  $banco->query("select * from jogos where cod='$c'");
            ?>

        <h1>Detalhes do Jogo</h1>
        <table class='detalhes'>
            <?php
                if (!$busca) {
                    echo"Busca Falhou";
                    
                }else {

                    if ($busca->num_rows == 1) {
                        $reg = $busca->fetch_object();
                        $t = thumb($reg->capa);
                        echo"<tr><td rowspan='3'><img src='$t' class='full'>";
                        echo"<td><h2>$reg->nome</h2>";
                        echo"<tr><td>$reg->descricao";
                        echo"<tr><td>Adm";

                    }else {
                        echo"<td><tr>Nemhum registro encontrado";
                    }
                }

            ?>  

    </div>
</body>
</html>