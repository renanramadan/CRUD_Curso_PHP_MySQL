<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>PataCursos</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo" width="250px"></a>
            <div id="menu">
                <a href="?pagina=alunos">Alunos</a>    
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'])){ ?>
                <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
                <?php } ?>
            </div>
        </div>
    </header>
    
    <div id="conteudo" class="container">