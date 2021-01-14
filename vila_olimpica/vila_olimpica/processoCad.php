<?php

include_once('conecta.php');

    if(isset($_POST['CadUser'])){
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
        $imagem = $_FILES['arquivo']['name'];
        $formatosPermitidos = array("png","jpeg","jpg","gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        
        
        if (in_array($extensao,$formatosPermitidos)) {
            $pasta = "arquivo/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $nomeNome = uniqid().".$extensao";
    
            if (move_uploaded_file($temporario, $pasta . $imagem)) {
                $mensagem = "Upload realizado com sucesso!";
                
            
            }else{
                $mensagem = "Falha ao realizar o Upload";
            }
    
            
        }
        else{
            $mensagem = "Formato inválido";
        }
    
        echo $mensagem;
    }

    $sql = mysqli_query($conn, "INSERT INTO `atletas` (`nome_atleta`,`data_nascimento`,`cpf`,`rg`,`orgao_expedidor`,`uf`,`naipe`,`modalidade`,`categoria`,`nacionalidade`,`naturalidade`,`escola`,`nome_mae`,`nome_pai`,`tel_responsavel`,`endereco`,`bairro`,`numero`,`cidade`,`estado`,`local_treinamento`,`professor`,`imagem`) VALUES ('$nomeAtleta','$dataNascimento','$dadosCpf','$dadosRg','$orgExpedidor','$dadosUf','$naipe','$modalidade','$categoria','$nacionalidade','$naturalidade','$escola','$nomeMae','$nomePai','$telResponsavel','$endereco','$bairro','$numero','$cidade','$estado','$localTreino','$professor','$imagem')");

    if ($sql) {
        echo '<p style="font-size: 38px; background-color:rgb(164, 243, 46); color: green; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
            Atleta cadastrado com sucesso!
        </p>';
        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
            <a href="index.php" style="text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold; box-shadow: 1px 5px 30px #868585;">
            Ir para lista
            </a>
        </p>';
    }else {
        echo '<p style="font-size: 38px; background-color: red; color: yellow; text-align: center; padding:50px; font-weight: bold; font-family: Open Sans, sans-serif; width: 900px; position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); box-shadow: 1px 5px 30px #868585;">
            Houve um erro ao tentar cadastrar o Atleta!
        </p>';
        echo '<p style="position: absolute; top: 68%; left: 50%; transform: translate(-50%,-50%);">
        <a href="cadastro-atletas.php" style="box-shadow: 1px 5px 30px #868585; text-decoration: none; background-color: #0069d9; color: #fff; padding: 10px; font-size: 24px;font-family: Open Sans, sans-serif; font-weight:bold;">
        Tentar Novamente
        </a>
        </p>'; 
        
    
    }

?>