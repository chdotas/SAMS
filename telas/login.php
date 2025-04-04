<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Login - SAMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to right, #1f1f1f, #383838);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-box {
      background-color: #fff;
      padding: 2rem;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }
    .login-box h3 {
      text-align: center;
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h3>SAMS 1.0 – Acesso ao Sistema</h3>
    <form method="post" action="autenticar.php">
      <div class="mb-3">
        <label for="email" class="form-label">Usuário (E-mail)</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="usuario@exemplo.com" required>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="********" required>
      </div>

      <div class="mb-3">
        <label for="perfil" class="form-label">Tipo de Acesso</label>
        <select class="form-select" name="perfil" id="perfil" required>
          <option value="" selected disabled>Selecione</option>
          <option value="admin">Administrador (Empresa)</option>
          <option value="parceiro">Estabelecimento (Parceiro)</option>
        </select>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>

    <div class="text-center mt-3">
      <small class="text-muted">Sistema de Automação para Mesas de Sinuca</small>
    </div>
  </div>

</body>
</html>
