<?php
        $nome = str_replace(" ","",trim($_POST['nome']));
        $email =  $_POST['email'];
        $telefone =  $_POST['telefone'];
        $empresa =  $_POST['empresa'];
        
        $to ="brunomichel00@gmail.com";
        $subject ="Contato-";
        mail($to, $subject." ".$email, $telefone, $empresa "From: ". $nome);
       
?>
    
