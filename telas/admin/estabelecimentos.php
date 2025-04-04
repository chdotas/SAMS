<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Estabelecimentos - SAMS Admin</title>
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
      <h2>Estabelecimentos Parceiros</h2>
      <a href="estab_novo.php" class="btn btn-success">+ Novo Estabelecimento</a>
    </div>

    <table class="table table-bordered table-hover bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome do Local</th>
          <th>Responsável</th>
          <th>Telefone</th>
          <th>Localização</th>
          <th>Qtd. de Mesas</th>
          <th>Último Repasse</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>EST001</td>
          <td>Bar do Zé</td>
          <td>José da Silva</td>
          <td>(11) 91234-5678</td>
          <td>São Paulo - SP</td>
          <td>2</td>
          <td>R$ 350,00 em 03/04/2025</td>
          <td>
            <a href="estab_detalhe.php?id=EST001" class="btn btn-sm btn-primary">Ver</a>
            <a href="acertos.php?estab=EST001" class="btn btn-sm btn-outline-secondary">Acertos</a>
          </td>
        </tr>
        <tr>
          <td>EST002</td>
          <td>Bilhar da Esquina</td>
          <td>Paulo Lima</td>
          <td>(21) 99876-1234</td>
          <td>Rio de Janeiro - RJ</td>
          <td>3</td>
          <td>R$ 485,00 em 02/04/2025</td>
          <td>
            <a href="estab_detalhe.php?id=EST002" class="btn btn-sm btn-primary">Ver</a>
            <a href="acertos.php?estab=EST002" class="btn btn-sm btn-outline-secondary">Acertos</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
