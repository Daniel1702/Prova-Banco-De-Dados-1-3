<?php
require_once('conexao.php');
$sql = "SELECT * FROM Livros";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lista de livros</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="form-table">
  <h1>Lista de livros</h1>
  <?php if ($resultado->num_rows > 0) { ?>
    <div class="form-table-bd">
    <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Ano</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php while($livro = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $livro['titulo'] ?></td>
        <td><?php echo $livro['autor'] ?></td>
        <td><?php echo $livro['editora'] ?></td>
        <td><?php echo $livro['ano'] ?></td>
        <td><?php echo $livro['status'] == 1 ? 'Disponível' : 'Emprestado' ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
    </div>
  <?php } else { ?>
  <p>Não há livros cadastrados.</p>
  <?php } ?>
  <div id="back-bd">
  <p><a href="index.php">Voltar à página inicial</a></p>
  </div>
  </div>
  </div>
</body>
</html>
