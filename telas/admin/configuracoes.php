<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Configurações das Mesas - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Configurações por Mesa</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Configurações Individuais das Mesas</h3>

    <!-- Exemplo de formulário por mesa -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-primary text-white">
        <strong>MESA001 – Bar do Zé</strong>
      </div>
      <form class="card-body">
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Valor por Crédito (R$)</label>
            <input type="number" step="0.01" class="form-control" value="5.00">
          </div>
          <div class="col-md-3">
            <label class="form-label">Tempo por Partida (min)</label>
            <input type="number" class="form-control" value="15">
          </div>
          <div class="col-md-3">
            <label class="form-label">Volume do Buzzer</label>
            <select class="form-select">
              <option>Desligado</option>
              <option>Baixo</option>
              <option selected>Médio</option>
              <option>Alto</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Modo de Economia</label>
            <select class="form-select">
              <option selected>Deep Sleep após 5 min</option>
              <option>Deep Sleep após 10 min</option>
              <option>Desligar Display</option>
              <option>Sem economia</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Sensibilidade Moedeiro</label>
            <input type="range" class="form-range" min="1" max="10" value="7">
          </div>
          <div class="col-md-3">
            <label class="form-label">Sensibilidade Noteiro</label>
            <input type="range" class="form-range" min="1" max="10" value="6">
          </div>
        </div>

        <div class="text-end mt-3">
          <button class="btn btn-success">Salvar Configurações</button>
        </div>
      </form>
    </div>

    <!-- Outra mesa -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-secondary text-white">
        <strong>MESA002 – Bilhar da Esquina</strong>
      </div>
      <form class="card-body">
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Valor por Crédito (R$)</label>
            <input type="number" step="0.01" class="form-control" value="4.00">
          </div>
          <div class="col-md-3">
            <label class="form-label">Tempo por Partida (min)</label>
            <input type="number" class="form-control" value="12">
          </div>
          <div class="col-md-3">
            <label class="form-label">Volume do Buzzer</label>
            <select class="form-select">
              <option>Desligado</option>
              <option selected>Baixo</option>
              <option>Médio</option>
              <option>Alto</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Modo de Economia</label>
            <select class="form-select">
              <option>Deep Sleep após 5 min</option>
              <option selected>Deep Sleep após 10 min</option>
              <option>Desligar Display</option>
              <option>Sem economia</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Sensibilidade Moedeiro</label>
            <input type="range" class="form-range" min="1" max="10" value="8">
          </div>
          <div class="col-md-3">
            <label class="form-label">Sensibilidade Noteiro</label>
            <input type="range" class="form-range" min="1" max="10" value="5">
          </div>
        </div>

        <div class="text-end mt-3">
          <button class="btn btn-success">Salvar Configurações</button>
        </div>
      </form>
    </div>

  </div>

</body>
</html>
