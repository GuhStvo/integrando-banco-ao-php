<!-- _inserir_categoria.php -->

<?php
include 'conexao.php';
$desc_categoria = $_POST['desc_categoria']; // Recebe o valor do input
                                            // Através do método POST
$sql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";
// Query de inclusão de registro (padrão sql)
$inserir = mysqli_query($conexao,$sql);
// mysqli_query é a função do PHP para executar um query
?>

<center>
    <h4>Categoria Adicionada com Sucesso</h4>
    <a href="index.php" role="button">Voltar</a>
</center>