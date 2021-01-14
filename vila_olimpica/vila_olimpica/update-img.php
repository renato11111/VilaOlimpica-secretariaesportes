<?php
    include_once('conecta.php');
    
    if(isset($_POST['Upimagem'])){

        $id = $_POST['id'];
       
        $imagem = $_FILES['arquivo']['name'];

        $formatosPermitidos = array("png","jpeg","jpg","gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if (in_array($extensao,$formatosPermitidos)) {
            $pasta = "arquivo/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $nomeNome = uniqid().".$extensao";
    
            if (move_uploaded_file($temporario, $pasta . $imagem)) {
                
                $mensagem = 'Upload e alteração realizado com sucesso!';
                
            
            }else{
                $mensagem = "Falha ao realizar o Upload";
            }
    
            
        }
        else{
            $mensagem = "Formato inválido";
        }
    
    }
    
    $sql = mysqli_query($conn, "UPDATE `atletas` SET imagem='$imagem' WHERE id=$id");

    if ($sql) {
        echo '<p style="font-size: 38px; background-color:rgb(164, 243, 46); color: green; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
                Sua alteração foi realizada com sucesso!
            </p>';

        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
                <a href="index.php" style="text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold; box-shadow: 1px 5px 30px #868585;">
                    Avançar
                </a>
            </p>';
    }
    else {
        echo '<p style="font-size: 38px; background-color: red; color: yellow; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
            Houve um erro ao tentar alterar a imagem!
        </p>';
        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
            <a href="index.php" style="box-shadow: 1px 5px 30px #868585; text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold;">
                Tentar Novamente
            </a>
        </p>'; 
    }

    
    
    mysqli_close($conn);
?>