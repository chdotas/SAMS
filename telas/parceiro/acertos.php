<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Repasses Recebidos - SAMS Parceiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Repasses Recebidos</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Histórico de Acertos</h3>

    <table class="table table-bordered table-striped bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>Data do Repasse</th>
          <th>Período</th>
          <th>Valor Total</th>
          <th>Comissão</th>
          <th>Recebido</th>
          <th>Status</th>
          <th>Comprovante</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>04/04/2025</td>
          <td>01/04 a 03/04</td>
          <td>R$ 680,00</td>
          <td>40%</td>
          <td>R$ 272,00</td>
          <td><span class="badge bg-success">Pago</span></td>
          <td><a href="#">📄 Ver PDF</a></td>
        </tr>
        <tr>
          <td>27/03/2025</td>
          <td>20/03 a 26/03</td>
          <td>R$ 520,00</td>
          <td>40%</td>
          <td>R$ 208,00</td>
          <td><span class="badge bg-success">Pago</span></td>
          <td><a href="#">📄 Ver PDF</a></td>
        </tr>
        <tr>
          <td>20/03/2025</td>
          <td>13/03 a 19/03</td>
          <td>R$ 410,00</td>
          <td>40%</td>
          <td>R$ 164,00</td>
          <td><span class="badge bg-danger">Pendente</span></td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
