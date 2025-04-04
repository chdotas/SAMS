<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Minhas Mesas - SAMS Parceiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Minhas Mesas</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Mesas Instaladas</h3>

    <table class="table table-bordered table-hover bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>ID da Mesa</th>
          <th>Status</th>
          <th>Conexão</th>
          <th>Bateria</th>
          <th>Saldo</th>
          <th>Contador</th>
          <th>Último Uso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>MESA001</td>
          <td><span class="badge bg-success">Liberada</span></td>
          <td><span class="badge bg-success">Online</span></td>
          <td>92%</td>
          <td>3 créditos</td>
          <td>158 partidas</td>
          <td>Hoje às 14:30</td>
        </tr>
        <tr>
          <td>MESA002</td>
          <td><span class="badge bg-danger">Bloqueada</span></td>
          <td><span class="badge bg-warning text-dark">Offline</span></td>
          <td>61%</td>
          <td>0 créditos</td>
          <td>204 partidas</td>
          <td>Ontem às 22:10</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
