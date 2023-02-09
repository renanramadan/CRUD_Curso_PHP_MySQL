<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a><br><br>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Email</th>
            <th>Data Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['email'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
            <td style="width: 40px;" align="center">
                <a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
                    <span style="color:#2E86C1">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </span>
                </a>
            </td>
            <td style="width: 40px;" align="center">
                <a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
                    <span style="color:tomato">
                        <i class="fa-solid fa-trash"></i>
                    </span>
                </a>
            </td></tr>

        <?php
            }
        ?>
    </tbody>
</table>