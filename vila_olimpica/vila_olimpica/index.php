
<?php
/*Inserção da Barra de navegação*/
  include_once('navbar.php');
  
?>
  <title>Inicio - Vila Olimpica</title>
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
  </div>

  <div class="container">

<?php
  
  $sql = mysqli_query($conn, "SELECT * FROM atletas");

?>  

  <div class="table-responsive">
    <table class="table table-striped">
      <thead  class="thead-dark">
        <tr>
          <th class="align-middle" scope="col">#</th>
          <th class="align-middle" scope="col">Nome Completo</th>
          <th class="align-middle" scope="col">NAIPE</th>
          <th class="align-middle" scope="col"><center>CPF</center></th>
          <th class="align-middle" scope="col"><center>RG</center></th>
          <th class="align-middle" scope="col">Data de nascimento</th>
          <th class="align-middle" scope="col">Modalidade</th>
          <th class="align-middle" scope="col">Categoria</th>
          <th class="align-middle" scope="col">Detalhes</th>
        </tr>
      </thead>
      
      <tbody>
      <?php

        while($res = mysqli_fetch_assoc($sql)){

      ?>
        <tr class="align-middle">
          <th scope="row"><?php echo $res['id']?></th>
            <td class="align-middle"><input type="text" class="text-truncate" value="<?php echo $res['nome_atleta']?>" readonly style="border: 0; background: #F1EFEF; width: 120px ;"></td>
            <td class="align-middle"><input type="text" value="<?php echo $res['naipe']?>" readonly style="border: 0; background: #F1EFEF; width: 80px ;"></td>
            <td class="align-middle" style="width:135px"><input type="text" value="<?php echo $res['cpf']?>" readonly style="border: 0; background: #F1EFEF; width: 119px ;"></td>
            <td class="align-middle"><input type="text" value="<?php echo $res['uf']?> <? echo $res['rg']?>" readonly style="border: 0; background: #F1EFEF; width: 115px ;"></td>
            <td class="align-middle"><center><input type="text" value="<?php echo $res['data_nascimento']?>" readonly style="border: 0; background: #F1EFEF; width: 90px ;"></center></td>
            <td class="align-middle"><input type="text" value="<?php echo $res['modalidade']?>" readonly style="border: 0; background: #F1EFEF; width: 70px ;"></td>
            <td class="align-middle"><input type="text" value="<?php echo $res['categoria']?>" readonly style="border: 0; background: #F1EFEF; width: 55px ;"></td>
            <td class="align-middle"><a href="view.php?id=<? echo $res['id']?>" type="button" class="btn btn-info">Visualizar</a></td>
            </tr>
          <tr>

      <?php
    
        }
      ?>
        </tbody>
      </table>
    </div>
  </div>  
</main>
<?php
  
  include_once('footer.php');

?>