<?php

require"Pessoa.php";

$uma_pessoa = new Pessoa;
$uma_pessoa->setNome("Renan");

echo $uma_pessoa->getNome();
