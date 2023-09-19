<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION["cpf"])) {
    header("Location: login.html"); // Redirecionar para a página de login se não estiver logado
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style2.css">

<title>Formulário de Contato</title>
</head>
<body>
<div class="container">
  <h2>Formulário de Contato</h2>
  <form action="#" method="POST">
    <label for="nome">Nome completo:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>
    
    <label for="numero">Número:</label>
    <input type="text" id="numero" name="numero" required>

    
    <label for="Bairro">Bairro</label>
    <select id="bairros" name="bairro">
        <option value="Alegre">Alegre</option>
        <option value="Alto_da_Boa_Vista">Alto da Boa Vista</option>
        <option value="Area_Rural">Area Rural</option>
        <option value="Areiao">Areião</option>
        <option value="Centro">Centro</option>
        <option value="Chácara_rosa_dias">Chácara Rosa Dias</option>
        <option value="Conceição">Conceição</option>
        <option value="Condomínio_fechado_morro_azul_II">Condomínio Fechado Morro Azul II</option>
        <option value="Conjunto_residencial_nossa_senhora_de_fátima">Conjunto Residencial Nossa Senhora de Fátima</option>
        <option value="Distrito_industrial">Distrito Industrial</option>
        <option value="Fazenda_nossa_senhora_do_jaguari">Fazenda Nossa Senhora do Jaguari</option>
        <option value="Jardim_aeroporto_eldorado">Jardim Aeroporto Eldorado</option>
        <option value="Jardim_almeida">Jardim Almeida</option>
        <option value="Jardim_amélia">Jardim Amélia</option>
        <option value="Jardim_américa_do_sul">Jardim América do Sul</option>
        <option value="Jardim_amoreiras">Jardim Amoreiras</option>
        <option value="Jardim_bela_vista">Jardim Bela Vista</option>
        <option value="Jardim_belvedere">Jardim Belvedere</option>
        <option value="Jardim_boa_vista">Jardim Boa Vista</option>
        <option value="Jardim_canadá">Jardim Canadá</option>
        <option value="Jardim_cledirna">Jardim Cledirna</option>
        <option value="Jardim_da_glória">Jardim da Glória</option>
        <option value="Jardim_das_acácias">Jardim das Acácias</option>
        <option value="Jardim_das_amoreiras_II">Jardim das Amoreiras II</option>
        <option value="Jardim_das_azaléias">Jardim das Azaléias</option>
        <option value="Jardim_das_flores">Jardim das Flores</option>
        <option value="Jardim_das_hortências">Jardim das Hortências</option>
        <option value="Jardim_das_paineiras">Jardim das Paineiras</option>
        <option value="Jardim_das_rosas">Jardim das Rosas</option>
        <option value="Jardim_das_tulipas">Jardim das Tulipas</option>
        <option value="Jardim_del_plata">Jardim Del Plata</option>
        <option value="Jardim_del_plata_II">Jardim Del Plata II</option>
        <option value="Jardim_do_trevo">Jardim do Trevo</option>
        <option value="Jardim_dona_tereza">Jardim Dona Tereza</option>
        <option value="Jardim_dona_tereza_II">Jardim Dona Tereza II</option>
        <option value="Jardim_dos_comerciários">Jardim dos Comerciários</option>
        <option value="Jardim_dos_eucaliptos">Jardim dos Eucaliptos</option>
        <option value="Jardim_dos_ipês_I">Jardim dos Ipês I</option>
        <option value="Jardim_dos_ipês_II">Jardim dos Ipês II</option>
        <option value="Jardim_dos_reis">Jardim dos Reis</option>
        <option value="Jardim_eldorado">Jardim Eldorado</option>
        <option value="Jardim_europa">Jardim Europa</option>
        <option value="Jardim_flamboyant">Jardim Flamboyant</option>
        <option value="Jardim_fleming">Jardim Fleming</option>
        <option value="Jardim_guanabara">Jardim Guanabara</option>
        <option value="Jardim_industrial">Jardim Industrial</option>
        <option value="Jardim_itália">Jardim Itália</option>
        <option value="Jardim_leonor">Jardim Leonor</option>
        <option value="Jardim_lucas_teixeira">Jardim Lucas Teixeira</option>
        <option value="Jardim_maestro_mourão">Jardim Maestro Mourão</option>
        <option value="Jardim_magalhães">Jardim Magalhães</option>
        <option value="Jardim_michelazzo">Jardim Michelazzo</option>
        <option value="Jardim_molinari">Jardim Molinari</option>
        <option value="Jardim_monte_verde">Jardim Monte Verde</option>
        <option value="Jardim_nova_república">Jardim Nova República</option>
        <option value="Jardim_nova_são_joão">Jardim Nova São João</option>
        <option value="Jardim_novo_horizonte">Jardim Novo Horizonte</option>
        <option value="Jardim_primavera">Jardim Primavera</option>
        <option value="Jardim_primeiro_de_maio">Jardim Primeiro de Maio</option>
        <option value="Jardim_priscila">Jardim Priscila</option>
        <option value="Jardim_progresso">Jardim Progresso</option>
        <option value="Jardim_recanto">Jardim Recanto</option>
        <option value="Jardim_recanto_das_águas">Jardim Recanto das Águas</option>
        <option value="Jardim_recanto_do_bosque">Jardim Recanto do Bosque</option>
        <option value="Jardim_recanto_do_jaguari">Jardim Recanto do Jaguari</option>
        <option value="Jardim_recanto_dos_pássaros">Jardim Recanto dos Pássaros</option>
        <option value="Jardim_recanto_dos_pássaros_II">Jardim Recanto dos Pássaros II</option>
        <option value="Jardim_recreio">Jardim Recreio</option>
        <option value="Jardim_santa_águida">Jardim Santa Águida</option>
        <option value="Jardim_santa_clara">Jardim Santa Clara</option>
        <option value="Jardim_santa_helena">Jardim Santa Helena</option>
        <option value="Jardim_santa_rita">Jardim Santa Rita</option>
        <option value="Jardim_santarém">Jardim Santarém</option>
        <option value="Jardim_santiago_penha">Jardim Santiago Penha</option>
        <option value="Jardim_santo_andré">Jardim Santo André</option>
        <option value="Jardim_são_jorge">Jardim São Jorge</option>
        <option value="Jardim_são_manoel">Jardim São Manoel</option>
        <option value="Jardim_são_nicolau">Jardim São Nicolau</option>
        <option value="Jardim_são_paulo">Jardim São Paulo</option>
        <option value="Jardim_são_salvador">Jardim São Salvador</option>
        <option value="Jardim_são_thiago">Jardim São Thiago</option>
        <option value="Jardim_satélite">Jardim Satélite</option>
        <option value="Jardim_serra_da_paulista">Jardim Serra da Paulista</option>
        <option value="Jardim_sol_nascente">Jardim Sol Nascente</option>
        <option value="Jardim_sol_nascente_II">Jardim Sol Nascente II</option>
        <option value="Jardim_trianon">Jardim Trianon</option>
        <option value="Jardim_vale_do_sol">Jardim Vale do Sol</option>
        <option value="Jardim_vila_rica">Jardim Vila Rica</option>
        <option value="Jardim_yara">Jardim Yara</option>
        <option value="Lago_da_prata">Lago da Prata</option>
        <option value="Lagoa_dos_patos">Lagoa dos Patos</option>
        <option value="Morro_azul">Morro Azul</option>
        <option value="Núcleo_durval_nicolau">Núcleo Durval Nicolau </option>
        <option value="Núcleo_habitacional_eugênio_s_mathias">Núcleo Habitacional Eugênio S Mathias</option>
        <option value="Parque_colina_da_mantiqueira">Parque Colina da Mantiqueira</option>
        <option value="Parque_das_nações">Parque das Nações</option>
        <option value="Parque_dos_resedás">Parque dos Resedás</option>
        <option value="Parque_jequitibás">Parque Jequitibás</option>
        <option value="Parque_residencial_jardim_são_domingos">Parque Residencial Jardim São Domingos</option>
        <option value="Parque_residencial_tereza_cristina">Parque Residencial Tereza Cristina</option>
        <option value="Parque_universitário">Parque Universitário</option>
        <option value="Pedregulho">Pedregulho</option>
        <option value="Perpétuo_socorro">Perpétuo Socorro</option>
        <option value="Portal_das_mangueiras">Portal das Mangueiras</option>
        <option value="Pousada_do_sol">Pousada do Sol</option>
        <option value="Recanto_da_serra">Recanto da Serra</option>
        <option value="Recanto_das_paineiras">Recanto das Paineiras</option>
        <option value="Recanto_do_lago">Recanto do Lago</option>
        <option value="Residencial_fazenda_das_areias">Residencial Fazenda das Areias</option>
        <option value="Riviera_de_são_joão">Riviera de São João</option>
        <option value="Rosário">Rosário</option>
        <option value="Santo_antônio">Santo Antônio</option>
        <option value="São_benedito">São Benedito</option>
        <option value="São_lázaro">São Lázaro</option>
        <option value="São_marcos">São Marcos</option>
        <option value="Sitio_santa_rita">Sitio Santa Rita</option>
        <option value="Solário_da_mantiqueira">Solário da Mantiqueira</option>
        <option value="Terras_de_são_josé">Terras de São José</option>
        <option value="Vila_bela">Vila Bela</option>
        <option value="Vila_brasil">Vila Brasil</option>
        <option value="Vila_carvalho">Vila Carvalho</option>
        <option value="Vila_clayton">Vila Clayton</option>
        <option value="Vila_conceição">Vila Conceição</option>
        <option value="Vila_conrado">Vila Conrado</option>
        <option value="Vila_damáglio">Vila Damáglio</option>
        <option value="Vila_estrela">Vila Estrela</option>
        <option value="Vila_fleming">Vila Fleming</option>
        <option value="Vila_gomes">Vila Gomes</option>
        <option value="Vila_isabel">Vila Isabel</option>
        <option value="Vila_loyola">Vila Loyola</option>
        <option value="Vila_luzitana">Vila Luzitana</option>
        <option value="Vila_magnólia">Vila Magnólia</option>
        <option value="Vila_nossa_senhora_de_fátima">Vila Nossa Senhora de Fátima</option>
        <option value="Vila_operária">Vila Operária</option>
        <option value="Vila_oriental">Vila Oriental</option>
        <option value="Vila_santa_adélia">Vila Santa Adélia</option>
        <option value="Vila_tenente_vasconcelos">Vila Tenente Vasconcelos</option>
        <option value="Vila_trafani">Vila Trafani</option>
        <option value="Vila_valentin">Vila Valentin</option>
        <option value="Vila_valentin_nova">Vila Valentin Nova</option>
        <option value="Vila_westin">Vila Westin</option>
        <option value="Vila_zanetti">Vila Zanetti</option>
        <option value="Yolanda">Yolanda</option>
    </select>
        
    <label for="anonimo">Deseja ser anônimo?</label>
    <select id="anonimo" name="anonimo">
      <option value="sim">Sim</option>
      <option value="nao">Não</option>
    </select>
    
    <label for="descricao">Descrição do problema:</label>
    <textarea id="descricao" name="descricao" rows="4" required></textarea>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label for="imagem">Selecione uma imagem:</label>
      <input type="file" name="imagem" id="imagem">
      <br>
      <label for="video">Selecione um vídeo:</label>
      <input type="file" name="video" id="video">
      <br>
      <input type="submit" value="Enviar">
  </form>
  
    
    <button type="submit">Enviar</button>
  </form>
</div>
</body>
</html>
