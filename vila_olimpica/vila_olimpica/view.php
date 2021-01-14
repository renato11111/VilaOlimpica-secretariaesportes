<?php
 
    include_once('conecta.php');
    include_once('navbar2.php');

?>

<head>
    
    <title>Vila Olimpica - Detalhes Atletas</title>

</head>

<?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM atletas WHERE id=$id");
    
?>

<main class="container">
    <div class="form-row">

<?php
    while ($dados =mysqli_fetch_assoc($sql)) {
?>
        <div class="form-group col-md-3">
            
                <img src="arquivo/<? echo $dados['imagem']?>" class="figure-img img-fluid rounded" alt="Foto do Atleta <?echo $dados['nome_atleta']?> ">
                <div class="d-flex bd-highlight">
                    <div class="w-100">
                        <figcaption class="figure-caption text-left">
                            Imagem referente ao atleta
                        </figcaption>
                    </div>
                    <div class="flex-shrink-1 bd-highlight">
                        <figcaption class="figure-caption text-left">
                        <!-- terminar esquema da foto-->
                        <abbr title="Editar foto">
                            <a href="editarfoto.php?id=<? echo $dados['id']?>">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>    
                        </abbr>    
                        </figcaption>
                    </div>
            </div>
        </div>
        <div class="from-group col-md-8">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="text-capitalize" style="font-size: 28px;">
                            <b><? echo $dados['nome_atleta']?></b>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <b>RG:</b> <span><? echo $dados['uf'] ?></span>-<span><? echo $dados['rg'] ?></span>

                        <b>CPF:</b> <span><? echo $dados['cpf']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Órgão expedidor</b> <span><? echo $dados['orgao_expedidor'] ?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Data de Nascimento:</b> <span><? echo $dados['data_nascimento']?></span>
                    </li>
                    <li class="list-group-item">
                       <b>Naipe:</b> <span><? echo $dados['naipe']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Modalidade:</b> <span><? echo $dados['modalidade']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Categoria:</b> <span><? echo $dados['categoria']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Nacionalidade:</b> <span><? echo $dados['nacionalidade']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Naturalidade:</b> <span><? echo $dados['naturalidade']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Escola/Universidade:</b> <span><? echo $dados['escola']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Nome da Mãe:</b> <span><? echo $dados['nome_mae']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Nome do Pai:</b> <span><? echo $dados['nome_pai']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Telefone do Responsável:</b> <span><? echo $dados['tel_responsavel']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Endereço:</b> <span><? echo $dados['endereco']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Bairro:</b> <span><? echo $dados['bairro']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Nº:</b> <span><? echo $dados['numero']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Cidade:</b> <span><? echo $dados['cidade']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Estado:</b> <span><? echo $dados['estado']?></span>
                    </li>
                    <li class="list-group-item">
                        <b>Local de treinamento:</b> <span><? echo $dados['local_treinamento']?></span>.
                    </li>
                    <li class="list-group-item">
                        <b>Professor:</b> <span><? echo $dados['professor']?></span>
                    </li> 
                </ul>
            </div>

            <a href="viewUpdate.php?id=<? echo $dados['id']?>" type="button" class="btn btn-warning btn-lg btn-block">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Atulizar dados
            </a>

            <a href="delete_atleta.php?id=<? echo $dados['id']?>" type="button" class="btn btn-danger btn-lg btn-block">
                <i class="fa fa-user-times" aria-hidden="true"></i>
                     Deletar Atleta
            </a>

<?php
    }
?>
</main>

<?php
    include_once('footer.php');
?>