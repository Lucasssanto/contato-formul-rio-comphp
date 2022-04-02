<?php 
    
    if(isset($_POST(['email']))&& !empty($_POST['email']) {

        $nome = addslashes($_POST['name']);
        $email =  addslashes($_POST['email']);
        $mensagem =  addslashes($_POST['message']);

        $to = "lucasdo123ssantos@gmail.com";
        $subject = "Contato - progrmamador BR";
        $body = "Nome:" .$nome. "\r\n".
                "Email: " .$email. "\r\n".
                "Mensagem" .$mensagem;
        $header = "FROM:lucasdo123ssantos@gmail.com". "\r\n".
                "reply-ton".$email. "\r\n".
                "X=Mailer:PHP/".phpversion();

        if (mail($to,$subject,$body,$header)) {
            ehco("Email enviado com secesso!");
        }else{
            ehco("Falha no envio!");
        }

    }

?>