<?php

if(isset(($_POST['email'])) && !empty($_POST['email']))

$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['message'])

$to = "phpaes252@gmail.com";
$subject = "Contato - Pedro Paes";
$body ="Nome: ".$nome. "\n"
        "Email: ".$email."\n"
        "Mensagem: ".$mensagem;
$header ="From:pdrpaes@github.com"."\r\n"
        ."Reply-To: ".$email."\e\n"
        .X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");


?>