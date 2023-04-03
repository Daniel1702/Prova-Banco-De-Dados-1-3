<!DOCTYPE html>
<html>
<head>
  <title>Novo Usuário</title>
  <link rel="stylesheet" href="assets/style.css">

</head>
<body>
  <div class="container">
  <h1>Novo Usuário</h1>
  <form class="form" method="post" action="novo_usuario_confirmacao.php">
    <div class="form-bd">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br>
    <label>E-mail:</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value="Salvar">
  </form>
  <p><a href="index.php">Voltar à página inicial</a></p>
  </div>
  </div>
</body>
</html>
