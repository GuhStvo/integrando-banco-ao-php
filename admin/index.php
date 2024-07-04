<html>
<head>
    <title>Cadastro categorias</title>
</head>
<body>

<a href="iserir_categoria.php">Incluir</a>
<br>
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM categorias"; // Selecionar tabela
        $busca = mysqli_query($conexao, $sql); //Executar query

        while ($array = mysqli_fetch_array($busca)) {
            $id_categoria = $array['id_categoria'];
            $desc_categoria = $array['desc_categoria'];
            echo "| <strong>$id_categoria</strong> | $desc_categoria";
            echo "<br>";
            echo "---------------------|";
            echo "<br>";
        }
    ?>
</body>
</html>