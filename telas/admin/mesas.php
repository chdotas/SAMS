<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Gerenciar Mesas - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Administração</span>
    </div>
  </nav>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Mesas Cadastradas</h2>
      <a href="mesa_nova.php" class="btn btn-success">+ Nova Mesa</a>
    </div>

    <table class="table table-bordered table-hover bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Estabelecimento</th>
          <th>Status</th>
          <th>Conexão</th>
          <th>Bateria</th>
          <th>Saldo</th>
          <th>Contador</th>
          <th>Último Uso</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>MESA001</td>
          <td>Bar do Zé</td>
          <td><span class="badge bg-success">Liberada</span></td>
          <td><span class="badge bg-success">Online</span></td>
          <td>92%</td>
          <td>3 créditos</td>
          <td>158 partidas</td>
          <td>Hoje às 14:30</td>
          <td>
            <a href="mesa_detalhe.php?id=MESA001" class="btn btn-sm btn-primary">Ver</a>
            <button class="btn btn-sm btn-warning">Bloquear</button>
          </td>
        </tr>
        <tr>
          <td>MESA002</td>
          <td>Bilhar da Esquina</td>
          <td><span class="badge bg-danger">Bloqueada</span></td>
          <td><span class="badge bg-warning text-dark">Offline</span></td>
          <td>61%</td>
          <td>0 créditos</td>
          <td>204 partidas</td>
          <td>Ontem às 22:10</td>
          <td>
            <a href="mesa_detalhe.php?id=MESA002" class="btn btn-sm btn-primary">Ver</a>
            <button class="btn btn-sm btn-success">Desbloquear</button>
          </td>
        </tr>
        <tr>
          <td>MESA003</td>
          <td>Bar do João</td>
          <td><span class="badge bg-success">Liberada</span></td>
          <td><span class="badge bg-success">Online</span></td>
          <td>75%</td>
          <td>1 crédito</td>
          <td>89 partidas</td>
          <td>Hoje às 12:05</td>
          <td>
            <a href="mesa_detalhe.php?id=MESA003" class="btn btn-sm btn-primary">Ver</a>
            <button class="btn btn-sm btn-warning">Bloquear</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
