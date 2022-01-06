<?php

$mensagem = '';
if(isset($_GET['status'])){
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;

    case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
      break;
  }
}

?>


<main>

  <section>
      <a href="cadastro-clientes.php">
        <button class="btn btn-success">Novo cliente</button>
      </a>
  </section>

  <section>
    <table class="table bg-light mt-4">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Empresa</th>
          <th>Ações</th>
        </tr> 
      </thead>
      <tbody>
        <?=$mensagem?>
        <?php foreach($clientes as $cliente): ?>
            <tr>
              <td><?=$cliente['id']?></td>
              <td><?=$cliente['nome']?></td>
              <td><?=$cliente['empresa']?></td>
              <td> 
                <a href="editar-clientes.php?id=<?=$cliente['id']?>"><button type="button" class="btn btn-primary">Editar</button></a>
                <a href="excluir-clientes.php?id=<?=$cliente['id']?>"><button type="button" class="btn btn-danger">Excluir</button></a>
              </td>
            </tr>
          <?php endforeach; ?>
      </tbody>
  </section>


</main>


