<?php
header('Content-Type: application/json');

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Compo E-mail
$arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
    </html>
";

// E-mails para quem será enviado o formulário
$destino = "ederzanardinii@gmail.com";
$assunto = "Contato pelo Site";

// Cabeçalhos
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $nome <$email>";

// Enviar e verificar se o e-mail foi enviado com sucesso
if (mail($destino, $assunto, $arquivo, $headers)) {
    $response = array('status' => 'success', 'message' => 'E-mail enviado com sucesso.');
} else {
    $response = array('status' => 'error', 'message' => 'Erro ao enviar o e-mail.');
}

echo json_encode($response);
?>