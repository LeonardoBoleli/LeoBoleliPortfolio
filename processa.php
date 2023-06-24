<?php

ini_set('max_execution_time', 300);
date_default_timezone_set('America/Sao_Paulo');



require 'vendor/autoload.php';
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
require_once('source\Suport\Email.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Source\Support\Email;


try{
    if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) &&
    !empty(trim($_POST['mensagem'])))) {
        $nome = (string) !empty($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
        $email = (string) $_POST['email'];
        $assunto = (string) !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não Informado';
        $mensagem = (string) $_POST['mensagem'];
        $data = date('d/m/Y H:i:s');

        
    }else{
        echo 'Não passou pelo if';
    }
    

    $email = new Email();
    $email->add(
        '$assunto',
        '$mensagem',
        'leo.boleli@gmail.com',
        'leo.boleli@gmail.com'
    )->send();

    if(!$email->error()){
        var_dump(true);
    }else{
        echo $email->error()->getMessage();
    }


    // if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) &&
    // !empty(trim($_POST['mensagem'])))) {
    //     $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
    //     $email = $_POST['email'];
    //     $assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não Informado';
    //     $mensagem = $_POST['mensagem'];
    //     $data = date('d/m/Y H:i:s');
    
    //     $mail = new PHPMailer();
    //     $mail->isSMTP();
    //     $mail->Host = 'smtp.gmail.com';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'leo.boleli@gmail.com';
    //     $mail->Password = 'leonardocacatua';
    //     $mail->SMTPDebug = 0;
    //     $mail->SMTPSecure = "ssl";
        

        
    //     $mail->Port = 465; 
    
    //     $mail->setFrom('leo.boleli@gmail.com');
    //     $mail->addAddress('leo.boleli@gmail.com');

    //     // Charset (opcional) 
    //     $mail->CharSet = 'UTF-8'; 
        
    
    //     $mail->isHTML(true);
    //     $mail->Subject = $assunto;
    //     $mail->Body = "Nome: {$nome}<br>
    //                     Email: {$email}<br>
    //                     Mensagem: {$mensagem}<br>
    //                     Data/Hora: {$data}<br>";
    
    //             // Envia o e-mail 
    //     $enviado = $mail->Send(); 

    //     // Exibe uma mensagem de resultado 
    //     if ($enviado) 
    //     { 
    //         echo "Seu email foi enviado com sucesso!"; 
    //     } else { 
    //         echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
    //     } 
        
    // }else{
    //     echo 'Não passou pelo if';
    // }

}catch (Exception $e){
    echo "Erro: {$mail->ErrorInfo}";
}





?>