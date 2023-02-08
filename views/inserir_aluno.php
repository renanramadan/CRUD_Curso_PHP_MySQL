<?php 
    if(!isset($_GET['editar'])){
?>
<h1>Inserir novo Aluno</h1><br>
<form method="post" action="processa_aluno.php">
    <label>Nome Aluno:</label><br>
    <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    <br><br>

    <label>Email do Aluno:</label><br>
    <input type="text" name="email" placeholder="Insira o email do aluno">
    <br><br>

    <label>Data de nascimento:</label><br>
    <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno"><br><br>

    <input type="submit" value="Inserir Aluno">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
        <?php if($linha['id_aluno'] == $_GET['editar']){ ?>

            <h1>Inserir novo Aluno</h1><br>
            <form method="post" action="edita_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                <label>Nome Aluno:</label><br>
                <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
                <br><br>

                <label>Email do Aluno:</label><br>
                <input type="text" name="email" placeholder="Insira o email do aluno"value="<?php echo $linha['email']; ?>">
                <br><br>

                <label>Data de nascimento:</label><br>
                <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno"value="<?php echo $linha['data_nascimento']; ?>"><br><br>

                <input type="submit" value="Editar Aluno">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>