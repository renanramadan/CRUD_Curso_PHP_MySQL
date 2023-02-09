<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir Matricula</a><br><br>
<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome do Aluno</th>
            <th>Nome Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_matriculas)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
        ?>
            <td style="width: 60px;" align="center"><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_aluno_curso']; ?>" class="btn btn-outline-danger btn-sm">Deletar</a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table>