<?php 

# mysqli - Conexao com Banco de Dados ****

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "curso";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if ($conexao) {
    echo "Conectado com sucesso!<br>";
} else {
    echo "Erro ao conectar!<br>";
}

# Inserir alunos no banco de dados! ****
/*
$query = "insert into alunos(nome_aluno, email, data_nascimento) values('Soraia Youssef', 'soraiayoussef@gmail.com', '1965-01-18')";

$executar = mysqli_query($conexao, $query);

if($executar){
    echo "Cadastro executado com sucesso!";
} else {
    echo "Falha no cadastro";
} 


# Inserir cursos no banco de dados! ****

$query = "insert into cursos(nome_curso, duracao) values('MySQL Basico' ,'18h')";

$executar = mysqli_query($conexao, $query);

if ($executar){
    echo "cadastro do curso efetuado com sucesso!";
} else{
    echo "Erro no cadastro do curso";
}


# Inserir alunos nos cursos no banco de dados! (Relacional) ****

$query = "INSERT INTO ALUNO_CURSO(id_aluno, id_curso) VALUES(5,2)";
$executar = mysqli_query($conexao, $query);


# Excluir registros do banco de dados

if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 4")){
    echo "Aluno excluido com sucesso!";
} else {
    echo "Falha na exclusão do aluno!";
}


# Alterar os dados no banco de dados

if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Divania Macedo' WHERE ID_ALUNO = 2")) {
    echo "Aluno alterado com sucesso!";
} else {
    echo "Erro ao alterar cadastro do aluno!";
}


# Consulta no banco de dados

echo '<table border = 1>   
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
        </tr>';
$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

while ($linha = mysqli_fetch_array($consulta)){

    echo '<tr><td>'.$linha['id_aluno'].'</td>';
    echo '<td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['email'].'</td>';
    echo '<td>'.$linha['data_nascimento'].'</td></tr>';
}

echo '</table>';
*/

# Consulta com tabelas cruzadas no banco de dados

$consulta = mysqli_query($conexao, "SELECT ALUNOS.NOME_ALUNO, CURSOS.NOME_CURSO FROM ALUNOS, CURSOS, ALUNO_CURSO WHERE ALUNO_CURSO.ID_ALUNO = ALUNOS.ID_ALUNO AND ALUNO_CURSO.ID_CURSO = CURSOS.ID_CURSO");


echo '<table border=1><tr><th>Nome Aluno</th><th>Curso</th></tr>';

while ($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['NOME_ALUNO'].'</td>';
    echo '<td>'.$linha['NOME_CURSO'].'</td></tr>';
}

echo '</table>';