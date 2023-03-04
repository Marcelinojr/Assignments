<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Nome da empresa</a>
		</div>
	</nav>
    </header>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
    <h3 class="text-primary">Cadastre-se</h3>
		<hr style="border-top:1px dotted #ccc;"/>   
    <form action="cadastro.php" method="post">
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu nome" required>
    <label for="sobrenome">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome" required>
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo" class="form-control" placeholder="Selecione o seu sexo" required>
        <option></option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
    <label for="nrTelemovel">Numero de telemovel</label >
    <input type="text" class="form-control" name="nrTelemovel" id="nrTelemovel" placeholder="Digite o seu numero de telemovel" required>
    <label for="endereco">Endereco</label>
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o seu endereco" required>
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Digite o seu email" required>
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite o sua senha" required>
    
     <!-- <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite o sua senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
     title="Must contain at least one number and one uppercase and lowercase letter,
     and at least 8 or more characters"required> -->
    <!-- <label for="endereco">Reescreva a senha</label>
    <input type="text" name="senha" id="senha" required> -->
        <button type="submit" name="cadastrar" onclick="validarPassword()" id="btn_check" class="btn btn-primary form-control">Cadastrar</button>
        <a href="login.php">J&aacute; possui uma conta?</a>
    </div>
    </form>
    </div>
</body>
<script src="script.js"></script>
</html>

<?php

    require('conexaoBD.php');

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $nrTelemovel = $_POST['nrTelemovel'];
        $sexo = $_POST['sexo'];
        $senha = $_POST['senha'];

        $query = mysqli_query($conn, "insert into usuarios(nome, sobrenome, email, endereco, nrTelemovel, sexo, senha) 
        value ('$nome', '$sobrenome', '$email', '$endereco', '$nrTelemovel', '$sexo', '$senha')");

//         if($query){
//             echo '<script>alert("Cadastro realizado com Sucesso")</script>';

//         }else{
//             echo'<script>alert("Falha ao enviar o cadastro... Por favor, tente novamente ")</script>';
//         }
    }


?>
