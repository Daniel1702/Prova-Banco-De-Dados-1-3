<!DOCTYPE html>
<html>
<head>
  <title>Novo Livro</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
  <h1>Novo Livro</h1>
  <div class="form"> <form method="post" action="novo_livro_confirmacao.php">
    <label>Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label>Autor:</label>
    <input type="text" name="autor" required>
    <br>
    <label>Editora:</label>
    <input type="text" name="editora" required>
    <br>
    <label>Ano:</label>
    <input type="date" name="ano" required>
    <br>
    <label>Status:</label>
    <input type="number" name="status" required>
    <br>
    <input type="submit" value="Salvar">
  </form>
</div>
 
  <p><a href="index.php">Voltar à página inicial</a></p>
</div>
</body>
</html>
