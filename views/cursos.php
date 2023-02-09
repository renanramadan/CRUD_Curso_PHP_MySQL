<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a><br><br>
<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<tr><td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['duracao'].'</td>';
        ?>
            <td style="width: 60px;" align="center"><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>" class="btn btn-outline-primary btn-sm">Editar</a></td>
            <td style="width: 60px;" align="center"><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>" class="btn btn-outline-danger btn-sm">Deletar</a></td></tr>
        <?php


    
            }

        ?>
    </tbody>
</table>