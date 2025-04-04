<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel do Estabelecimento - SAMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Painel do Estabelecimento</span>
      <span class="text-light">Olá, Bar do Zé</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Resumo Geral</h3>

    <div class="row text-center mb-4">
      <div class="col-md-3">
        <div class="bg-primary text-white p-3 rounded shadow-sm">
          <h6>Arrecadação (Este mês)</h6>
          <h4>R$ 1.120,00</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-success text-white p-3 rounded shadow-sm">
          <h6>Créditos Utilizados</h6>
          <h4>224</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-warning text-dark p-3 rounded shadow-sm">
          <h6>Mesas Ativas</h6>
          <h4>2</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-info text-white p-3 rounded shadow-sm">
          <h6>Repasses Recebidos</h6>
          <h4>R$ 336,00</h4>
        </div>
      </div>
    </div>

    <h4 class="mb-3">Últimas Atividades</h4>
    <table class="table table-striped table-bordered bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>Data</th>
          <th>Mesa</th>
          <th>Ação</th>
          <th>Valor</th>
          <th>Forma de Pagamento</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>04/04/2025 14:30</td>
          <td>MESA001</td>
          <td>Crédito Inserido</td>
          <td>R$ 5,00</td>
          <td>PIX</td>
        </tr>
        <tr>
          <td>04/04/2025 13:50</td>
          <td>MESA002</td>
          <td>Partida Iniciada</td>
          <td>1 crédito</td>
          <td>Ficha</td>
        </tr>
        <tr>
          <td>04/04/2025 11:15</td>
          <td>MESA001</td>
          <td>Crédito Inserido</td>
          <td>R$ 10,00</td>
          <td>Cédula</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
