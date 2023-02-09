<h1>Inserir nova matricula</h1><br>
<br>
<form method="post" action="processa_matricula.php">
    <label class="badge text-bg-secondary">Selecione o Aluno:</label>
    <select name="escolha_aluno" class="form-control">
        <option>Selecione um Aluno</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <br><br>
    <label class="badge text-bg-secondary">Selecione o Curso:</label>
    <select name="escolha_curso" class="form-control">
        <option>Selecione um curso</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }
        ?>    
    </select>
    <br><br>
    <input type="submit" value="Matricular aluno no curso" class="btn btn-success">
</form>

