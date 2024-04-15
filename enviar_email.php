<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "mycheelly@gmail.com"; // Coloque aqui o seu endereço de e-mail
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $assunto = "Mensagem do formulário de contato";

    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    if (mail($para, $assunto, $corpo_email)) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar mensagem. Por favor, tente novamente mais tarde.</p>";
    }
} else {
    echo "<p>Erro: O formulário não foi submetido corretamente.</p>";
}
?>