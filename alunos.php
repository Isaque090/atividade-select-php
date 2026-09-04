<?php
include('config.php');

$sql = "SELECT * FROM alunos";
$result = $conexao->query($sql);

if(isset($_POST['excluir'])){
$id=$_POST['id'];

    $sql = "DELETE FROM alunos WHERE cd_aluno = $id";
    $conexao->query($sql);

    header("Location: alunos.php");
    exit;

}


if(isset($_POST['cadastrar'])){
$email=$_POST['email'];
$nome=$_POST['nome'];
$matricula=$_POST['matricula'];

$enviar = $conexao->prepare("INSERT INTO alunos (nm_aluno, ds_matricula, ds_email) VALUES (?, ?,?)");
$enviar->bind_param("sis", $nome,$matricula, $email);
$enviar->execute();

    header("Location: alunos.php");
    exit;

}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos - CRUD ETEC</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #162a49;
            min-height: 100vh;
            color: white;
        }

        .container {
            margin-top: 40px;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Lista de alunoes</h4>
            
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalNovoaluno">
                + Novo aluno
            </button>
            </div>

            <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Matricula</th>
                            <th>E-mail</th>
                            <th width="180">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($linha = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= htmlspecialchars($linha['cd_aluno']) ?></td>
                                    <td><?= htmlspecialchars($linha['nm_aluno']) ?></td>
                                        <td><?= htmlspecialchars($linha['ds_matricula']) ?></td>
                                    <td><?= htmlspecialchars($linha['ds_email']) ?></td>
                                    <td>
                                        <div class="row">
                                        <form action="alunos.php" method="post">
                                       <input type="hidden" name="id" value="<?= $linha['cd_aluno'] ?>">
                                               <button type="submit" name="excluir"  class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>

                                        </form>
                                        <a href="editar_aluno.php?id=<?= $linha['cd_aluno'] ?>"
   class="btn btn-warning btn-sm ml-3">
    Editar
</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">Nenhum Aluno cadastrado.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <a href="index.html" class="btn btn-secondary" style="margin-bottom: 50px;">← Voltar</a>
        </div>
    </div>




<div class="modal fade" id="modalNovoaluno" tabindex="-1" role="dialog" aria-labelledby="modalNovoalunoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="color:#000;">
            <form method="post" action="alunos.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNovoalunoLabel">Novo aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                      <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="number" class="form-control"  name="matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control"  name="email" required>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" name="cadastrar" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>