<?php

include 'connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM cantor WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:listar.php');
    }
    else{
        echo'<script>alert("Não foi possível excluir o cantor!")</script>';
    }

}

?>