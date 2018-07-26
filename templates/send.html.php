<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Envio</title>
</head>
<body>
        <form action="send.php" method="post" enctype="multipart/form-data">
            <div>
                <label id="upload">Selecione o arquivo para carregar:
                <input type="file" id="upload" name="upload"/>
                </label>
            </div>
            <div>
                <input type="submit" value="Enviar"/>
            </div>
        </form>
</body>
</html>