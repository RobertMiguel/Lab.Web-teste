<?php

include('conexao.php');

// Dados Gerenciais do Banco
$id = $mysqli->real_escape_string($_POST['id']);
$usuario = $mysqli->real_escape_string($_POST['usuario']);
$senha =$mysqli->real_escape_string($_POST['senha']);
// Dados Adicionais do Aluno
$cep = $mysqli->real_escape_string($_POST['cep']);
$address = $mysqli->real_escape_string($_POST['address']);
$complement = $mysqli->real_escape_string($_POST['complement']);
$neighborhood = $mysqli->real_escape_string($_POST['neighborhood']);
$city = $mysqli->real_escape_string($_POST['city']);
$number = $mysqli->real_escape_string($_POST['number']);
$region = $mysqli->real_escape_string($_POST['region']);
// $naturalidade = $mysqli->real_escape_string($_POST['naturalness']);
$nationality = $mysqli->real_escape_string($_POST['nationality']);
$naturalness = $mysqli->real_escape_string($_POST['naturalness']);
$raca = $mysqli->real_escape_string($_POST['raca']);
$tel = $mysqli->real_escape_string($_POST['tel']);
$cell = $mysqli->real_escape_string($_POST['cell']);
$email = $mysqli->real_escape_string($_POST['email']);
$filiPai = $mysqli->real_escape_string($_POST['filiPai']);
$profPai = $mysqli->real_escape_string($_POST['profPai']);
$cpfPai = $mysqli->real_escape_string($_POST['cpfPai']);
$filiMae = $mysqli->real_escape_string($_POST['filiMae']);
$profMae = $mysqli->real_escape_string($_POST['profMae']);
$cpfMae = $mysqli->real_escape_string($_POST['cpfMae']);
// Dados Complementares
$transpEscolar = $mysqli->real_escape_string($_POST['transpEscolar']);
$nomeTransp = $mysqli->real_escape_string($_POST['nomeTransp']);
$bolsaFamilia = $mysqli->real_escape_string($_POST['bolsaFamilia']);
$niss = $mysqli->real_escape_string($_POST['numNiss']);
$deficiencia = $mysqli->real_escape_string($_POST['deficiencia']);
$avaliExternas = $mysqli->real_escape_string($_POST['avaliExternas']);

// SQL_CODE junto com a QUERY
$sql_code = "INSERT INTO `Trabalho Web`(id,usuario,senha,cep,rua,bairro,complemento,cidade,numResidencia,estado,nacionalidade,naturalidade,raca,telefone,celular,email,nomePai,profPai,cpfPai,nomeMae,profMae,cpfMae,transpEscolar,respTransporte,bolsaFamilia,niss,deficiencia,recursos) VALUES($id,$usuario,$senha,$cep,$address,$neighborhood,$complement,$city,$number,$region,$nationality,$naturalness,$raca,$tel,$cell,$email,$filiPai,$profPai,$cpfPai,$filiMae,$profMae,$cpfMae,$transpEscolar,$nomeTransp,$bolsaFamilia,$niss,$deficiencia,$avaliExternas); ";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução no banco de dados")



?>