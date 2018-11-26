<?php
require_once('./mailer/class.phpmailer.php');

$btnContato = filter_input(INPUT_POST, 'btnContato', FILTER_SANITIZE_STRING);
if ($btnContato):

    $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    $telefone = utf8_decode(strip_tags(trim($_POST['txtfone'])));
    $mensagem = html_entity_decode(filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING));


    echo "<pre>";
    try {
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet = utf8_decode($mensagem);
        $mailer->Host = ''; //smtp.dominio.com.br
        $mailer->Username = '';
        $mailer->Password = '';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddAddress('', 'Central Soluções');
        $mailer->AddAddress('');
        $mailer->Subject = "Formulario Contato"; //Assunto do e-mail      
        $mailer->isHTML(true);
        $mailer->Body .= "<br><br/> "
                . "Nome:  $nome <br><br/>"
                . "Email: $email <br><br/>"
                . "Telefone: $telefone <br><br/>"
                . "Mensagem: $mensagem <br><br/>";

        //Define o corpo do email        
        echo $mailer->Send();
        echo "<script>alert('Sr(a) $nome sua mensagem foi enviada com sucesso! Em breve entraremos em contato!');</script>";
        echo "<script>window.location = ''</script>";
//        echo "<script>window.location = ''</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
    echo "</pre>";
endif;
?> 
<form class="form-home" action="" method="POST">
    <input type="text"  name="txtnome" placeholder="Nome"/>
    <input type="text"  name="txtemail" placeholder="Email"/>
    <input type="tel"  name="txtfone" placeholder="Telefone"/>
    <textarea cols="10" rows="6" name="txtmsg" placeholder="Mensagem"></textarea>
    <input type="submit" class="btnCttFooter" name="btnContato" value="Enviar">
</form>

