<?php

include 'connect.php';

if(isset($_POST["cadastrar"])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $dono = $_POST['dono'];
    $duracao = $_POST['duracao'];

    $sql = "INSERT INTO podcast (nome,descricao,dono,duracao) VALUES ('$nome','$descricao','$dono','$duracao')";

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