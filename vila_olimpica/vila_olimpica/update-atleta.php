<?php
    include_once('conecta.php');

        $id = $_POST['id'];
       
        $nomeAtleta = $_POST['nome_atleta'];
        $dataNascimento = $_POST['data_nascimento'];
        $dadosCpf = $_POST['cpf'];
        $dadosRg = $_POST['rg'];
        $orgExpedidor = $_POST['orgao_expedidor'];
        $dadosUf = $_POST['uf'];
        $naipe = $_POST['naipe'];
        $modalidade = $_POST['modalidade'];
        $categoria = $_POST['categoria'];
        $nacionalidade = $_POST['nacionalidade'];
        $naturalidade = $_POST['naturalidade'];
        $escola = $_POST['escola'];
        $nomeMae = $_POST['nome_mae'];
        $nomePai = $_POST['nome_pai'];
        $telResponsavel = $_POST['tel_responsavel'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $localTreino = $_POST['local_treinamento'];
        $professor = $_POST['professor'];

        $sql = mysqli_query($conn, "UPDATE `atletas` SET nome_atleta='$nomeAtleta', data_nascimento='$dataNascimento', cpf='$dadosCpf', rg='$dadosRg', orgao_expedidor='$orgExpedidor', uf='$dadosUf', naipe='$naipe', modalidade='$modalidade', categoria='$categoria', nacionalidade='$nacionalidade', naturalidade='$naturalidade', escola='$escola', nome_mae='$nomeMae', nome_pai='$nomePai', tel_responsavel='$telResponsavel', endereco='$endereco', bairro='$bairro', numero='$numero', cidade='$cidade', estado='$estado', local_treinamento='$localTreino', professor='$professor' WHERE id=$id");

    if ($sql) {
        echo '<p style="font-size: 38px; background-color:rgb(164, 243, 46); color: green; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
                Dados do atleta foram realizados com sucesso!
            </p>';
        
        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
                <a href="index.php" style="text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold; box-shadow: 1px 5px 30px #868585;">
                    Avançar
                </a>
            </p>';
    }
    else{
        echo '<p style="font-size: 38px; background-color: red; color: yellow; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
            ⚠ Falha ao tentar alterar dados! ⚠ 
            </p>';
        
        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
            <a href="index.php" style="box-shadow: 1px 5px 30px #868585; text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold;">
                Tentar Novamente!
            </a>
        </p>';
    }
    
    
    mysqli_close($conn);
?>