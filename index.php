<?php

# Base de dados
include 'db.php';

# Cabeçaho
include 'header.php';

# Conteudo da pagina
if (isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'home';
}


if ($pagina == 'cursos') {
    include 'views/cursos.php';
} 
elseif ($pagina == 'alunos') {
    include 'views/alunos.php';
}
elseif ($pagina == 'matriculas') {
    include 'views/matriculas.php';
}
else {
    include 'views/home.php';
}

# Rodape
include 'footer.php';