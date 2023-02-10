<?php
if (isset($_GET['erro'])){
?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou Senha inválidos
    </div>
<?php    
}
?>
<h1>Bem vindos ao PataCursos</h1>
<br>
<form method="post" action="login.php">

    <label class="badge text-bg-secondary">Nome de Usuário:</label>
    <input type="text" name="usuario" placeholder="Nome de Usuario" class="form-control"><br>

    <label class="badge text-bg-secondary">Senha:</label>
    <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

    <input type="submit" value="Entrar" class="btn btn-success">
</form>