<?php

include_once ("config.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input (INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$sexo = filter_input (INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$dna = filter_input (INPUT_POST, 'dna', FILTER_SANITIZE_STRING);
$gosto = filter_input (INPUT_POST, 'gosto', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";
//echo "Celular: $celular <br>";
//echo "Sexo: $sexo <br>";
//echo "DNA: $dna <br>";
//echo "Gosto: $gosto <br>";

$result = mysqli_query($conexao, "INSERT INTO pessoa(nome, email, celular, sexo, dna, gosto) Values('$nome', '$email', '$celular', '$sexo', '$dna', '$gosto')");