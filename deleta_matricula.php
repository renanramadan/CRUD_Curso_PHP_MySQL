<?php 
    
include 'db.php';

$id_matricula = $_GET['id_matricula'];

$query = "DELETE FROM ALUNO_CURSO WHERE id_aluno_curso = $id_matricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
