<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE ALUNOS SET nome_aluno='$nome_aluno', email='$email', data_nascimento='$data_nascimento' WHERE id_aluno = $id_aluno";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
