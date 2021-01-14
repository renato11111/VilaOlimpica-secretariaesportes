<?php
    include_once('conecta.php');
    include_once('navbar.php');

?>

<title>Editar Dados - Vila Olimpica</title>

<?php
     $sql = mysqli_query($conn, "SELECT * FROM `usuario` WHERE id=$id");
?>

<main class="container-fluid">
    
    <?php

      $dados = mysqli_fetch_array($sql);
        
    ?>
    <div class="card">
        <div class="card-header">
            <p class="text-center h2">Meus Dados</p>
        </div>
    
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p class="text-sm-left" style="font-size: 16px;">
                    Nome: <b><input type="text" value="<? echo $dados['nome']?>" readonly style="border: 0;"></b>
                </p>
            </li>
            <li class="list-group-item">
                <p class="text-sm-left" style="font-size: 16px;">
                    Usuário: <b><input type="text" value="<? echo $dados['usuario']?>" readonly style="border: 0;"></b>
                </p>
            </li>
            <li class="list-group-item">
                <p class="text-sm-left" style="font-size: 16px;">
                Senha: <b><input type="password" class="text-truncate" value="<? echo  $dados['senha']?>" readonly style="border: 0; width: 50px;"></b> <abbr title="Sua senha criptografada" style="text-decoration: none;"><b><i class="fa fa-exclamation-circle" aria-hidden="true" ></i></b></abbr>
                </p>
            </li>
            <li class="list-group-item">
                <a href="perfil-editar.php" class="btn btn-danger" >Atualizar dadados</a>
            </li>
        </ul>
    </div>    
       
     
</main>

<footer style="position: absolute; bottom: 0; width: 100%;">
    <?php
        include_once('footer.php');
    ?>
</footer>