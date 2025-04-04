<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Relatórios do Estabelecimento - SAMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Relatórios do Estabelecimento</span>
    </div>
  </nav>

  <div class="container">
    <h3 class="mb-4">Filtros de Relatório</h3>

    <form class="row g-3 bg-white p-3 rounded shadow-sm mb-4">
      <div class="col-md-4">
        <label for="inicio" class="form-label">Data Início</label>
        <input type="date" class="form-control" id="inicio">
      </div>
      <div class="col-md-4">
        <label for="fim" class="form-label">Data Fim</label>
        <input type="date" class="form-control" id="fim">
      </div>
      <div class="col-md-4 align-self-end">
        <button class="btn btn-primary w-100">Gerar</button>
      </div>
    </form>

    <h4 class="mb-3">Resumo</h4>
    <div class="row text-center mb-4">
      <div class="col-md-4">
        <div class="bg-success text-white p-3 rounded shadow-sm">
          <h6>Total Arrecadado</h6>
          <h4>R$ 1.080,00</h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-primary text-white p-3 rounded shadow-sm">
          <h6>Total de Partidas</h6>
          <h4>216</h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-info text-white p-3 rounded shadow-sm">
          <h6>PIX + Fichas + Cédulas</h6>
          <h4>100 / 70 / 46</h4>
        </div>
      </div>
    </div>

    <h5 class="mb-3">Gráfico por Forma de Pagamento</h5>
    <canvas id="graficoPagto" height="100"></canvas>

    <script>
      const ctx = document.getElementById('graficoPagto').getContext('2d');
      new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['PIX', 'Ficha', 'Cédula'],
          datasets: [{
            data: [100, 70, 46],
            backgroundColor: ['#0d6efd', '#ffc107', '#198754']
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    </script>
  </div>

</body>
</html>
