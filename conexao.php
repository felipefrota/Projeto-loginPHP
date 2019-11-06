<?php 

// define('HOST', '127.0.0.1');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'tcc');

// $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');






$conexao = mysqli_connect("127.0.0.1:3307", "root", "", "tcc");

 

 

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}





?>

