<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Estabelecimento - SAMS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a href="estabelecimentos.php" class="btn btn-outline-light btn-sm">← Voltar</a>
      <span class="navbar-brand mb-0 h1">Estabelecimento: Bar do Zé</span>
    </div>
  </nav>

  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Informações do Estabelecimento</h5>
            <ul class="list-group">
              <li class="list-group-item"><strong>Nome:</strong> Bar do Zé</li>
              <li class="list-group-item"><strong>Responsável:</strong> José da Silva</li>
              <li class="list-group-item"><strong>Telefone:</strong> (11) 91234-5678</li>
              <li class="list-group-item"><strong>Email:</strong> contato@bardoze.com</li>
              <li class="list-group-item"><strong>Endereço:</strong> Rua Central, 123 - São Paulo/SP</li>
              <li class="list-group-item"><strong>Comissão:</strong> 40% sobre arrecadação</li>
            </ul>
          </div>
        </div>

        <div class="card mt-4 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Localização no Mapa</h5>
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.google.com/maps?q=-23.55052,-46.633308&output=embed"
                style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title">Mesas Instaladas</h5>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between">
                Mesa MESA001 <span class="badge bg-success">Online</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                Mesa MESA003 <span class="badge bg-danger">Offline</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Últimos Repasses</h5>
            <table class="table table-sm table-striped">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Valor</th>
                  <th>Status</th>
                  <th>Comprovante</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>03/04/2025</td>
                  <td>R$ 350,00</td>
                  <td><span class="badge bg-success">Pago</span></td>
                  <td><a href="#">📄</a></td>
                </tr>
                <tr>
                  <td>28/03/2025</td>
                  <td>R$ 290,00</td>
                  <td><span class="badge bg-success">Pago</span></td>
                  <td><a href="#">📄</a></td>
                </tr>
                <tr>
                  <td>20/03/2025</td>
                  <td>R$ 210,00</td>
                  <td><span class="badge bg-danger">Pendente</span></td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
            <a href="acertos.php?estab=EST001" class="btn btn-outline-primary mt-2">Ver todos os acertos</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
