<?php 
    if(!isset($_GET['editar'])){
?>
<h1>Inserir novo Aluno</h1><br>
<form method="post" action="processa_aluno.php">
    <label class="badge text-bg-secondary">Nome Aluno:</label><br>
    <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" class="form-control">
    <br><br>

    <label class="badge text-bg-secondary">Email do Aluno:</label><br>
    <input type="text" name="email" placeholder="Insira o email do aluno"class="form-control">
    <br><br>

    <label class="badge text-bg-secondary">Data de nascimento:</label><br>
    <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno" class="form-control"><br><br>

    <input type="submit" value="Inserir Aluno" class="btn btn-success">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
        <?php if($linha['id_aluno'] == $_GET['editar']){ ?>

            <h1>Inserir novo Aluno</h1><br>
            <form method="post" action="edita_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                <label class="badge text-bg-secondary">Nome Aluno:</label><br>
                <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>" class="form-control">
                <br><br>

                <label class="badge text-bg-secondary">Email do Aluno:</label><br>
                <input type="text" name="email" placeholder="Insira o email do aluno"value="<?php echo $linha['email']; ?>" class="form-control">
                <br><br>

                <label class="badge text-bg-secondary">Data de nascimento:</label><br>
                <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno"value="<?php echo $linha['data_nascimento']; ?>" class="form-control"><br><br>

                <input type="submit" value="Editar Aluno" class="btn btn-success">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>