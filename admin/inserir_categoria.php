<!-- inserir_caregoria.php -->

<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de categorias - Inclusão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 1%;">
    <div class="container">
        <h4 style="margin-bottom: 15px;">Inclusão de Categorias</h4>
        <form action="_inserir_categoria.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="desc_categoria floatingInput" name="desc_categoria" required placeholder="name@example.com">
                <label for="floaringInput">Descrição</label>
                <button style="margin-top: 15px;" type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>