<?php
 include("conexao.php");
 include("protect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Relatório</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/iconmm.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilização da Página -->
    <link rel="stylesheet" href="styles/form.css">
  </head>
  <body>
  
  <?php include("sidebar.php")?>

  <form action="">
    <div class="container mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
          <h2 class="h3 mb-0 text-gray-800 text-success font-weight-light">Ficha de Matrícula</h2>
          <p class="text-secondary">Documento preenchido pelos responsáveis do aluno, no instante de sua inscrição, com dados valiosos e úteis para o acompanhamento e o desenvolvimento do estudante.</p>
        </div>
          <div class="row mb-3">
            <div class="form-floating">
              <input type="text" class="form-control shadow-none" name="nomeAluno" id="none" placeholder="Nome do aluno" required>
              <label class="text-secondary" for="nomeAluno">Nome do aluno</label>
            </div>
          </div>
          <div class="row mb-3">
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <input type="text" class="form-control shadow-none" name="cpfAluno" id="cpfAluno" placeholder="000.000.000-00" maxlength="11" required>
            <label class="text-secondary" for="cpfAluno">CPF do Aluno</label>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <input type="date" class="form-control text-secondary shadow-none" name="dataNascimento" id="dataNascimento" required>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="curso" id="curso" required>
              <option value="CURSO" selected>Curso</option>
              <option value="ENFERMAGEM">ENFERMAGEM</option>
              <option value="INFORMÁTICA">INFORMÁTICA</option>
              <option value="ADMINISTRACÃO">ADMINISTRACÃO</option>
              <option value="COMÉRCIO">COMÉRCIO</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
            <h2 class="h3 mb-0 text-gray-800 text-success font-weight-light pb-3">Dados Adicionais</h2>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="sexo" id="sexo" required>
              <option selected>Sexo</option>
              <option value="MASCULINO">MASCULINO</option>
              <option value="FEMININO">FEMININO</option>
              <option value="OUTRO">OUTROS</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="raca" id="raca" required>
              <option selected>Raça</option>
              <option value="BRANCO">BRANCO</option>
              <option value="NEGRO">NEGRO</option>
              <option value="PARDO">PARDO</option>
              <option value="OUTRO">OUTRAS</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="nac" placeholder="Nacional." class="form-control shadow-none" id="nac" oninput="handleInput(event)" required>
            <label class="text-secondary" for="nac">Nacional.</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="nat" placeholder="Natural." class="form-control shadow-none" id="nat" oninput="handleInput(event)"required>
            <label class="text-secondary" for="nat">Natural.</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="loc" placeholder="Localiz." class="form-control shadow-none" id="loc" oninput="handleInput(event)" required>
            <label class="text-secondary" for="loc">Localiz.</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="cel" placeholder="Telefone" class="form-control shadow-none" id="cel" maxlength="11" oninput="mascarra('cel')" required>
            <label class="text-secondary" for="cel">Telefone</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="telpai" placeholder="Telefone" class="form-control shadow-none" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
            <label class="text-secondary" for="telpai">Celular</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="email" name="emailmae" placeholder="E-mail" class="form-control shadow-none" id="emailmae" required>
            <label for="emailmae" class="text-secondary">E-mail</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-6 mb-3 mb-sm-0">
            <input type="text" name="nomepai" placeholder="Nome do Pai" class="form-control shadow-none" id="nomepai" oninput="handleInput(event)" required>
            <label class="text-secondary" for="nomepai">Nome do Pai</label>
          </div>
          <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
            <input type="text" name="cpfpai" placeholder="N° do CPF" class="form-control shadow-none" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
            <label class="text-secondary" for="cpfpai">CPF</label>
          </div>
          <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
            <input type="text" name="telefonePai" placeholder="Celular" class="form-control shadow-none" id="telefonePai" maxlength="11" oninput="mascaraa('TelPai')" required>
            <label class="text-secondary" for="telefonePai">Celul.</label>
          </div>
          <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
            <input type="text" name="pf" placeholder="Profissão" class="form-control shadow-none" id="pf" oninput="handleInput(event)" required>
            <label for="pf" class="text-secondary">Prof.</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-6 mb-3 mb-sm-0">
              <input type="text" name="nomemae" placeholder="Nome do Mãe" class="form-control shadow-none" id="nomemae" oninput="handleInput(event)" required>
              <label class="text-secondary" for="nomemae">Nome do Mãe</label>
            </div>
            <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
              <input type="text" name="cpfMae" placeholder="N° do CPF" class="form-control shadow-none" id="cpfMae" maxlength="11" oninput="mascaraCP('CpfPai')" required>
              <label class="text-secondary" for="cpfMae">CPF</label>
            </div>
            <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
              <input type="text" name="telefoneMae" placeholder="Celular" class="form-control shadow-none" id="telefoneMae" maxlength="11" oninput="mascaraa('TelPai')" required>
              <label class="text-secondary" for="telefoneMae">Celul.</label>
            </div>
            <div class="form-floating col-12 col-sm-2 mb-3 mb-sm-0">
              <input type="text" name="pf2" placeholder="Profissão" class="form-control shadow-none" id="pf2" oninput="handleInput(event)" required>
              <label for="pf2" class="text-secondary">Prof</label>
            </div>
        </div>
      </div>
    </div>

    <div class="container mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
          <h2 class="h3 mb-0 text-gray-800 text-success font-weight-light pb-3">Dados Complementares</h2>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="transpEscolar" id="teun">
              <option selected>Transporte Escolar</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="dt" placeholder="Motorista" class="form-control shadow-none" id="dt" oninput="handleInput(event)">
            <label class="text-secondary" for="dt">Mororista</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="bolsaFamilia">
              <option selected>Bolsa Família</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="nis" placeholder="NISS" class="form-control shadow-none" id="nis" maxlength="14">
            <label class="text-secondary" for="nis">NISS</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-6 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="deficiencia" id="dsd"> 
                <option selected>Tipo de deficiência/TGD ou altas habilidades de superdotação</option>
                <option value="SIM">SIM</option>
                <option value="NÃO">NÃO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-6 mb-3 mb-sm-0">
            <input type="text" name="rec" placeholder="Recursos necessários para participação em avaliações externas" class="form-control shadow-none" id="rec" oninput="handleInput(event)">
            <label class="text-secondary" for="rec">Recursos Necessários</label>
          </div>
        </div>
        </div>
    </div>

    <!-- <div class="container mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
          <h2 class="h3 mb-0 text-gray-800 text-success font-weight-light pb-3">Detalhamento da Matrícula</h2>
        </div>

        <div class="row mb-3">

          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Ano Letivo</th>
                <th scope="col">Série/Turma</th>
                <th scope="col">Data de Matrícula</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <input type="year" name="anolet1" class="form-control form-control-sm" id="anolet1" maxlength="4">
                </td>
                <td>
                  <input type="text" name="turma1" class="form-control form-control-sm" id="turma1" maxlength="1">
                </td>
                <td>
                  <input type="date" name="datamt1" class="form-control text-secondary form-control-sm" id="datamt1">
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <input type="year" name="anolet2" class="form-control form-control-sm" id="anolet2" maxlength="4">
                </td>
                <td>
                  <input type="text" name="turma2" class="form-control form-control-sm" id="turma2" maxlength="1">
                </td>
                <td>
                  <input type="date" name="datamt2" class="form-control text-secondary form-control-sm" id="datamt2">
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>
                  <input type="year" name="anolet3" class="form-control form-control-sm" id="anolet3" maxlength="4">
                </td>
                <td>
                  <input type="text" name="turma3" class="form-control form-control-sm" id="turma3" maxlength="1">
                </td>
                <td>
                  <input type="date" name="datamt3" class="form-control text-secondary form-control-sm" id="datamt3">
                </td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>
    </div> -->

    <!-- <div class="container mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
          <h2 class="h3 mb-0 text-gray-800 text-success font-weight-light pb-3">Progressa Parcial</h2>
        </div>

        <div class="row mb-3">

          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Ano Letivo</th>
                <th scope="col">Série/Turma</th>
                <th scope="col">Data de Matrícula</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <input type="year" name="anolet1" class="form-control form-control-sm" id="anolet1" maxlength="4">
                </td>
                <td>
                  <input type="text" name="turma1" class="form-control form-control-sm" id="turma1" maxlength="1">
                </td>
                <td>
                  <input type="date" name="datamt1" class="form-control text-secondary form-control-sm" id="datamt1">
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <input type="year" name="anolet2" class="form-control form-control-sm" id="anolet2" maxlength="4">
                </td>
                <td>
                  <input type="text" name="turma2" class="form-control form-control-sm" id="turma2" maxlength="1">
                </td>
                <td>
                  <input type="date" name="datamt2" class="form-control text-secondary form-control-sm" id="datamt2">
                </td>
              </tr>
              <tr>
              <th scope="row">3</th>
              <td>
                <input type="year" name="anolet3" class="form-control form-control-sm" id="anolet3" maxlength="4">
              </td>
              <td>
                <input type="text" name="turma3" class="form-control form-control-sm" id="turma3" maxlength="1">
              </td>
              <td>
                <input type="date" name="datamt3" class="form-control text-secondary form-control-sm" id="datamt3">
              </td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>
    </div>   -->

    <div class="container border-start border-4 border-warning mt-4 px-md-0">
      <div class="order-form-container">
        <div class="form-header">
          <h2 class="h3 mb-0 text-gray-800 text-warning font-weight-light pb-3">Questionário Socioeconômico do Aluno</h2>
          <p class="text-secondary">O Questionário Socioeconômico do Aluno coleta dados sobre renda, moradia e recursos educacionais, fornecendo informações para ações de apoio e inclusão socioeconômica na educação.</p>
          <h3 class="h4 mb-0 text-gray-800 text-warning font-weight-light pb-3">Dados referentes aos pais ou responsáveis</h3>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="ipai" placeholder="Idade do Pai" class="form-control shadow-none" id="ipai" required>
            <label class="text-secondary" for="ipai">Idad. Pai</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="ppai" placeholder="Profissão do Pai" class="form-control shadow-none" id="ppai" oninput="handleInput(event)" required>
            <label class="text-secondary" for="ppai">Prof. Pai</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="escolPai" id="escol">
              <option selected>Escolaridade</option>
              <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
              <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
              <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
              <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
              <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
              <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="empPai" id="emp">
              <option selected>Está Empregado</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="imae" placeholder="Idade da Mãe" class="form-control shadow-none" id="imae" required>
            <label class="text-secondary" for="imae">Idad. Mãe</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="pmae" placeholder="Profissão da Mãe" class="form-control shadow-none" id="pmae" oninput="handleInput(event)" required>
            <label class="text-secondary" for="pmae">Prof. Mãe</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
          <select class="form-select text-secondary" name="escol2" id="escol2">
            <option selected>Escolaridade</option>
            <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
            <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
            <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
            <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
            <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
            <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
          </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="empMae" id="emmp2">
              <option selected>Está Empregado</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
        </div>
        <h3 class="h4 mb-0 text-gray-800 text-warning font-weight-light pb-3">Caso o aluno tenha outro responsável</h3>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <input type="text" name="ir" placeholder="Idade" class="form-control shadow-none" id="ir">
            <label class="text-secondary" for="ir">Idade</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
          <input type="text" name="pr" placeholder="Profissão" class="form-control shadow-none" id="pr" oninput="handleInput(event)">
          <label class="text-secondary" for="pr">Profissão</label>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="escol3" id="escol3">
              <option selected>Escolaridade</option>
              <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
              <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
              <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
              <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
              <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
              <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-3 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="emp3" id="emp3">
              <option selected>Está Empregado(a)</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
        </div>
        <h3 class="h4 mb-0 text-gray-800 text-warning font-weight-light pb-3">Dados referente a família</h3>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="mor" id="mor">
              <option selected>Modaria</option>
              <option value="PRÓPRIA">PRÓPRIA</option>
              <option value="ALUGADA">ALUGADA</option>
              <option value="OUTRA">OUTRA</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <input type="text" name="qi" placeholder="Quant. Irmãos" class="form-control shadow-none" id="qi" required>
            <label class="text-secondary" for="qi">Quant. Irmãos</label>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
           <input type="text" name="qp" placeholder="Quant. pessoas que residem" class="form-control shadow-none" id="qp" required>
           <label class="text-secondary" for="qp">Num. Membros</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="rms" id="rms">
              <option selected>Renda Mensal</option>
              <option value="MENOS DE 1 SALÁRIO MÍNIMO">MENOS DE 1 SALÁRIO MÍNIMO</option>
              <option value="DE 1 A 2 SALÁRIOS MÍNIMOS">DE 1 A 2 SALÁRIOS MÍNIMOS</option>
              <option value="DE 3 A 4 SALÁRIOS MÍNIMOS">DE 3 A 4 SALÁRIOS MÍNIMOS</option>
              <option value="DE 4 A 5 SALÁRIOS MÍNIMOS">DE 4 A 5 SALÁRIOS MÍNIMOS</option>
              <option value="MAIOR QUE 5 SALÁRIOS MÍNIMOS">MAIOR QUE 5 SALÁRIOS MÍNIMOS</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="am" id="am">
              <option selected>Composição Familiar</option>
              <option value="PAI">PAI</option>
              <option value="MÃE">MÃE</option>
              <option value="AMBOS">AMBOS</option>
              <option value="OUTROS">OUTROS</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="tc" id="tc">
              <option selected>Computador ao Acesso a Internet</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="bg" id="bg">
              <option selected>Benefício Governo</option>
              <option value="SIM">SIM</option>
              <option value="NÃO">NÃO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="te" id="te">
              <option selected>Transporte Escolar</option>
              <option value="A PÉ">A PÉ</option>
              <option value="BICICLETA">BICICLETA</option>
              <option value="TRANSPORTE COLETIVO">TRANSPORTE COLETIVO</option>
              <option value="TRANSPORTE PRÓPRIO">TRANSPORTE PRÓPRIO</option>
              <option value="TRANSPORTE ESCOLAR">TRANSPORTE ESCOLAR</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select text-secondary" name="cef" id="cef">
              <option selected>Concluiu o Ensino Fundamental</option>
              <option value="ESCOLA PÚBLICA">ESCOLA PÚBLICA</option>
              <option value="ESCOLAR PARTICULAR">ESCOLAR PARTICULAR</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">
            <select class="form-select" aria-label="Default select example" name="pqeep" id="pqeep">
            <option selected></option>
              <option value="É PERTO DA ESCOLA">É PERTO DA ESCOLA</option>
              <option value="PELA JORNADA INTEGRAL">PELA JORNADA INTEGRAL</option>
              <option value="PELO CURSO TÉCNICO">PELO CURSO TÉCNICO</option>
              <option value="PELA QUALIDADE DE ENSINO">PELA QUALIDADE DE ENSINO</option>
              <option value="PARA SE PREPARAR PARA VESTIBULARES">PARA SE PREPARAR PARA VESTIBULARES</option>
              <option value="PARA SE PREPARAR PARA JORNADA DE TRABALHO">PARA SE PREPARAR PARA JORNADA DE TRABALHO</option>
            </select>
          </div>
          <div class="form-floating col-12 col-sm-4 mb-3 mb-sm-0">

          </div>
        </div>
      </div>
    </div>

  </form>

  <!-- Script da Máscara -->
   <script src="./script/mask.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</script>
  </body>
</html>