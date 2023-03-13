<?php
include('protect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Formulário socieconômico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Estilização da página -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <div class="col-lg-8 col-md-8 mx-auto">
            <h2 class="display-4 fw-normal">Ficha da Matrícula</h2>
        </div>
        <form method="POST">
            <div class="container text-center">
            <hr class="border-secondary opacity-50">
                <div class="row">
                    <div class="col-sm-8">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="col-sm-4">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" id="dataNascimento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="cpf" class="label-form">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-8 col-md-8 mx-auto">
                    <h2 class="display-4 fw-normal">Dados Adiconais do Aluno</h2>
                </div>
                <hr class="border-secondary opacity-50">
                <div class="col-sm-4">
                    <label for="Sexo" class="form-label">Sexo</label>
                    <input type="text" class="form-control" name="sexo" id="sexo" placeholder="M ou F">
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
                        <input type="text" class="form-control" name="outra" id="outra"placeholder="...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="nacionalidade" class="form-label">Nacionalidade</label>
                        <input type="text" class="form-control" name="nacionalidade" id="nacionalidade" placeholder="Brazil">
                    </div>
                    <div class="col-sm-6">
                        <label for="naturalidade" class="form-label">Naturalidade</label>
                        <input type="text" name="naturalidade" id="naturalidade" class="form-control" placeholder="Região">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Rua Vila Aviação, 190">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Venancios">
                    </div>
                    <div class="col-sm-4">
                        <label for="municipio" class="form-label">Município</label>
                        <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Crateús">
                    </div>
                    <div class="col-sm-4">
                        <label for="municipio" class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="localizacao" class="form-label">Localização</label>
                        <input type="text" class="form-control" name="localizacao" id="localizacao">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="telefoneResidencial" class="form-label">Telefone Residencial</label>
                        <input type="text" class="form-control" name="telefoneResidencial" id="telefoneResidencial" placeholder="0000-0000">
                    </div>
                    <div class="col-sm-6">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="filiacaoPai" class="form-label">Filiação (Pai)</label>
                        <input type="text" class="form-control" name="filiacaoPai" id="filiacaoPai">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="cpfPai" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpfPai" id="form-control" placeholder="000.000.000-00">
                    </div>
                    <div class="col-sm-6">
                        <label for="profPai" class="form-label">Profissão</label>
                        <input type="text" class="form-control" name="proPai" id="proPai" placeholder="Professor">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="filiacaoMãe" class="form-label">Filiação (Mãe)</label>
                        <input type="text" class="form-control" name="filiacaoMae" id="filiacaoMae">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="cpfMãe" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpfMae" id="form-control" placeholder="000.000.000-00">
                    </div>
                    <div class="col-sm-6">
                        <label for="profMãe" class="form-label">Profissão</label>
                        <input type="text" class="form-control" name="proMãe" id="proMae" placeholder="Médica">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-8 col-md-8 mx-auto">
                    <h2 class="display-4 fw-normal">Dados Complementares</h2>
                </div>
                <hr class="border-secondary opacity-50">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="transporteEscolar" class="form-label">Transporte Escolar</label>
                        <input class="form-check-input" type="radio" name="simTransp" id="simTransp"> Sim
                        <input class="form-check-input" type="radio" name="naoTransp" id="naoTransp"> Não
                    </div>
                    <div class="col-sm-6">
                        <label for="responsavelTransporte">Responsável pelo Transporte</label>
                        <input type="text" class="form-control" name="responsavelTransporte" id="responsavelTransporte" placeholder="Nome do responsável">
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
                        <input type="text" class="form-control" name="responsavelTransporte" id="responsavelTransporte" placeholder="0.000.000.000-0">
                    </div>
                </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>