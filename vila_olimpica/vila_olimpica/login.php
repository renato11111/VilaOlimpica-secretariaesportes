<?php
//conexão
    include_once('conecta.php');

//sessão
    session_start();

// Botão enviar
    if (isset($_POST['btn-entrar'])) {
        $erros = array();
        $usuario = mysqli_escape_string($conn, $_POST['usuario']);
        $senha = mysqli_escape_string($conn, $_POST['senha']);

        if (empty($usuario) or empty($senha)) {
            $erros[] = "<div class='alert alert-danger' role='alert'>  O campo Usuário/Senha precissa ser preenchido!</div>";
            
        }else{
            $sql = "SELECT usuario From `usuario` WHERE usuario = '$usuario'";
            $resultado = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);
            $sql ="SELECT * FROM `usuario` WHERE usuario = '$usuario' AND senha= '$senha'";
            
            $resultado = mysqli_query($conn, $sql);

            if (mysqli_num_rows($resultado) == 1) {
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $dados['id'];
                header('location: index.php');
                

            }else{
                $erros[] = "<div class='alert alert-danger' role='alert' style='text-align: center;'>Usuário ou Senha não conferem! </div>";
            }    
    
        }else{
            $erros[] = "<div class='alert alert-danger' role='alert' style='text-align: center;'>Usuário Não existe! </div>";   
        
            }    
        }
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


    <title>Login - Vila Olimpica</title>
</head>
<body >
    <nav class="navbar navbar-dark bg-dark">
        
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label class="sr-only" for="user">Usuário</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <input type="text" name="usuario" class="form-control" id="user" placeholder="Usuário" required>
            </div>

            <label class="sr-only" for="senha">Senha:</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit" name="btn-entrar" class="btn btn-outline-info mb-2">Enviar</button>

        </form>

    </nav>
        <?php 
            // mensagem enviada quando os campos usuário/senha não estiverem fazios
            if (!empty($erros)) {
                foreach($erros as $erro){
                    echo $erro;
                }
            }
        ?>

    <main class="container">
        <p class="h1 text-center font-weight-bold font-italic">Vila Olimpica/Secretaria de Esportes</p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="image/24ewdfq2rdsrf4r.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/12331dsad3dfgddfg.jpg" alt="Segundo Slide">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button"  data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>        
    </main>

    <?php
        include_once('footer.php');
    
    ?>