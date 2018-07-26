<?php
if (isset($_FILES['upload'])) {
    if (is_uploaded_file($_FILES['upload']['tmp_name']) && $_FILES['upload']['error']==0) {

        $path = '/var/www/project/public/uploads/' . $_FILES['upload']['name'];
        if (!file_exists($path)) {
            if (move_uploaded_file($_FILES['upload']['tmp_name'], $path)) {
                echo "O arquivo foi carregado com sucesso";
            }
            else {
                echo "Ocorreu um erro ao salvar o arquivo.";
            }
        }
        else {
            echo "Arquivo já existe. Por favor selecione outro arquivo.";
        }
    } 
    else {
        echo "Ocorreu um erro ao carregar o arquivo.";
        echo "(Error Code:" . $_FILES['upload']['error'] . ")";
    }
}

include __DIR__ . '/../templates/send.html.php';