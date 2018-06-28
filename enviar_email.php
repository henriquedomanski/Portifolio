<?php 

include ("/PHPMailer/class.smtp.php");
/*RECEBE AS VARIAVEIS*/
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$mensagem = $_POST ["mensagem"];

/*INCLUI O ARQUIVO "class.phpmailer.php"*/
include ("/PHPMailer/class.phpmailer.php");

/*INICIA A CLASSE PHPMailer*/
$mail = new PHPMailer();

/*DEFINE OS DADOS DO SERVIDOR E TIPO DE CONEXAO*/
$mail->IsSMTP ();
$mail->Host = "smtp.gmail.com";/*endereço do servidor smtp*/
$mail ->Port = 587; // or 587
$mail->SMTPAuth = true;/*o servidor usa autenticação SMTP? (opcional)*/
$mail->Username = "elmntntc@gmail.com";/*usuario do servidor SMTP*/
$mail->Password = "SENHA DO EMAIL AQUI";/*SENHA DO SERVIDOR SMTP*/

/*DEFINIR REMETENTE*/
$mail->From = "henrydomanski@gmail.com";
$mail->FromName = "HenriqueDomanski.com.br"; /*SEU NOME*/

/*DEFINIR DESTINATARO*/
$mail->AddAddress($email, $nome);
$mail->AddCC ('henrydomanski@gmail.com');/*ENVIAR EMAIL COM UMA COPIA PARA OUTRA PESSOA. */

/*DEFINIR DADOS TECNICOS DA MENSAGEM*/
$mail->IsHTML  (true);/*DEFINE QUE O EMAIL SERA ENVIADO COMO HTML*/

/*DEFINE A MENSAGEM (TEXTO E ASSUNTO)*/
$mail->Subject = "Nova mensagem do site";/*Assunto da mensagem*/
$mail->Body = $mensagem;

/*ENVIAR EMAIL*/
$enviado = $mail->Send ();




/*ENVIAR EMAIL*/
$enviado = $mail->Send ();


/*EXIBIR MENSAGEM DO RESULTADO*/
if ($enviado){
	echo "E-mail enviado com sucesso";
	header("refresh:2;index.php");/*redirecionar para index depois da mensagem*/
	}else{
		echo "Não foi possivel enviar o E-mail";
		header("refresh:2;index.php");/*redirecionar para index depois da mensagem*/
	}

	
 ?>























<!--  FORMA CORRETA DE PREENCHER



 php
    $mailto = $_POST['email'];
    $mailSub = $_POST['sub'];
    $mailMsg = $_POST['mgs'];
   require '../PHPMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
    
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   //$mail ->IsHTML(true);
   $mail ->Username = "elmntntc@gmail.com;
   $mail ->Password = "tfb22mhdp";
   $mail ->SetFrom("elmntntc@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


 -->
