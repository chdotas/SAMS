<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Nova Mesa - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a href="mesas.php" class="btn btn-outline-light btn-sm">← Voltar</a>
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Nova Mesa</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Cadastrar Nova Mesa</h3>

    <form class="bg-white p-4 rounded shadow-sm" method="post" action="salvar_mesa.php">
      <div class="row g-3">
        <!-- Dados básicos -->
        <div class="col-md-4">
          <label class="form-label">ID da Mesa (Ex: MESA004)</label>
          <input type="text" name="id" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Estabelecimento</label>
          <select name="estabelecimento" class="form-select" required>
            <option selected disabled>Selecione...</option>
            <option value="1">Bar do Zé</option>
            <option value="2">Bilhar da Esquina</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Localização (Cidade/UF)</label>
          <input type="text" name="localizacao" class="form-control" required>
        </div>

        <!-- Configurações iniciais -->
        <div class="col-md-3">
          <label class="form-label">Valor por Crédito (R$)</label>
          <input type="number" step="0.01" name="valor_credito" class="form-control" value="5.00">
        </div>
        <div class="col-md-3">
          <label class="form-label">Tempo por Partida (min)</label>
          <input type="number" name="tempo_partida" class="form-control" value="15">
        </div>
        <div class="col-md-3">
          <label class="form-label">Volume do Buzzer</label>
          <select name="volume_buzzer" class="form-select">
            <option>Desligado</option>
            <option>Baixo</option>
            <option selected>Médio</option>
            <option>Alto</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Modo Economia</label>
          <select name="modo_eco" class="form-select">
            <option selected>Deep Sleep após 5 min</option>
            <option>Deep Sleep após 10 min</option>
            <option>Desligar Display</option>
            <option>Sem economia</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Sensibilidade Moedeiro</label>
          <input type="range" name="sens_moedeiro" class="form-range" min="1" max="10" value="7">
        </div>
        <div class="col-md-3">
          <label class="form-label">Sensibilidade Noteiro</label>
          <input type="range" name="sens_noteiro" class="form-range" min="1" max="10" value="6">
        </div>
      </div>

      <div class="text-end mt-4">
        <button type="submit" class="btn btn-success">Salvar Mesa</button>
      </div>
    </form>
  </div>

</body>
</html>
