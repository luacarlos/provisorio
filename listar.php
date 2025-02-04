<?php

    require 'connect.php';
    $sql = 'SELECT * FROM cantor';
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins';
        text-decoration: none;
        list-style: none;
    }

    .area-tabela{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        gap: 20px;
    }

    h1{
        font-weight: 500;
        margin-left: 5px;
    }

</style>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Cadastrar</a></li>
            <li class="nav-item active"><a class="nav-link" href="listar.php">Listar</a></li>
        </ul>
    </header>
    <div class="area-tabela">
        <h1>Clientes Cadastrados</h1>
        <div class="container">
            <table border=1 class="table table-dark">
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Gênero</td>
                    <td>Top Ouvida</td>
                    <td>Editar</td>
                    <td>Excluir</td>

                </tr>

                <?php
                    if ($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $nome = $row['nome'];
                            $genero = $row['genero'];
                            $top_ouvida = $row['top_ouvida'];

                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$nome.'</td>
                                <td>'.$genero.'</td>
                                <td>'.$top_ouvida.'</td>
                                
                                <td><a class= "btn btn-primary" href="editar_cantor.php?id='.$id.'" >Editar</a></td>
                                <td><a class= "btn btn-danger" href="excluir_cantor.php?id='.$id.'" >Excluir</a></td>
                            </tr>
                        ';
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>