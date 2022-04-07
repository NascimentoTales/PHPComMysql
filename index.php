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

    <div id="corpo">
        <table class='listagem'>

            <?php
                $busca = $banco->query("select * from jogos order by nome");

                if (!$busca) {
                    echo"<p>Falha na busca</p>";
                } else {
                    if ($busca->num_rows == 0) {
                        echo"<tr><td> Nemhum registro encontrado";
                    }else {
                        echo"<h1>Escolha seu Jogo</h1>";

                        while ($reg = $busca->fetch_object()) {
                            $t = thumb($reg->capa);
                            echo"<tr><td><img src='$t' alt='' class='mini' srcset=''></td><td>$reg->nome<td>Adm";
                        }
                    }                
                }          
            ?>

        </table>
    </div>
    <?php $banco->close()?>
</body>
</html>