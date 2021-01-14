<?php

include_once('conecta.php');

    $id = $_POST['id'];
    $Nome = $_POST['nome'];
    $Usuario = $_POST['usuario'];
    $Senha  = md5($_POST['senha']);


    $sql = mysqli_query($conn, "UPDATE `usuario` SET nome='$Nome',usuario='$Usuario', senha='$Senha' WHERE id=$id");

    if ($sql) {
        echo '<p style="font-size: 38px; background-color:rgb(164, 243, 46); color: green; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
            Atualizado com sucesso
        </p>';
        echo  '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">

        <a href="perfil.php"  style="text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold; box-shadow: 1px 5px 30px #868585;">
        Ir para tela Perfil
        </a>

        </p>';
        
    }else{
        echo '<p style="font-size: 38px; background-color: red; color: yellow; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
        Falha ao Tentar Atualizar dados
    </p>';
        echo  '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">

        <a href="perfil-editar.php" style="box-shadow: 1px 5px 30px #868585; text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold;">
        Tentar novamente
        </a>
            
        </p>';
    }
?>