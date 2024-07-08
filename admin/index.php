<!-- index.php -->
<html>
<head>
    <title>Cadastro de Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include 'menu.php';
?>
 
<div class="container">
<a href="inserir_categoria.php" class="btn btn-primary">Incluir</a>  
<br/>

<?php
    include 'conexao.php';
 
    $sql = "SELECT * FROM categorias";
    $busca = mysqli_query($conexao,$sql);
    echo "<table class='table table-striped table-hover'>";
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
       echo "<td>$id_categoria</td>";
       echo "<td>$desc_categoria</td>";
       echo "<td><a class='btn btn-primary'
       href='editar_categoria.php?id_categoria= $id_categoria'>
       Editar</a></td>";
       echo "<td><a data-bs-toggle='modal' data-bs-target='#exampleModal' href='excluir_categoria.php?id_categoria= $id_categoria'' class='btn btn-danger '>Excluir</a></td>";
       echo "</tr>";

       echo "<!-- Modal -->
       <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
         <div class='modal-dialog modal-dialog-centered'>
           <div class='modal-content'>
             <div class='modal-header'>
               <h1 class='modal-title fs-5' id='exampleModalLabel'>Excluir categoria</h1>
               <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             </div>
             <div class='modal-body'>
               Excluir categoria selecionada do banco de dados?
             </div>
             <div class='modal-footer'>
               <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
               <a href='excluir_categoria.php?id_categoria= $id_categoria'' class='btn btn-danger'>Excluir</a>
             </div>
           </div>
         </div>
       </div>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</div>
</body>
</html>