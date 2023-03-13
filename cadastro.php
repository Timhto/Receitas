<?php
// Define o endereço de e-mail para onde as informações do formulário serão enviadas
$para = 'everton.g.costa10@gmail.com';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera as informações do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $cep = $_POST['cep'];

  // Monta o corpo do e-mail
  $corpo = "Nome: $nome\nE-mail: $email\nRua: $rua\nNúmero: $numero\nComplemento: $complemento\nCidade: $cidade\nEstado: $estado\nCEP: $cep";

  // Envia o e-mail
  mail($para, 'Formulário de Cadastro', $corpo, 'From: ' . $email);

  // Redireciona o usuário para a página de sucesso
  header('Location: sucesso.html');
} 
else 
  // Redirecion

