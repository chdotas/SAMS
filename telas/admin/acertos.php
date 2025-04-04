<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Acertos Financeiros - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Acertos Financeiros</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Histórico de Acertos com Estabelecimentos</h3>

    <form class="row g-3 bg-white p-3 rounded shadow-sm mb-4">
      <div class="col-md-3">
        <label class="form-label">Estabelecimento</label>
        <select class="form-select">
          <option selected>Todos</option>
          <option>Bar do Zé</option>
          <option>Bilhar da Esquina</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label">Data Inicial</label>
        <input type="date" class="form-control" />
      </div>
      <div class="col-md-3">
        <label class="form-label">Data Final</label>
        <input type="date" class="form-control" />
      </div>
      <div class="col-md-3 align-self-end">
        <button class="btn btn-primary w-100">Filtrar</button>
      </div>
    </form>

    <table class="table table-bordered table-striped bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>Data</th>
          <th>Estabelecimento</th>
          <th>Valor Total</th>
          <th>Comissão</th>
          <th>Valor Repasse</th>
          <th>Status</th>
          <th>Comprovante</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>04/04/2025</td>
          <td>Bar do Zé</td>
          <td>R$ 520,00</td>
          <td>40%</td>
          <td>R$ 208,00</td>
          <td><span class="badge bg-success">Pago</span></td>
          <td><a href="#">📄 PDF</a></td>
          <td>
            <button class="btn btn-sm btn-outline-secondary">Ver Detalhes</button>
          </td>
        </tr>
        <tr>
          <td>03/04/2025</td>
          <td>Bilhar da Esquina</td>
          <td>R$ 700,00</td>
          <td>35%</td>
          <td>R$ 245,00</td>
          <td><span class="badge bg-danger">Pendente</span></td>
          <td>-</td>
          <td>
            <button class="btn btn-sm btn-success">Marcar como Pago</button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="text-end mt-3">
      <button class="btn btn-outline-primary">Exportar Excel</button>
    </div>
  </div>

</body>
</html>
