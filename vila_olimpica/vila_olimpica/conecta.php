<?php
    // Conexão com banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vila-olimpica";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn) {

        die("falha na conexão:". mysqli_connect_error());
        mysqli_close($conn);
        
    }

    
    
?>