<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Login</title>
</head>
<body>
    <form action=" " method="post">
        <div>
            <label><b>Usuário</b></label>
            <input type="text" placeholder="Digite seu Usuário" name="username" required/>
            <label><b>Senha</b></label>
            <input type="password" placeholder="Digite sua Senha" name="password" required/>
            <button type="submit">Entrar</button>
        </div>
        <p>
            Não tem cadastro? <a href="registro.php">Cadastre-se!</a>
        </p>
    </form>
    <?php if ($error !== ''): ?>
    <span><?php echo $error; ?></span>
    <?php endif; ?>
</body>
</html>