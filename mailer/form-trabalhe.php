<?php
require_once './mailer/class.phpmailer.php';

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):
    $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    $cargo = utf8_decode(strip_tags(trim($_POST['txtcargo'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    $phone = utf8_decode(strip_tags(trim($_POST['txtphone'])));
    $cel = utf8_decode(strip_tags(trim($_POST['txtcel'])));
    $mensage = filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING);
    $arquivo = $_FILES["arquivo"];

    try {

        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet = utf8_decode($mensage);
        $mailer->Host = ''; //smtp.dominio.com.br
        $mailer->Username = '';
        $mailer->Password = '';
        $mailer->SMTPSecure = 'tls';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddAddress('', 'Central Solucoes');
        $mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
        $mailer->Subject = "Formulario Trabalhe Conosco"; //Assunto do e-mail 
        //Define o corpo do email
        $mailer->isHTML(true);
        $mailer->Body .= "<br><br/> "
                . "Nome:  $nome <br><br/>"
                . "Cargo:  $cargo <br><br/>"
                . "Email: $email <br><br/>"
                . "Telefone: $phone <br><br/>"
                . "Ceular: $cel <br><br/>"
                . "Mensagem: $mensage <br><br/>";

        $mailer->Send();
        echo "<script>alert('Sr(a) $nome seus dados foram enviados com sucesso! Aguarde o nosso contato!');</script>";
        echo "<script>window.location = ''</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
endif;
?>
<!--<form class="form_contato" name="formTrab" action="" method="POST"  enctype="multipart/form-data">
    <label for="nome">NOME</label>
    <input type="text" name="txtnome" id="nome" class="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="txtemail" class="email" id="email" >
    <label for="telefone">TELEFONE</label>
    <input type="tel" name="txtphone" id="telefone" class="telefone"> 
    <label for="descricao">MENSAGEM</label>
    <textarea id="descricao" class="textSugestao" name="txtmsg" cols="100" rows="10"></textarea>
    <label for="arquivo">ANEXAR CURRICULUM</label>
    <input type="file" name="arquivo" id="arquivo" class="anexar"><br>

    <input type="submit" name="btnEnviar" class="enviar"  onclick="return validaTrabConosco();"   value="ENVIAR">
</form>-->


<form class="form-trabalhe" action="" method="POST"  enctype="multipart/form-data">
    <input type="text" name="txtnome" id="nome" class="nome" placeholder="Nome Completo"/>
    <input type="text" name="txtcargo" id="cargo" class="cargo" placeholder="Cargo Pretendido"/>
    <input type="email" name="txtemail" class="email" id="email" placeholder="Email"/>
    <input type="tel" name="txtphone" id="telefone" class="telefone" placeholder="Telefone Fixo"/>
    <input type="tel" name="txtcel" id="celular" class="celular" placeholder="Telefone Celular"/>
    <p>Anexe seu Currículo (Formato PDF ou Word)</p>
    <label class="btnFile" for="file"> 
        <p>Escolher Arquivo</p>
        <input type="file" class="enviar"  accept=".pdf,.doc,.docx,.ppt,.pptx" onclick="return validaTrabConosco();"  aria-invalid="false">
    </label>   
    <input type="submit" class="btnWorck" name="btnEnviar" value="Enviar">
</form>