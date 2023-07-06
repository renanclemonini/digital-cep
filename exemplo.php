<?php 

require_once "./vendor/autoload.php";

use \Rclemon93\DigitalCep\Search;

$busca = new Search();



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Cep</title>
    <link rel="stylesheet" href="style.css">
    <?php include './bs4.php'; ?>
</head>
<body>
    <header><?php include './navbar.php' ?></header>
    <div id="body-full" class="container-fluid">
        <div id="body" class="container-md py-3 my-3">
            <h1>Buscador de CEP</h1>
            <form action="exemplo.php" method="get">
                <p>
                    <label for="iCep">CEP: </label>
                    <input type="text" name="txtCep" id="iCep" maxlength="8">
                </p>
                <p class="text-center">
                    <input type="submit" value="Localizar" class="btn btn-primary">
                </p>
            </form>
        </div>
        <div id="resultado" class="container-md">
            <?php
        
            $zipCode = $_GET['txtCep'] ?? '01001000';
            $resultado = $busca->getAddressFromZipCode($zipCode);
            $cep = $resultado['cep'];
            $rua = $resultado['logradouro'];
            $bairro = $resultado['bairro'];
            $cidade = $resultado['localidade'];
            $estado = $resultado['uf'];
        
            ?>
            <table class="table table-bordered text-center">
                <thead>
                    <h1 class="text-center">Dados encontrados</h1>
                </thead>
                <tbody>
                    <tr>
                        <th>CEP</th>
                        <td><?php echo $cep; ?></td>
                    </tr>
                    <tr>
                        <th>Rua</th>
                        <td><?php echo $rua; ?></td>
                    </tr>
                    <tr>
                        <th>Bairro</th>
                        <td><?php echo $bairro; ?></td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td><?php echo $cidade; ?></td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td><?php echo $estado; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
