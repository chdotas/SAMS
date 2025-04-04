<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Painel Administrativo</span>
    </div>
  </nav>

  <div class="container">
    <h2 class="mb-4">Dashboard Geral</h2>

    <div class="row g-4">
      <div class="col-md-3">
        <div class="card text-bg-success shadow">
          <div class="card-body">
            <h5 class="card-title">Mesas Ativas</h5>
            <p class="card-text fs-4">12</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-warning shadow">
          <div class="card-body">
            <h5 class="card-title">Conexões Offline</h5>
            <p class="card-text fs-4">2</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-primary shadow">
          <div class="card-body">
            <h5 class="card-title">Total Arrecadado (Hoje)</h5>
            <p class="card-text fs-4">R$ 324,00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-danger shadow">
          <div class="card-body">
            <h5 class="card-title">Alertas de Bateria</h5>
            <p class="card-text fs-4">1</p>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-4">

    <div class="row">
      <div class="col-md-6">
        <h5>Status das Mesas</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between">
            Mesa 01 <span class="badge bg-success">Online</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            Mesa 02 <span class="badge bg-warning text-dark">Offline</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            Mesa 03 <span class="badge bg-success">Online</span>
          </li>
        </ul>
      </div>

      <div class="col-md-6">
        <h5>Últimos Pagamentos</h5>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Mesa</th>
              <th>Valor</th>
              <th>Forma</th>
              <th>Horário</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mesa 01</td>
              <td>R$ 5,00</td>
              <td>PIX</td>
              <td>13:45</td>
            </tr>
            <tr>
              <td>Mesa 03</td>
              <td>R$ 5,00</td>
              <td>Ficha</td>
              <td>13:38</td>
            </tr>
            <tr>
              <td>Mesa 02</td>
              <td>R$ 10,00</td>
              <td>Cédula</td>
              <td>12:50</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</body>
</html>
