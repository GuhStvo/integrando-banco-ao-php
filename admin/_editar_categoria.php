<?php

include 'conexao.php';
$id_categoria = $_POST['id_categoria'];
$desc_categoria = $_POST['desc_categoria']; // Recebe o valor do input
$sql = "UPDATE categorias SET desc_categoria = '$desc_categoria' WHERE id_categoria = '$id_categoria'";
$editar = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<center>
    <div class="container">
        <center>
            <h4 class="alert alert-success" role="alert">Categoria Alterada com Sucesso</h4>
            <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
        </center>
    </div>
</center>