<?php

include('conexao.php');

if (isset($_POST['cadastrar'])) {

    // Dados Gerenciais do Banco
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senha =($_POST['senha']);
    // Dados Adicionais do Aluno
    $cep = $_POST['cep'];
    $address = $_POST['address'];
    $complement = $_POST['complement'];
    $neighborhood = $_POST['neighborhood'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $region = $_POST['region'];
    // $naturalidade = ($_POST['naturalness']);
    $nationality = $_POST['nationality'];
    $naturalness = $_POST['naturalness'];
    $raca = $_POST['raca'];
    $tel = $_POST['tel'];
    $cell = $_POST['cell'];
    $email = $_POST['email'];
    $filiPai = $_POST['filiPai'];
    $profPai = $_POST['profPai'];
    $cpfPai = $_POST['cpfPai'];
    $filiMae = $_POST['filiMae'];
    $profMae = $_POST['profMae'];
    $cpfMae = ($_POST['cpfMae']);
    // Dados Complementares
    $transpEscolar = $_POST['transpEscolar'];
    $nomeTransp = $_POST['nomeTransp'];
    $bolsaFamilia = $_POST['bolsaFamilia'];
    $niss = $_POST['niss'];
    $deficiencia = $_POST['deficiencia'];
    $avaliExternas = $_POST['avaliExternas'];

    $sql_code = "INSERT INTO `Trabalho Web`(id,usuario,senha,cep,rua,bairro,complemento,cidade,numResidencia,estado,nacionalidade,naturalidade,raca,telefone,celular,email,nomePai,profPai,cpfPai,nomeMae,profMae,cpfMae,transpEscolar,respTransporte,bolsaFamilia,niss,deficiencia,recursos) VALUES('$id','$usuario','$senha','$cep','$address','$neighborhood','$complement','$city','$number','$region','$nationality','$naturalness','$raca','$tel','$cell','$email','$filiPai','$profPai','$cpfPai','$filiMae','$profMae','$cpfMae','$transpEscolar','$nomeTransp','$bolsaFamilia','$niss','$deficiencia','$avaliExternas'); ";

    $sql_query = mysqli_query($mysqli,$sql_code);
    
}


// SQL_CODE junto com a QUERY
// $sql_code = "INSERT INTO `Trabalho Web`(id,usuario,senha,cep,rua,bairro,complemento,cidade,numResidencia,estado,nacionalidade,naturalidade,raca,telefone,celular,email,nomePai,profPai,cpfPai,nomeMae,profMae,cpfMae,transpEscolar,respTransporte,bolsaFamilia,niss,deficiencia,recursos) VALUES($id,$usuario,$senha,$cep,$address,$neighborhood,$complement,$city,$number,$region,$nationality,$naturalness,$raca,$tel,$cell,$email,$filiPai,$profPai,$cpfPai,$filiMae,$profMae,$cpfMae,$transpEscolar,$nomeTransp,$bolsaFamilia,$niss,$deficiencia,$avaliExternas); ";
// $sql_query = mysqli_query($mysqli,$sql_code) or die("Falha na execução no banco de dados")

?>