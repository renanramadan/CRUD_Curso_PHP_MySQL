<?php
    if(!isset($_GET['editar'])) { 
?>
<h1>Inserir novo curso</h1><br>
<form method="post" action="processa_curso.php">
    <label class="badge text-bg-secondary">Nome Curso:</label><br>
    <input type="text" name="nome_curso" placeholder="Insira o nome do curso" class="form-control">
    <br><br>
    <label class="badge text-bg-secondary">Carga horária:</label><br>
    <input type="text" name="carga_horaria" placeholder="Insira a carga horária" class="form-control"><br><br>
    <input type="submit" value="Inserir Curso" class="btn btn-success">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>

            <h1>Editar curso</h1><br>
            <form method="post" action="edita_curso.php">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                <label class="badge text-bg-secondary">Nome Curso:</label><br>
                <input type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>" class="form-control">
                <br><br>
                <label class="badge text-bg-secondary">Carga horária:</label><br>
                <input type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['duracao']; ?>" class="form-control"><br><br>
                <input type="submit" value="Editar Curso" class="btn btn-success">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>