<?php
    //conexão com DB.
    include_once("conecta.php");
    
    //Sessão
    session_start();

    //Dados dos usuarios
    if(isset($_SESSION['logado'])){
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `usuario` WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado); 
    
   
    }else{
        header('location:login.php');
    }  

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
        
    <script src="bibliotecas/jquery/jquery-3.5.1.min.js"></script>
	<script src="bibliotecas/bootstrap/js/bootstrap.js"></script>
	<script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="bibliotecas/validate/jquery.validate.js"></script>
    <script src="bibliotecas/mask/jquery.mask.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Perfil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="perfil.php">Editar Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">
                    <i class="fa fa-power-off"aria-hidden="true"style="font-size:18px"></i>
                        Desconectar
                    </a>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    Lista de Atletas
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cadastro-atletas.php">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    Cadastrar Atletas
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="#">

                <?php
                    if (isset($_SESSION['logado'])) {
                ?>

                @<?php echo $dados['usuario'];?>:
                <span class="badge badge-pill badge-success">Ativo</span>
                </a>
                
                <?php
                    }else{
                ?>
                @ :
                <span class="badge badge-pill badge-danger">Desativado</span>
                <?php
                    }
                ?>
            </li>
        </ul>

    </div>
    </nav>