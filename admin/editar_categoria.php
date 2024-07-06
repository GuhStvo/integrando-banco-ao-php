<html>
<head>
    <meta charset="utf-8">
    <title>Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        include 'menu.php';
        include 'conexao.php';
        $id_categoria = $_GET['id_categoria'];
    ?>

    <div class="container">
        <h4>Categorias - Edição</h4>

        <form action="_editar_categoria.php" method="post">
            <?php
                $sql = "SELECT * FROM categorias WHERE id_categoria=$id_categoria";


                $buscar = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($buscar)) {
                    $categoria = $array['id_categoria'];
                    $desc_categoria = $array['desc_categoria'];
                }
            ?>

            <label>Id Categoria</label>
            <input type="text" name="id_categoria" id="id_categoria" value="<?php echo $categoria ?>" readonly="readonly">
            <label>Descrição da Categoria</label>
            <input type="text" name="desc_categoria" id="desc_categoria" desc_categoria="desc_categoria" value="<?php echo $desc_categoria ?>">
            <br>
            <button type="submit" id="botao">Atualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>