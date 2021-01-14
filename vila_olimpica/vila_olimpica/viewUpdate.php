<?php
 
    include_once('conecta.php');
    include_once('navbar2.php');
 

?>
<script>
    $(document).ready(function(){
        $('#upAtleta').validate({
            rules: {
                nome_atleta: {
                    required: true,
                    minlength: 6
                },
                data_nascimento: {
                    required: true
                },
                cpf: {
                    required: true
                },
                rg: {
                    required: true
                },
                orgao_expedidor: {
                    required: true
                },
                uf: {
                    required: true
                },
                naipe: {
                    required: true
                },
                modalidade: {
                    required: true
                },
                categoria: {
                    required: true
                },
                nacionalidade: {
                    required: true
                },
                naturalidade: {
                    required: true,
                    minlength: 6
                },
                escola: {
                    required: true,
                    minlength: 4
                },
                nome_mae: {
                    required: true,
                    minlength: 6
                },
                nome_pai: {
                    required: true,
                    minlength: 6
                },
                tel_responsavel: {
                    required: true,
                },
                endereco: {
                    required: true,
                    minlength: 4
                },
                bairro: {
                    required: true
                },
                numero:{
                    required: true
                },
                cidade: {
                    required: true,
                },
                estado:{
                    required: true
                },
                local_treinamento: {
                    required: true
                },
                professor:{
                    required: true
                }
                
            },
            messages: {
                nome_atleta:{
                    required:"Campo Nome do Atleta é obrigatório",
                    minlength:"Digite pelo menos 6 caracteres"
                },
                data_nascimento: {
                    required:"Campo Data de nascimento é obrigatório"
                   
                },
                cpf:{
                    required:"Campo CPF é obrigatório"
                },
                rg: {
                    required:"Campo RG é obrigatório"
                },
                orgao_expedidor: {
                    required:"Campo Órgão Expedidor é obrigatótio"
                },
                uf: {
                    required:"Campo UF é obrigatório"
                },
                naipe: {
                    required:"O campo Naipe é obrigatório"
                },
                modalidade: {
                    required:"O campo Modalidade é obrigatório"
                },
                categoria: {
                    required:"O campo Categoria é obrigatório"
                },
                nacionalidade: {
                    required:"O campo Nacionalicade é obrigatorio"
                },
                naturalidade: {
                    required:"O campo Naturalidade é obrigatorio",
                    minlength:"Digite pelo menos 6 caracteres"
                },
                escola: {
                    required:"O campo Escola/Universidade é obrigatorio",
                    minlength:"Digite pelo menos 4 caracteres"
                },
                nome_mae: {
                    required:"O campo Nome da Mãe é obrigatorio",
                    minlength:"Digite pelo menos 6 caracteres"
                },
                tel_responsavel: {
                    required:"O campo Telefone do Responsável é obrigatorio"
                },
                endereco: {
                    required:"O campo Endereço é obrigatorio ",
                    minlength:"Digite pelo menos 4 caracteres"
                },
                bairro: {
                    required:"O campo Bairro é obrigatorio"
                },
                numero: {
                    required:"O campo N° é obrigatorio "
                },
                cidade: {
                    required:"O campo Cidade é obrigatorio "
                },
                estado:{
                    required:"O campo Estado é obrigatorio"
                },
                local_treinamento: {
                    required:"O campo Local de treinamento é obrigatorio"
                },
                professor: {
                    required:"O campo Professor é obrigatorio"
                }

            },
           
        });

        $('input[name=data_nascimento]').mask("00/00/0000", {placeholder: "DD/MM/AAAA"});
        $('input[name=cpf]').mask('000.000.000-00');
        $('input[name=rg]').mask('00.000.000');
        $('input[name=tel_responsavel]').mask('(00) 0 0000-0000');
        

    });
    </script>
    <style>
		.error{
			color:red
		}
	</style>

    <title>Vila Olimpica - Atualização de dados</title>

<?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM atletas WHERE id=$id");
 
?>

