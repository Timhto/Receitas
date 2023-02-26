<?php
if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    
    // Email para onde será enviado o formulário
    $to = "email@example.com";
    $subject = "Novo cadastro";
    $message = "Nome: ".$nome."\nE-mail: ".$email."\nRua: ".$rua."\nNúmero: ".$numero."\nComplemento: ".$complemento."\nCidade: ".$cidade."\nEstado: ".$estado."\nCEP: ".$cep;
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: webmaster@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Envio do email
    mail($to, $subject, $message, $headers);
    
    // Redirecionamento para a página de sucesso
    header("Location: sucesso.html");
    exit();
}
?>
