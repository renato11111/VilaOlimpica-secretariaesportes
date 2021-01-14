<?php
    include_once('navbar.php');
    include_once('conecta.php');

    $pesquisar = $_POST['pesquisar'];

    $resulAtletas = "SELECT * FROM `atletas` WHERE nome_atleta LIKE '%$pesquisar%'";

    $resul_Atletas = mysqli_query($conn, $resulAtletas);


?>

<main>
    <div>
        <p class="text-capitalize text-center font-weight-bold" style="font-size:32px;">Lista de atletas</p>    
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div style="padding-left:20px">
            <a href="cadastro-atletas.php"class="btn btn-success">
            Cadastrar Atletas
            </a>
        </div>
    </div class="d-flex flex-row bd-highlight mb-3">
        <div style="position: absolute; top:14%; left: 93%; transform: translate(-50%,-50%);fon-size:14px; ">
            <abbr title="Fechar Página de procura">
                <a href="index.php" class="btn btn-danger" style="border-radius:20px; ">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </abbr>
        </div>
    <div>
    
    
    </div>
    

  <div class="container">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead  class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome Completo</th>
          <th scope="col">NAIPE</th>
          <th scope="col">CPF</th>
          <th scope="col">RG</th>
          <th scope="col">Data de nascimento</th>
          <th scope="col">Modalidade</th>
          <th scope="col">Categoria</th>
          <th scope="col">Detalhes</th>
        </tr>
      </thead>
      
      <tbody>
    
    <?php
        while ($row = mysqli_fetch_array($resul_Atletas)) {
            
        
    ?>

        <tr>
          <th scope="row"><?php echo $row['id']?></th>
            <td><input type="text" class="text-truncate" value="<?php echo $row['nome_atleta']?>" readonly style="border: 0; background: #F1EFEF; width: 120px ;"></td>
            <td><input type="text" value="<?php echo $row['naipe']?>" readonly style="border: 0; background: #F1EFEF; width: 80px ;"></td>
            <td><input type="text" value="<?php echo $row['cpf']?>" readonly style="border: 0; background: #F1EFEF; width: 112px ;"></td>
            <td><input type="text" value="<?php echo $row['rg']?>" readonly style="border: 0; background: #F1EFEF; width: 80px ;"></td>
            <td><center><input type="text" value="<?php echo $row['data_nascimento']?>" readonly style="border: 0; background: #F1EFEF; width: 85px ;"></center></td>
            <td><input type="text" value="<?php echo $row['modalidade']?>" readonly style="border: 0; background: #F1EFEF; width: 70px ;"></td>
            <td><input type="text" value="<?php echo $row['categoria']?>" readonly style="border: 0; background: #F1EFEF; width: 55px ;"></td>
            <td><a href="view.php?id=<? echo $row['id']?>" type="button" class="btn btn-info">Visualizar</a></td>
            </tr>
          <tr>
    
    <?php
        }
    ?>

      </table>
    </div>
  </div>  
</main>

<?php
  include_once('footer.php');
?>