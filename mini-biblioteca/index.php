<?php
require_once('conexao.php');
$sql = "SELECT * FROM Livros WHERE status = 1";
if (!empty($_GET['titulo'])) {
  $titulo = $_GET['titulo'];
  $sql .= " AND titulo LIKE '%$titulo%'";
}
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mini Biblioteca</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <main class="container"> 
    <div class="login-page">
    <h1>Mini Biblioteca</h1>
  <form method="get" class='form'>
    <div class="title-bd">
    <div id="pesquisa-bd">
    <label>Buscar livro:</label>
    </div>
    <input type="text" name="titulo" placeholder="Título do livro">
   <div id="hover-bd">
   <input type="submit" value="Buscar">
   </div> 
    </div>
  </form>
  <div class="form-bd">
  <h2>Livros disponíveis</h2>
  <?php if ($resultado->num_rows > 0) { ?>
  <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Ano</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php while($livro = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $livro['titulo'] ?></td>
        <td><?php echo $livro['autor'] ?></td>
        <td><?php echo $livro['editora'] ?></td>
        <td><?php echo $livro['ano'] ?></td>
        <td><a href="emprestimo.php?id=<?php echo $livro['id'] ?>">Emprestar</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
  <p>Não há livros disponíveis.</p>
  <?php } ?>
 
  <p><a href="lista_livros.php">Ver todos os livros</a></p>
  <p><a href="novo_livro.php">Cadastrar novo livro</a></p>
  <p><a href="lista_usuarios.php">Ver usuários cadastrados</a></p>
  <p><a href="novo_usuario.php">Cadastrar novo usuário</a></p>
  </div>
    </div>

  </main>
</body>
</html>
