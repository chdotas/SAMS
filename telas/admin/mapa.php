<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Mapa das Mesas - SAMS Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <style>
    #map {
      height: 600px;
      border-radius: 8px;
    }
  </style>
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark mb-3">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SAMS 1.0 - Mapa das Mesas</span>
    </div>
  </nav>

  <div class="container">
    <h4 class="mb-2">Mesas Geolocalizadas</h4>
    <p class="text-muted">Visualize no mapa onde estão instaladas as mesas de sinuca. Os marcadores mostram o status de conexão.</p>

    <div id="map" class="mb-5"></div>
  </div>

  <script>
    // Inicializa o mapa centralizado em Curitiba
    const map = L.map('map').setView([-25.4284, -49.2733], 13);

    // Camada do mapa (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap',
    }).addTo(map);

    // Dados fictícios de mesas
    const mesas = [
      {
        id: 'MESA001',
        nome: 'Bar do Zé',
        status: 'Online',
        lat: -25.4262,
        lng: -49.2676
      },
      {
        id: 'MESA002',
        nome: 'Bilhar da Esquina',
        status: 'Offline',
        lat: -25.4318,
        lng: -49.2780
      }
    ];

    // Adiciona marcadores no mapa
    mesas.forEach(mesa => {
      const marker = L.marker([mesa.lat, mesa.lng]).addTo(map);
      marker.bindPopup(`
        <strong>${mesa.nome}</strong><br>
        ID: ${mesa.id}<br>
        Status: ${mesa.status}
      `);
    });
  </script>

</body>
</html>
