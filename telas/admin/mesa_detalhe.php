<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Detalhes da Mesa - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a href="mesas.php" class="btn btn-outline-light btn-sm">← Voltar</a>
      <span class="navbar-brand mb-0 h1">Mesa MESA001 - Detalhes</span>
    </div>
  </nav>

  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Informações Gerais</h5>
            <ul class="list-group">
              <li class="list-group-item"><strong>Status:</strong> <span class="badge bg-success">Liberada</span></li>
              <li class="list-group-item"><strong>Conexão:</strong> <span class="badge bg-success">Online</span></li>
              <li class="list-group-item"><strong>Estabelecimento:</strong> Bar do Zé</li>
              <li class="list-group-item"><strong>Localização:</strong> Rua Central, 123 - São Paulo/SP</li>
              <li class="list-group-item"><strong>Última Comunicação:</strong> Hoje às 14:30</li>
              <li class="list-group-item"><strong>Bateria:</strong> 92%</li>
            </ul>
          </div>
        </div>

        <div class="card mt-4 shadow">
          <div class="card-body">
            <h5 class="card-title">Controle Manual</h5>
            <button class="btn btn-warning me-2">Bloquear Mesa</button>
            <button class="btn btn-success">Desbloquear Mesa</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Informações de Uso</h5>
            <ul class="list-group">
              <li class="list-group-item"><strong>Créditos Atuais:</strong> 3 créditos</li>
              <li class="list-group-item"><strong>Total de Partidas:</strong> 158</li>
              <li class="list-group-item"><strong>Total Arrecadado:</strong> R$ 789,00</li>
              <li class="list-group-item"><strong>Forma de Pagamento Mais Usada:</strong> PIX</li>
            </ul>
          </div>
        </div>

        <div class="card mt-4 shadow">
          <div class="card-body">
            <h5 class="card-title">Localização da Mesa</h5>
            <!-- Mapa incorporado (pode ser um iframe do Google Maps ou API) -->
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.google.com/maps?q=-23.55052,-46.633308&output=embed"
                style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-5">

    <h4>Histórico de Atividades</h4>
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>Data</th>
          <th>Ação</th>
          <th>Valor</th>
          <th>Forma de Pagamento</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>04/04/2025 14:30</td>
          <td>Crédito inserido</td>
          <td>R$ 5,00</td>
          <td>PIX</td>
        </tr>
        <tr>
          <td>04/04/2025 12:10</td>
          <td>Partida iniciada</td>
          <td>1 crédito</td>
          <td>Ficha</td>
        </tr>
        <tr>
          <td>03/04/2025 20:45</td>
          <td>Bloqueio remoto</td>
          <td>-</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>

  </div>

</body>
</html>
