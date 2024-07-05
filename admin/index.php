<html>

<head>
    <title>Cadastro categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'menu.php'; // Incluindo arquivo php na página index
    ?> 

    <div class="container" style="margin-top: 15px;"> <!--  Cria um container já formatado pelo Bootstrap
                             Utilizando classes para adicionar os estilos nos elementos -->
    <a style="margin-bottom: 15px;" href="inserir_categoria.php" class="btn btn-primary">Incluir</a>
    <br>
    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM categorias"; // Selecionar tabela
    $busca = mysqli_query($conexao, $sql); //Executar query

    echo "<table class='table table-striped table-hover' border='1px' style='width: 100%;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Descrição</th>";
    echo "<th>Editar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($array = mysqli_fetch_array($busca)) {
        $id_categoria = $array['id_categoria'];
        $desc_categoria = $array['desc_categoria'];
        echo "<tr>";
        echo "<th>$id_categoria</th>";
        echo "<td>$desc_categoria</td>";
        echo "<td><a class='btn btn-primary' href='editar_categoria.php'>Editar</a></td>";
        echo "<td><a class='btn btn-danger' href='excluir_categoria.php'>Exluir</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";


    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>