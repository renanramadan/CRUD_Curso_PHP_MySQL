<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "curso";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

if ($conexao) {
    echo "";
} else {
    echo "Erro ao conectar!<br>";
}

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao,$query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao,$query);

$query = "SELECT alunos.nome_aluno, cursos.nome_curso, aluno_curso.id_aluno_curso
        FROM alunos, cursos, aluno_curso
        WHERE aluno_curso.id_aluno = alunos.id_aluno
        AND aluno_curso.id_curso = cursos.id_curso";

$consulta_matriculas = mysqli_query($conexao,$query);