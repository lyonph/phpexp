<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Registro</title>
</head>
<body>
    <form action=" " method="post">
        <?php include('regerrors.php'); ?>
        <div>
            <label><b>Usuário</b></label>
            <input type="text" placeholder="Digite usuário desejado" name="username"  value="<?php echo $username; ?>"/>
            <br />
            <label><b>Senha</b></label>
            <input type="password" placeholder="Digite senha desejada" name="password_1" />
            <br />
            <label><b>Confirmar Senha</b></label>
            <input type="password" placeholder="Digite a senha novamente" name="password_2" />
            <br />
            <button type="submit" name="reg_user">Registrar</button>
        </div>
        <p>
            Já tem cadastro? <a href="login.php">Faça login</a>
        </p>
    </form>
</body>
</html>