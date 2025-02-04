<?php

require 'connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];
    
    $sql = "SELECT * FROM podcast WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);
    $cliente = mysqli_fetch_assoc($result);
}
else{
    header('location:index.php');
}

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $top_ouvida = $_POST['top_ouvida'];

    $sql_update = "UPDATE cantor SET nome='$nome', genero='$genero', top_ouvida='$top_ouvida' WHERE id = $id_recebido";

    $result_update = mysqli_query($conn,$sql_update);
    
    if($result_update){
        echo '<script> alert("Cantor atualizado com sucesso!") </script>';
    }

}





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Cadastrar</a></li>
            <li class="nav-item active"><a class="nav-link" href="listar.php">Listar</a></li>
        </ul>
    </header>
    <div class="main">
        <div class="area-cadastro">
            <h1>Editar cantor</h1>
            <form method="POST"  class="formulario">

                <label for="nome" class="edi-inf">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome da música" value="<?= $cantor['nome'];?>">

                <label for="cpf" class="edi-inf">Gênero</label>     
                <input type="text" name="genero" id="genero" placeholder="Gênero do cantor" value="<?= $cantor['genero'];?>">       

                <label for="cpf" class="edi-inf">Top ouvda</label>   
                <input type="text" name="autor" id="autor" placeholder="Música mais ouvida" value="<?= $cantor['top_ouvida'];?>">    

                <input type="submit" name="editar" id="bot" value="Salvar" class="btn btn-primary">
                <input type="reset" name="cancelar" id="bot" value="Cancelar" class="btn btn-danger">
            </form>
        </div>
    </div>
</body>
</html>