<?php
// Recebe os dados do formulário
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// E-mail de destino
$to = "renata.barale@yahoo.com.br";

// Assunto do e-mail
$subject = "Mensagem enviada pelo site Lavanderia Trancoso";

// Corpo do e-mail
$body  = "Você recebeu uma nova mensagem pelo site Lavanderia Trancoso:\n\n";
$body .= "Nome: $name\n";
$body .= "Email: $email\n";
$body .= "Mensagem:\n$message\n";

// Cabeçalhos do e-mail
$headers  = "From: noreply@lavanderia.com.br\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envia o email
if (mail($to, $subject, $body, $headers)) {
    echo "<p>Mensagem enviada com sucesso! Obrigado pelo contato, $name.</p>";
} else {
    echo "<p>Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>";
}
?>

