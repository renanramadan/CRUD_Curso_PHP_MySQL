<?php

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE CURSOS SET nome_curso='$nome_curso', duracao='$carga_horaria' WHERE id_curso = $id_curso";

#print ($query);
mysqli_query($conexao,$query);

header('location:index.php?pagina=cursos');
