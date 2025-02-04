<?php

include 'connect.php';

if(isset($_POST["cadastrar"])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['autor'];
    $plays = $_POST['plays'];
    $duracao = $_POST['duracao'];

    $sql = "INSERT INTO musica (nome,descricao,autor,plays,duracao) VALUES ('$nome','$descricao','$autor','$plays','$duracao')";

    $result = mysqli_query($conn,$sql);

        if($result){
        echo "<script> alert('Cadastrado com sucesso!') </script>";
        header('location:index.php');
    }

    else{
        echo "<script> alert('Erro ao cadastrar') </script>";
        die(mysqli_error($conn));
    }

}
?>