<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Suporte Técnico - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Central de Suporte</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Chamados Técnicos</h3>

    <form class="row g-3 bg-white p-3 rounded shadow-sm mb-4">
      <div class="col-md-4">
        <label class="form-label">Estabelecimento</label>
        <select class="form-select">
          <option selected>Todos</option>
          <option>Bar do Zé</option>
          <option>Bilhar da Esquina</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">Status</label>
        <select class="form-select">
          <option selected>Todos</option>
          <option>Em análise</option>
          <option>Resolvido</option>
          <option>Pendente</option>
        </select>
      </div>
      <div class="col-md-4 align-self-end">
        <button class="btn btn-primary w-100">Filtrar</button>
      </div>
    </form>

    <table class="table table-striped table-bordered shadow-sm bg-white">
      <thead class="table-dark">
        <tr>
          <th>Data</th>
          <th>Estabelecimento</th>
          <th>Mesa</th>
          <th>Problema</th>
          <th>Status</th>
          <th>Resposta</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>04/04/2025</td>
          <td>Bar do Zé</td>
          <td>MESA001</td>
          <td>Não libera a gaveta</td>
          <td><span class="badge bg-warning text-dark">Em análise</span></td>
          <td>-</td>
          <td>
            <button class="btn btn-sm btn-outline-primary" onclick="responder()">Responder</button>
            <button class="btn btn-sm btn-success">Marcar como Resolvido</button>
          </td>
        </tr>
        <tr>
          <td>03/04/2025</td>
          <td>Bilhar da Esquina</td>
          <td>MESA002</td>
          <td>Erro no crédito</td>
          <td><span class="badge bg-success">Resolvido</span></td>
          <td>Foi feita atualização remota</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal de Resposta -->
  <div class="modal fade" id="modalResposta" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title">Responder Chamado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Resposta Técnica</label>
              <textarea class="form-control" rows="4" placeholder="Informe a resposta ao parceiro..."></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enviar Resposta</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (para modal) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function responder() {
      const modal = new bootstrap.Modal(document.getElementById('modalResposta'));
      modal.show();
    }
  </script>

</body>
</html>