<main>
<?php
     while ($dados =mysqli_fetch_assoc($sql)) {
?>
    <div class="container">
        <div>
          <p class=" text-center font-weight-bold" style="font-size:32px;">Alterar dados do Atleta</p>
        </div>

        <form name="upAtleta" id="upAtleta" action="update-atleta.php?id=<? echo $dados['id']?>" method="post" enctype="multipart/form-data">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputNome1">Nome do Atleta: </label>
                    <input type="text" name="nome_atleta" class="form-control text-capitalize" id="inputNome1" value="<? echo $dados['nome_atleta']?>">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputData1">Data de Nascimento: </label>
                    <input type="text" name="data_nascimento" class="form-control" id="inputData1" value="<? echo $dados['data_nascimento']?>">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputCpf1">CPF:</label>
                    <input type="text" name="cpf" class="form-control" id="inputCpf1" value="<? echo $dados['cpf']?>">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputRG">RG:</label>
                    <input type="text" name="rg" class="form-control" id="inputRG" value="<? echo $dados['rg']?>">
                </div>
                            
                <div class="form-group col-md-2">
                    <label for="inputExpedidor">Órgão expedidor:</label>
                    <select name="orgao_expedidor" id="inputExpedidor" class="form-control">
                        <option value="<? echo $dados['orgao_expedidor']?>" selected><? echo $dados['orgao_expedidor']?></option>
                        <option value="(SSP-AC)">(SSP-AC)</option>
                        <option value="(SSP/AL)">(SSP/AL)</option>
                        <option value="(SSP/AP)">(SSP/AP)</option>
                        <option value="(SSP/AM)">(SSP/AM)</option>
                        <option value="(SSP/BA)">(SSP/BA)</option>
                        <option value="(SSPDS/CE)">(SSPDS/CE)</option>
                        <option value="(SSP/DF)">(SSP/DF)</option>
                        <option value="(SESP/ES)">(SESP/ES)</option>
                        <option value="(SSP/GO)">(SSP/GO)</option>
                        <option value="(SSP/MA)">(SSP/MA)</option>
                        <option value="(SSP-MT)">(SSP-MT)</option>
                        <option value="(SSP/MS)">(SSP/MS)</option>
                        <option value="(SSP/MG)">(SSP/MG)</option>
                        <option value="(SSP/PA)">(SSP/PA)</option>
                        <option value="(SSP/PB)">(SSP/PB)</option>
                        <option value="(SSP/PR)">(SSP/PR)</option>
                        <option value="(SSP/PE)">(SSP/PE)</option>
                        <option value="(SSP/PI)">(SSP/PI)</option>
                        <option value="(SSP/RJ)">(SSP/RJ)</option>
                        <option value="(SESED/RN)">(SESED/RN)</option>
                        <option value="(SSP/RS)">(SSP/RS)</option>
                        <option value="(SESDEC/RO)">(SESDEC/RO)</option>
                        <option value="(SESP/RR)">(SESP/RR)</option>
                        <option value="(SSP/SC)">(SSP/SC)</option>
                        <option value="(SSP/SP)">(SSP/SP)</option>
                        <option value="(SSP/SE)">(SSP/SE)</option>
                        <option value="(SSP/TO)">(SSP/TO)</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>

                <div class="form-group col-md-1.8">
                    <label for="inputUf1">UF:</label>
                    <select name="uf" id="inputUf1" class="form-control" >
                        <option value="<? echo $dados['uf']?>" selected><? echo $dados['uf']?></option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>

                <div class="form-group col-md-1.8">
                    <label for="inputNaipe">Naipe:</label>
                    <select name="naipe" id="inputNaipe" class="form-control">
                        <option value="<? echo $dados['naipe']?>" selected><? echo $dados['naipe']?></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="inputModalidade">Modalidade:</label>
                    <select name="modalidade" id="inputModalidade" class="form-control">
                        <option value="<? echo $dados['modalidade']?>" selected><? echo $dados['modalidade']?></option>
                        <option value="Futsal">Futsal</option>
                        <option value="Futebol">Futebol</option>
                        <option value="Basquete">Basquete</option>
                        <option value="Vôlei">Vôlei</option>
                        <option value="Peteca">Peteca</option>
                        <option value="Natação">Natação</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="inputCategoria">Categoria:</label>
                    <select name="categoria" id="inputCategoria" class="form-control">
                        <option value="<? echo $dados['categoria']?>" selected><? echo $dados['categoria']?></option>
                        <option value="sub-07">sub-07</option>
                        <option value="sub-09">sub-09</option>
                        <option value="sub-11">sub-11</option>
                        <option value="sub-13">sub-13</option>
                        <option value="sub-15">sub-15</option>
                        <option value="sub-17">sub-17</option>
                        <option value="sub-19">sub-19</option>
                        <option value="Adulto">Adulto</option>
                    </select>
                </div>
                           
                <div class="form-group col-md-2">
                    <label for="inputNacionalidade">Nacionalidade:</label>
                    <select name="nacionalidade" id="inputNacionalidade" class="form-control">
                        <option value="<? echo $dados['nacionalidade']?>" selected><? echo $dados['nacionalidade']?></option>
                        <option value="Afeganistão">Afeganistão</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Albânia">Albânia</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antiga e Barbuda">Antiga e Barbuda</option>
                        <option value="Arábia Saudita">Arábia Saudita</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Arménia">Arménia</option>
                        <option value="Austrália">Austrália</option>
                        <option value="Áustria">Áustria</option>
                        <option value="Azerbaijão">Azerbaijão</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bangladexe">Bangladexe</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Barém">Barém</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Belize">Belize</option>
                        <option value="Benim">Benim</option>
                        <option value="Bielorrússia">Bielorrússia</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                        <option value="Botsuana">Botsuana</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgária">Bulgária</option>
                        <option value="Burquina Faso">Burquina Faso</option>
                        <option value="Burúndi">Burúndi</option>
                        <option value="Butão">Butão</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Camboja">Camboja</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Cazaquistão">Cazaquistão</option>
                        <option value="Chade">Chade</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Comores">Comores</option>
                        <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                        <option value="Coreia do Norte">Coreia do Norte</option>
                        <option value="Coreia do Sul">Coreia do Sul</option>
                        <option value="Cosovo">Cosovo</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croácia">Croácia</option>
                        <option value="Cuaite">Cuaite</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egito">Egito</option>
                        <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                        <option value="Equador">Equador</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Eslováquia">Eslováquia</option>
                        <option value="Eslovénia">Eslovénia</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Estado da Palestina">Estado da Palestina</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estónia">Estónia</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlândia">Finlândia</option>
                        <option value="França">França</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Gana">Gana</option>
                        <option value="Geórgia">Geórgia</option>
                        <option value="Granada">Granada</option>
                        <option value="Grécia">Grécia</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guiana">Guiana</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungria">Hungria</option>
                        <option value="Iémen">Iémen</option>
                        <option value="Ilhas Marechal">Ilhas Marechal</option>
                        <option value="Índia">Índia</option>
                        <option value="Indonésia">Indonésia</option>
                        <option value="Irão">Irão</option>
                        <option value="Iraque">Iraque</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Islândia">Islândia</option>
                        <option value="Israel">Israel</option>
                        <option value="Itália">Itália</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japão">Japão</option>
                        <option value="Jibuti">Jibuti</option>
                        <option value="Jordânia">Jordânia</option>
                        <option value="Laus">Laus</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letónia">Letónia</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Listenstaine">Listenstaine</option>
                        <option value="Lituânia">Lituânia</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Macedónia">Macedónia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malásia">Malásia</option>
                        <option value="Maláui">Maláui</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Maurícia">Maurícia</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="México">México</option>
                        <option value="Mianmar">Mianmar</option>
                        <option value="Micronésia">Micronésia</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Moldávia">Moldávia</option>
                        <option value="Mónaco">Mónaco</option>
                        <option value="Mongólia">Mongólia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicarágua">Nicarágua</option>
                        <option value="Níger">Níger</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nova Zelândia">Nova Zelândia</option>
                        <option value="Omã">Omã</option>
                        <option value="Países Baixos">Países Baixos</option>
                        <option value="Palau">Palau</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papua Nova Guiné">Papua Nova Guiné</option>
                        <option value="Paquistão">Paquistão</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="Peru">Peru</option>
                        <option value="Polónia">Polónia</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Quénia">Quénia</option>
                        <option value="Quirguistão">Quirguistão</option>
                        <option value="Quiribáti">Quiribáti</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Roménia">Roménia</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rússia">Rússia</option>
                        <option value="Salomão">Salomão</option>
                        <option value="Salvador">Salvador</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Santa Lúcia">Santa Lúcia</option>
                        <option value="São Cristóvão e Neves">São Cristóvão e Neves</option>
                        <option value="São Marinho">São Marinho</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                        <option value="Seicheles">Seicheles</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Sérvia">Sérvia</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Síria">Síria</option>
                        <option value="Somália">Somália</option>
                        <option value="Sri Lanca">Sri Lanca</option>
                        <option value="Suazilândia">Suazilândia</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Sudão do Sul">Sudão do Sul</option>
                        <option value="Suécia">Suécia</option>
                        <option value="Suíça">Suíça</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Tailândia">Tailândia</option>
                        <option value="Taiuã">Taiuã</option>
                        <option value="Tajiquistão">Tajiquistão</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trindade e Tobago">Trindade e Tobago</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Turcomenistão">Turcomenistão</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrânia">Ucrânia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Usbequistão">Usbequistão</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vaticano">Vaticano</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietname">Vietname</option>
                        <option value="Zâmbia">Zâmbia</option>
                        <option value="Zimbábue">Zimbábue</option>
                    </select>
                </div>

                <div class="form-group col-md-2.8">
                    <label for="inputNaturalidade">Naturalidade:</label>
                    <input type="text" name="naturalidade" class="form-control text-capitalize" id="inputNaturalidade" value="<? echo $dados['naturalidade']?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEscola">Escola/Universidade:</label>
                        <input type="text" name="escola" class="form-control text-uppercase" id="inputEscola" value="<? echo $dados['escola']?>">
                </div>
            </div>

                <hr>
                        
                <div class="form-row">
                    <div class="form-group col-md-4 ">
                    <label for="inputmae">Nome da mãe:</label>
                    <input type="text" name="nome_mae" class="form-control text-capitalize" id="inputmae" value="<? echo $dados['nome_mae']?>">
                </div>

                <div class="form-group col-md-4 ">
                    <label for="inputPai">Nome do Pai:</label>
                    <input type="text" name="nome_pai" class="form-control text-capitalize" id="inputPai" value="<? echo $dados['nome_pai']?>">
                </div>

                <div class="form-group col-md-4 ">
                    <label for="inputTel">Telefone do Responsável:</label>
                    <input type="text" name="tel_responsavel" class="form-control" id="inputTel" value="<? echo $dados['tel_responsavel']?>">
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputAddress2">Endereço:</label>
                    <input type="text" name="endereco" class="form-control text-capitalize" id="inputAddress2" value="<? echo $dados['endereco']?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputBairro">Bairro:</label>
                    <input type="text" name="bairro" class="form-control text-capitalize" id="inputBairro" value="<? echo $dados['bairro']?>">
                </div>

                <div class="form-group col-md-1.9">
                    <label for="inputNumero">N°:</label>
                    <input type="text" name="numero" class="form-control" id="inputNumero" value="<? echo $dados['numero']?>">
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Cidade:</label>
                    <input type="text" name="cidade" class="form-control text-capitalize" id="inputCity" value="<? echo $dados['cidade']?>">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputEstado">Estado</label>
                    <select name="estado" id="inputEstado" class="form-control">
                        <option value="<? echo $dados['estado']?>" selected><? echo $dados['estado']?></option>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>
                            
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label for="inputTreino">Local de treinamento:</label>
                    <input type="text" name="local_treinamento" class="form-control" id="inputTreino" value="<? echo $dados['local_treinamento']?>">
                </div>

                <div class="form-group col-md-5">
                    <label for="inputProfessor">Professor:</label>
                    <input type="text" name="professor" class="form-control text-capitalize" id="inputProfessor" value="<? echo $dados['professor']?>">
                    <input name="id" type="hidden" value="<? echo $dados['id'];?>"/>

                </div>
            </div>
             
            <button type="submit" class="btn btn-success btn-lg btn-block">
                Alterar cadastro
            </button> 
                   
            <a href="view.php?id=<? echo $dados['id']?>" class="btn btn-danger btn-lg btn-block">Cancelar</a>
                
        </form>
    </div>
<?php
    }
?>       
</main>

<?
    include_once('footer.php');
?>