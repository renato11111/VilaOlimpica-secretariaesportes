<?php
    include_once('navbar.php');
    
    include_once('conecta.php');
?>

<title>Editar - Perfil</title>
<main>
    <div class="card">
        <div class="card-header">
            <p class="text-center h2">Editar Perfil</p>
        </div>

        <?php
           
            $sql = mysqli_query($conn, "SELECT * FROM `usuario` WHERE id=$id");
            $dados = mysqli_fetch_array($sql);
        ?>


        <ul class="list-group list-group-flush">
            <form action="updatePefil.php" method="POST">
                <li class="list-group-item">
                    <label for="name">Nome:</label>
                    <input type="text" name="nome" id="name" value="<? echo $dados['nome']?>">
                </li>
                <li class="list-group-item">
                    <label for="user">Usuário:</label>
                    <input type="text" name="usuario" id="user" value="<? echo $dados['usuario']?>">
                </li>
                <li class="list-group-item">
                    <label for="pass">Senha:</label>
                    <input type="password" name="senha" id="pass" value="<? echo $dados['senha']?>">
                    <input name="id" type="hidden" value="<? echo $dados['id'];?>"/>
                    
                </li>
                <li class="list-group-item">
                    <a href="perfil.php" class="btn btn-danger">Voltar</a>
                    <button type="submit" class="btn btn-success">Atualizar dados</button>
                </li>

            </form>
        </ul>
        
    </div>

</main>

<footer style="position: absolute; bottom: 0; width: 100%;">
    <?php
        include_once('footer.php');
    ?>
</footer>
