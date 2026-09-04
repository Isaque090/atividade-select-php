```php
<?php

include_once('config.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM professores WHERE cd_professor = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();


    if ($result->num_rows > 0) {

        $linha = $result->fetch_assoc();

    } else {

        header("Location: professor.php");
        exit;

    }

} else {

    header("Location: professor.php");
    exit;

}


if (isset($_POST['editar'])) {


$nome=$_POST['nome'];
$email=$_POST['email'];
    $sql = "UPDATE professores  SET nm_professor=?, ds_email=?  WHERE cd_professor = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssi", $nome, $email, $id);
    $stmt->execute();

    header("Location: professor.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Matéria</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #162a49;
            min-height: 100vh;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 12px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-header bg-dark text-white">

                        <h4 class="mb-0">
                            Editar Professor
                        </h4>

                    </div>

                    <div class="card-body">

                        <form method="post">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control"
                                    value="<?= htmlspecialchars($linha['nm_professor']) ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="<?= htmlspecialchars($linha['ds_email']) ?>" required>
                            </div>
                            <a href="professores.php" class="btn btn-secondary">Voltar</a>
                            <button type="submit" name="editar" class="btn btn-primary">
                                Salvar alterações
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>