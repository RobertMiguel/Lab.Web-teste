<?php
include('./protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Formulário socieconômico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Estilização da Página -->
    <link rel="stylesheet" href="style/form.css">
    <!-- Favicon EEEP Manoel Mano -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/eeepManoelMano.png">
    <!-- Script para as Mascaras -->
    <script src="js/jquery.min.js"></script>
    <script src="js/maskedinput.min.js"></script>
    <!-- Script para Bloquear Campos em Formulários -->
    <script src="js/preventDefault.js" defer></script>
</head>
<body>
    <section>
        <form method="POST">
                <div class="container px-4 pt-5 my-5">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <h2 class="display-4 fw-normal">Ficha da Matrícula</h2>
                    </div>
                    <hr class="border-secondary opacity-50 px-4 my-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control form-control-lg border-secondary" id="nome" name="nome" placeholder="Nome" require>
                        </div>
                        <div class="col-sm-4">
                            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control form-control-lg border-secondary" name="dataNascimento" id="dataNascimento" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="cpf" class="label-form">CPF</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="cpf" id="cpfAluno" placeholder="000.000.000-00" maxlength="11" require>
                        </div>
                    </div>
                </div>
                <div class="container px-4 pt-5 my-5">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <h2 class="display-4 fw-normal">Dados Adiconais do Aluno</h2>
                    </div>
                    <hr class="border-secondary opacity-50 opacity-50 px-4 my-5">
                    <div class="col-sm-4">
                        <label for="Sexo" class="form-label">Sexo</label>
                        <input type="text" class="form-control form-control-lg border-secondary" name="sexo" id="sexo" placeholder="M ou F" require>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="raca" class="form-label">Raça/Cor</label>
                            <input class="form-check-input" type="radio" name="branco" id="branco"> Branco
                            <input class="form-check-input" type="radio" name="preto" id="preto"> Preto
                            <input class="form-check-input" type="radio" name="pardo" id="pardo"> Pardo
                        </div>
                        <div class="col-sm-6">
                            <label for="outra">Outra</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="outra" id="outra"placeholder="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="nacionalidade" class="form-label">Nacionalidade</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="nacionalidade" id="nacionalidade" placeholder="Brazil" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="naturalidade" class="form-label">Naturalidade</label>
                            <input type="text" name="naturalidade" id="naturalidade" class="form-control form-control-lg border-secondary" placeholder="Região" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" id="endereco" class="form-control form-control-lg border-secondary" placeholder="Rua Vila Aviação" require>
                        </div>
                        <div class="col-sm-4">
                            <label for="endereco">N° do Endereço</label>
                            <input type="text" name="numeroEndereco" id="numeroEndereco" class="form-control form-control-lg border-secondary" placeholder="190" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="bairro" id="bairro" placeholder="Venancios" require>
                        </div>
                        <div class="col-sm-4">
                            <label for="municipio" class="form-label">Município</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="municipio" id="municipio" placeholder="Crateús" require>
                        </div>
                        <div class="col-sm-4">
                            <label for="municipio" class="form-label">CEP</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="cep" id="cep" placeholder="00000-000" maxlength="8" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="localizacao" class="form-label">Localização</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="localizacao" id="localizacao">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="telefoneResidencial" class="form-label">Telefone Residencial</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="telefoneResidencial" id="telefoneResidencial" placeholder="0000-0000" maxlength="8">
                        </div>
                        <div class="col-sm-6">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="celular" id="celular" placeholder="(00) 00000-0000" maxlength="11" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control form-control-lg border-secondary" name="email" id="email" placeholder="example@gmail.com" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="filiacaoPai" class="form-label">Filiação (Pai)</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="filiacaoPai" id="filiacaoPai" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cpfPai" class="form-label">CPF</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="cpfPai" id="cpfPai" placeholder="000.000.000-00" maxlength="11" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="profPai" class="form-label">Profissão</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="proPai" id="proPai" placeholder="Professor" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="filiacaoMãe" class="form-label">Filiação (Mãe)</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="filiacaoMae" id="filiacaoMae" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cpfMãe" class="form-label">CPF</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="cpfMae" id="cpfMae" placeholder="000.000.000-00" maxlength="11" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="profMãe" class="form-label">Profissão</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="proMãe" id="proMae" placeholder="Médica" require>
                        </div>
                    </div>
                </div>
                <div class="container px-4 pt-5 my-5">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <h2 class="display-4 fw-normal">Dados Complementares</h2>
                    </div>
                    <hr class="border-secondary opacity-50 opacity-50 px-4 my-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="transporteEscolar" class="form-label">Transporte Escolar</label>
                            <input class="form-check-input" type="radio" name="simTransp" id="simTransp"> Sim
                            <input class="form-check-input" type="radio" name="naoTransp" id="naoTransp"> Não
                        </div>
                        <div class="col-sm-6">
                            <label for="responsavelTransporte">Responsável pelo Transporte</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="responsavelTransporte" id="responsavelTransporte" placeholder="Nome do responsável">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="transporteEscolar" class="form-label">Bolsa Família</label>
                            <input class="form-check-input" type="radio" name="simBolsa" id="simBolsa"> Sim
                            <input class="form-check-input" type="radio" name="naoBolsa" id="naoBolsa"> Não
                        </div>
                        <div class="col-sm-6">
                            <label for="responsavelTransporte">N° do NIS</label>
                            <input type="text" class="form-control form-control-lg border-secondary" name="numeroNis" id="numeroNis" placeholder="0.000.000.000-0">
                        </div>
                    </div>
                </div>
        </form>
    </section>
           
    <!-- Máscaras -->
    <script>
        // Máscaras dos CPF's
        $("#cpfAluno").mask("999.999.999-99");
        $("#cpfPai").mask("999.999.999-99");
        $("#cpfMae").mask("999.999.999-99");

        // Telefone e Celular

        $("#telefoneResidencial").mask("9999-9999")
        $("#celular").mask("(99) 99999-9999")

        // Número do NIS

        $("#numeroNis").mask("9.999.999.999-9")

        // CEP's

        $("#cep").mask("99999-999")
    </script>
    <!-- Uppercase dos Campos Inputs -->
    <script src="js/uppercase.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>