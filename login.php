<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>login</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Nome da Empresa</a>
		</div>
	</nav>
    </header>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
    <form action="login.php" method="post">
        <div class="form-group">
        <h3 class="text-primary">Iniciar Sess&atilde;o</h3>
		<hr style="border-top:1px dotted #ccc;"/>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" id="password" required><br>
        <button type="submit" onclick="validarPassword()" id="btn_check" class="btn btn-primary form-control">Entrar</button>
        <a href="cadastro.php">N&atilde;o possui uma conta?</a>
        </div>
    </form>
    </div>

</body>
<script src="script.js"></script>
</html>

<?php
        require('conexaoBD.php');

        if(isset($_POST['username'])&& isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Consulta SQL para selecionar o usuário do banco de dados
            $sql = "select * from usuarios where nome = '$username'";
            $result = mysqli_query($conn, $sql);

            // Verificar se a consulta retornou algum resultado
            if (mysqli_num_rows($result) > 0) {
                // Usuário encontrado, verifique a senha
                $row = mysqli_fetch_assoc($result);
                if (isset($row['password']) && (password_verify($password, $row['password']))) {
                    // Senha correta
                   echo '<script>alert("Login bem sucedido!")';
                }else{
                    // Senha incorreta
                    echo "Senha incorreta!";
                }
            }else {
                // Usuário não encontrado
                echo "Usuário não encontrado!";
            }
            // if($query){
            //     // $query = mysqli_query($conn, "select * from ");
            // }
            // $query = mysqli_query($conn, ";
        }
        mysqli_close($conn);

?>
