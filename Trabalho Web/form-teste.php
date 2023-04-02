<?php
include('processa.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Test</title>
    <!-- Estilização da página -->
    <link rel="stylesheet" href="style/form-teste02.css">
    <!-- Bootstrap -->
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Script Buscar CEP -->
    <script src="js/searchCep.js" defer></script>
    <!-- Script para as Mascaras -->
    <script src="js/jquery.min.js"></script>
    <script src="js/maskedinput.min.js"></script>
  </head>
  <body id="checkout-page">
    <div id="order-form-container" class="container p-6 my-md-4 px-md-0">        
        <form id="address-form" method="POST" action="processa.php">
        <div id="form-header">
            <h2>Dados Gerenciais do Banco</h2>
            <p>Dados para identificar o aluno ao banco</p>
            <hr>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-4 form-floating">
            <input 
            type="text"
            class="form-control shadow-none"
            id="id"
            name="id"
            placeholder="ID"
            require
            />
            <label for="id">ID</label>
          </div>
          <div class="col-12 col-sm-4 form-floating">
            <input 
            type="text"
            class="form-control shadow-none"
            id="usuario"
            name="usuario"
            placeholder="Nome de Usuário"
            require
            />
            <label for="usuario">Nome de Usuário</label>
          </div>
          <div class="col-12 col-sm-4 form-floating">
            <input 
            type="text"
            class="form-control shadow-none"
            id="senha"
            name="senha"
            placeholder="Senha"
            require
            />
            <label for="senha">Senha</label>
          </div>
        </div>
        <div id="form-header">
            <h2>Dados Adicionais do Aluno</h2>
            <p>Preencha os campos para realização de dados adicionais</p>
            <hr>
        </div>
        <div class="row mb-3">
          <div class="form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="cep"
              name="cep"
              placeholder="Digite o seu CEP"
              maxlength="8"
              minlength="8"
              required
            />
            <label for="cep">Digite o seu CEP</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="address"
              name="address"
              placeholder="Rua"
              disabled
              required
              data-input
            />
            <label for="address">Rua</label>
          </div>
          <div class="col-12 col-sm-6 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="number"
              name="number"
              placeholder="Digite o número da residência"
              disabled
              required
              data-input
            />
            <label for="number">Digite o número da residência</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="complement"
              name="complement"
              placeholder="Digite o complemento"
              disabled
              data-input
            />
            <label for="complement">Digite o complemento</label>
          </div>
          <div class="col-12 col-sm-6 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="neighborhood"
              name="neighborhood"
              placeholder="Bairro"
              disabled
              required
              data-input
            />
            <label for="neighborhood">Bairro</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="city"
              name="city"
              placeholder="Cidade"
              disabled
              required
              data-input
            />
            <label for="city">Cidade</label>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <select
              class="form-select shadow-none"
              name="region"
              id="region"
              disabled
              required
              data-input
            >
              <option selected>Estado</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <input type="text" 
                    class="form-control shadow-none"
                    name="naturalness" 
                    id="naturalness"
                    placeholder="Digite sua naturalidade"
                    required
                />
                <label for="naturalness">Digite sua naturalidade</label>
            </div>
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <input type="text" 
                    class="form-control shadow-none"
                    name="nationality" 
                    id="nationality"
                    placeholder="Digite sua naturalidade"
                    required
                />
                <label for="nationality">Digite sua nacionalidade</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <select 
                name="raca" 
                id="raca" 
                class="form-select shadow-none"
                >
                <option selected>Raça</option>
                <option value="Preto">Preto</option>
                <option value="Pardo">Pardo</option>
                <option value="Branco">Branco</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <input type="text" 
                    class="form-control shadow-none"
                    name="outra" 
                    id="outra"
                    placeholder="Outra"
                    required
                />
                <label for="outra">Outra</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <input type="text" 
                    class="form-control shadow-none"
                    name="tel" 
                    id="tel"
                    placeholder="Digite sua telefone"
                />
                <label for="tel">Digite sua telefone</label>
            </div>
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                <input type="text" 
                    class="form-control shadow-none"
                    name="cell" 
                    id="cell"
                    placeholder="Digite seu número"
                    required
                />
                <label for="cell">Digite seu número</label>
            </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating">
            <input
              type="email"
              class="form-control shadow-none"
              id="email"
              name="email"
              placeholder="Digite o seu e-mail"
              required
            />
            <label for="email">Digite o seu e-mail</label>
          </div>
        </div>
        <div class="row mb-3">
            <div class="form-floating">
                <input 
                type="text"
                class="form-control shadow-none"
                id="filiPai"
                name="filiPai"
                placeholder="Filiação (Pai)"
                required
                />
                <label for="filiPai">Filiação (Pai)</label>
            </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="profPai"
              name="profPai"
              placeholder="Profissão (Pai)"
              required
            />
            <label for="profPai">Profissão (Pai)</label>
          </div>
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="cpfPai"
              name="cpfPai"
              placeholder="CPF (Pai)"
              required
            />
            <label for="cpfPai">CPF (Pai)</label>
          </div>
        </div>
        <div class="row mb-3">
            <div class="form-floating">
                <input 
                type="text"
                class="form-control shadow-none"
                id="filiMae"
                name="filiMae"
                placeholder="Filiação (Mae)"
                required
                />
                <label for="filiMae">Filiação (Mae)</label>
            </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="profMae"
              name="profMae"
              placeholder="Profissão (Mae)"
              required
            />
            <label for="profMae">Profissão (Mae)</label>
          </div>
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="cpfMae"
              name="cpfMae"
              placeholder="CPF (Mãe)"
              required
            />
            <label for="cpfMae">CPF (Mãe)</label>
          </div>
        </div>
        <div id="form-header">
            <h2>Dados Complementares</h2>
            <p>Preencha o formulário com informações secundárias ao aluno</p>
            <hr>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <p>Transporte Escolar</p>
                <select 
                name="transpEscolar" 
                id="transpEscolar" 
                class="form-select shadow-none"
                >
                <option selected>Selecione</option>
                <option value="util">Utiliza</option>
                <option value="naoUtil">Não Utiliza</option>
                </select>
          </div>
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
              <p>Tipo de deficiência/TGD ou altas habilidades super dotação</p>
                <select 
                name="deficiencia" 
                id="deficiencia" 
                class="form-select shadow-none"
                >
                  <option selected>Selecione</option>
                  <option value="possui">Possui</option>
                  <option value="naoPossui">Não Possui</option>
                </select>
            </div>
        </div>
          <div class="row mb-3">
            <div class="form-floating">
                <input 
                type="text"
                class="form-control shadow-none"
                id="nomeTransp"
                name="nomeTransp"
                placeholder="Nome do Responsável"
                required
                />
                <label for="nomeTransp">Nome do Responsável</label>
            </div>
          </div>
          <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <p>Bolsa Família</p>
                <select 
                name="bolsaFamilia" 
                id="bolsaFamilia" 
                class="form-select shadow-none"
                >
                <option selected>Selecione</option>
                <option value="bolsaSim">Recebe</option>
                <option value="bolsaNao">Não Recebe</option>
                </select>
          </div>
            <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
              <p>Número do NISS</p>
              <!-- <p>Número do NISS</p>
                <select 
                name="numNiss" 
                id="numNiss" 
                class="form-select shadow-none"
                >
                  <option selected>Selecione</option>
                  <option value="nissSim">Possui</option>
                  <option value="nissNao">Não Possui</option>
                </select> -->
                <div class="form-floating">
                  <input 
                  type="text"
                  class="form-control shadow-none"
                  id="niss"
                  name="niss"
                  placeholder="Número do NISS"
                  required
                  />
                  <label for="niss">Número do NISS</label>
              </div>

            </div>
        </div>
          <div class="row mb-3">
            <p>Recursos necessários para participação em avaliações externas</p>
            <div class="form-floating">
                <input 
                type="text"
                class="form-control shadow-none"
                id="avaliExternas"
                name="avaliExternas"
                placeholder="Documentos de identidade"
                required
                />
                <label for="avaliExternas">Documentos de identidade</label>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-12 col-sm-6 mb-3 mb-md-0 text-center mx-auto"">
                <button name="cadastrar" class="btn btn-success">Enviar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- Script Masks -->
    <!-- <script>
        $("#cpfPai").mask("000.000.000-00")
        $("#cpfMae").mask("000.000.000-00")
        $("#cep").mask("00000-000")
    </script> -->
  </body>
</html>
