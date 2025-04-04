<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Solicitar Suporte - SAMS Parceiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Suporte Técnico</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Solicitar Suporte</h3>

    <form class="bg-white p-4 rounded shadow-sm mb-5">
      <div class="mb-3">
        <label class="form-label">Mesa</label>
        <select class="form-select">
          <option selected>Selecione...</option>
          <option>MESA001</option>
          <option>MESA002</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Tipo de Problema</label>
        <select class="form-select">
          <option selected>Selecione...</option>
          <option>Problema no display</option>
          <option>Não libera a gaveta</option>
          <option>Erro no crédito</option>
          <option>Outro</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Descrição Detalhada</label>
        <textarea class="form-control" rows="4" placeholder="Descreva o problema com detalhes..."></textarea>
      </div>
      <div class="text-end">
        <button class="btn btn-primary">Enviar Solicitação</button>
      </div>
    </form>

    <h4 class="mb-3">Histórico de Chamados</h4>
    <table class="table table-striped table-bordered shadow-sm bg-white">
      <thead class="table-dark">
        <tr>
          <th>Data</th>
          <th>Mesa</th>
          <th>Problema</th>
          <th>Status</th>
          <th>Resposta</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>03/04/2025</td>
          <td>MESA001</td>
          <td>Não libera a gaveta</td>
          <td><span class="badge bg-warning text-dark">Em análise</span></td>
          <td>-</td>
        </tr>
        <tr>
          <td>28/03/2025</td>
          <td>MESA002</td>
          <td>Erro no crédito</td>
          <td><span class="badge bg-success">Resolvido</span></td>
          <td>Atualizamos o firmware remotamente</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
