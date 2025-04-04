<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Relatórios - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Relatórios</span>
    </div>
  </nav>

  <div class="container mb-5">
    <h3 class="mb-4">Filtros</h3>
    <form class="row g-3 bg-white p-3 rounded shadow-sm mb-4">
      <div class="col-md-3">
        <label for="inicio" class="form-label">Data Início</label>
        <input type="date" class="form-control" id="inicio">
      </div>
      <div class="col-md-3">
        <label for="fim" class="form-label">Data Fim</label>
        <input type="date" class="form-control" id="fim">
      </div>
      <div class="col-md-3">
        <label for="forma" class="form-label">Forma de Pagamento</label>
        <select class="form-select" id="forma">
          <option selected>Todas</option>
          <option>PIX</option>
          <option>Ficha</option>
          <option>Cédula</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="estab" class="form-label">Estabelecimento</label>
        <select class="form-select" id="estab">
          <option selected>Todos</option>
          <option>Bar do Zé</option>
          <option>Bilhar da Esquina</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="mesa" class="form-label">Mesa</label>
        <select class="form-select" id="mesa">
          <option selected>Todas</option>
          <option>MESA001</option>
          <option>MESA002</option>
          <option>MESA003</option>
        </select>
      </div>
      <div class="col-md-3 align-self-end">
        <button class="btn btn-primary w-100">Gerar Relatório</button>
      </div>
    </form>

    <h4 class="mb-3">Resumo</h4>
    <div class="row text-center mb-4">
      <div class="col-md-3">
        <div class="bg-success text-white p-3 rounded shadow-sm">
          <h6>Total Arrecadado</h6>
          <h4>R$ 1.250,00</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-primary text-white p-3 rounded shadow-sm">
          <h6>Total de Partidas</h6>
          <h4>243</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-warning text-dark p-3 rounded shadow-sm">
          <h6>Mesas Ativas</h6>
          <h4>10</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-danger text-white p-3 rounded shadow-sm">
          <h6>Estabelecimentos</h6>
          <h4>5</h4>
        </div>
      </div>
    </div>

    <h4 class="mt-5 mb-3">Gráfico de Arrecadação por Dia</h4>
    <canvas id="graficoArrecadacao" height="100"></canvas>

    <script>
      const ctx = document.getElementById('graficoArrecadacao').getContext('2d');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['01/04', '02/04', '03/04', '04/04'],
          datasets: [{
            label: 'R$ por dia',
            data: [320, 210, 450, 270],
            borderColor: 'blue',
            fill: false,
            tension: 0.2
          }]
        },
        options: {
          responsive: true,
          plugins: { legend: { display: false } }
        }
      });
    </script>

    <div class="text-end mt-4">
      <button class="btn btn-outline-secondary me-2">Exportar PDF</button>
      <button class="btn btn-outline-success">Exportar Excel</button>
    </div>
  </div>

</body>
</html>
