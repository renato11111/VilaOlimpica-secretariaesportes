<?php
    include_once('navbar2.php');
?>

    <title>Vila Olimpica - Gerenciamento de foto</title>

<?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM atletas WHERE id=$id");
    
?>

<main>
    <div class="container">
        <p class="text-center font-weight-bold font-italic" style="font-size: 32px;">Gerenciamento de foto</p>
        <div class="form-row">
       
        <?php
            while ($dados =mysqli_fetch_assoc($sql)) {
        ?>
            <div class="form-group col-md-3">
                <figure class="figure">
                    <img src="arquivo/<?echo $dados['imagem']?>" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                    <figcaption class="figure-caption">
                        Imagem referente ao atleta
                    </figcaption>
                </figure>
            </div>
            
            <form action="update-img.php" method="post" enctype="multipart/form-data">
                <div class="from-group col-md-8">
                    <div class="card" style="width: 500px;" >
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="custom-file">
                                    <input type="file" name="arquivo" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Escolher arquivo:</label>
                                    
                                    <input name="id" type="hidden" value="<? echo $dados['id'];?>"/>

                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" name="Upimagem" class="btn btn-success btn-sm">Salvar mudança</button>
                                
                                <a href="view.php?id=<? echo $dados['id']?>" class="btn btn-secondary btn-sm">
                                    Voltar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </form>
            
            
            <?php
            }
            ?>
        </div>
</main>

<?php
    include_once('footer.php');
?>