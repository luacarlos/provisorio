<?php

include 'connect.php';

if(isset($_POST["cadastrar"])){
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $top_ouvida = $_POST['top_ouvida'];

    $sql = "INSERT INTO cantor (nome,genero,top_ouvida) VALUES ('$nome','$genero','$top_ouvida')";

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