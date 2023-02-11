<?php

require"Pessoa.php";
require"programador.php";

$programador = new Programador("Renan", "PHP");

echo $programador->getNome();
echo "<br>";
echo $programador->getLinguagem();
echo "<br>";
echo $programador::ESPECIE;
