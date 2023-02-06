<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome Curso</th>
        <th>Carga horária</th>
    </tr>

    <?php 
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['duracao'].'</td></tr>';
        }

    ?>
</table>