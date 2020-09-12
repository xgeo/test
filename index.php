<?php
    /** Conexão com banco de dados */
    $pdo = new \PDO("mysql:dbname=test_db;host=localhost;port=3306", "root", "@900360.");

    /** Consulta e retorno de dados */
    $listaUsuarios = [];
    $SQLConsulta = "SELECT * FROM users";

    $stmt = $pdo->prepare($SQLConsulta);
    $stmt->execute();

    $listaUsuarios = $stmt->fetchAll();
    /** Consulta e retorno de dados */

    /** Esta variável, existe? */
    if ($_POST) {

        /** Os dados estão populados? */
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            /** Se estão populados... */

            try {
                $_POST['password'] = md5($_POST['password']);
                /** Query de INSERT */
                $SQL = "INSERT INTO users VALUES (null, ?, ?, ?)";
                $stmt = $pdo->prepare($SQL);
                $success = $stmt->execute(array_values($_POST));

                if ($success) {
                    header('location: index.php');
                } else {
                    echo "<h3 style='color: red;'>ERROR! NÃO SALVOU! AHAHAHAHAHA</h3>";
                }

            } catch (\PDOException $e) {
                var_dump($e->getMessage());
            }

        } else {
            echo "<h3 style='color: red;'>ERROR! FALTA PREENCHER!</h3>";
        }

   }

/**
 * PRA REMOVER, BASTA UTILIZAR O MODELO DE CODIGO ACIMA COM A QUERY PARA DELETAR:
 * - delete from users where id = 5;
 */

?>
<html>
    <head>
        <title>Teste: Xablau</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Teste</h1>
        <form method="post" action="index.php">
            <table>
                <tbody>
                <tr>
                    <td>
                        <label>Nome</label>
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            E-mail
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Senha
                        </label>
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Salvar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <hr>
        <h2>Listagem</h2>
        <table style="color: blue; width: 100%; border: 1px solid gray;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (count($listaUsuarios) > 0):
                        foreach ($listaUsuarios as $usuario):
                ?>
                <tr>
                    <td><?=$usuario['id']?></td>
                    <td><?=$usuario['name']?></td>
                    <td><?=$usuario['email']?></td>
                    <td><?=$usuario['password']?></td>
                    <td>
                        CRIAR BOTÃO DE REMOVER (E REMOVER)
                    </td>
                </tr>
                <?php
                        endforeach;
                    endif;
                ?>
            </tbody>
        </table>
    </body>
</html>


