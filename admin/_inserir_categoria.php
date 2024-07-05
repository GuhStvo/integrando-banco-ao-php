<!-- _inserir_categoria.php -->
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
include 'conexao.php';
$desc_categoria = $_POST['desc_categoria']; // Recebe o valor do input
                                            // Através do método POST
$sql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";
// Query de inclusão de registro (padrão sql)
$inserir = mysqli_query($conexao,$sql);
// mysqli_query é a função do PHP para executar um query
?>


    <div class="container">
        <center>
            <h4 class="alert alert-success" role="alert">Categoria Adicionada com Sucesso</h4>
            <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
        </center>
    </div>


</html>