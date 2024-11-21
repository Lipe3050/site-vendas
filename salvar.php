<?php
    include_once "conexao.php";

    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
    $produtos = filter_input(INPUT_GET, "produtos", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO produtos values ('$nome', '$email', '$senha','$produtos')";
 
    $inserir = mysqli_query($link, $sql); 
    if($inserir) {
        echo "
            <script>
                alert('Salvo com sucesso');
                window.location.href='../smarttek/index';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Erro ao salvar');
                window.location.href='../smarttek/index';
            </script>
        ";
    }



?>