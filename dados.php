<?php

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\SMTP;
use  PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';


//ADMIN RECEBENDO EMAIL
$mail = new PHPMailer();


//Server settings
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
$mail->isSMTP();    
$mail->Host       = 'smtp.titan.email';                     
$mail->SMTPAuth   = true;                                  
$mail->Username   = 'juventudebunker@acampimersos.com.br';                     
$mail->Password   = 'fortalecidospelafe10';                               
$mail->SMTPSecure = 'ssl';            
$mail->Port       = 465;                                    

//remetente
$mail->setFrom('juventudebunker@acampimersos.com.br', 'Juventude Bunker');

//Dados do formulario
$nome = $_POST['userNome'];
$sexo = $_POST['userSexo'];
$nascimento = $_POST['userNascimento']; 
$idade = $_POST['userIdade']; 
$telefone = $_POST['userTelefone']; 
$endereco = $_POST['userEndereco'];
$email = $_POST['userEmail'];
$membro = $_POST['userMembro'];
$visitante = $_POST['userVisitante'];
$visitanteQual = $_POST['userVisitanteQual'];
$alergia = $_POST['userAlergia'];
$alergiaQual = $_POST['userAlergiaQual'];


$mail->addAddress('juventudebunker@acampimersos.com.br');     //Add a recipient
//$mail->addCC('deividalvesportela@gmail.com'); //cópia
// $mail->addBCC('bcc@example.com'); //cópia oculta


//Content <p style='background-color:#ccc;padding:10px;'>
$mail->isHTML(true);                                  //Set email format to HTML
$mail->CharSet    = 'UTF-8';                                           
$mail->Subject = 'Formulário Acampamento Imersos';
$mail->Body    = "   <h2>FORMULÁRIO INSCRIÇÃO ACAMPAMENTO IMERSOS</h2>
                <br>
                <h3>DADOS DO ACAMPANTE</h3>
                
                <b>Nome:</b> " . $nome . "
                <br> 
                <b>Sexo: </b>" . $sexo . "
                <br> 
                <b>Data de Nascimento: </b> " . $nascimento . "
                <br>
                <b>Idade: </b>" . $idade . "
                <br>
                <b>Telefone: </b> " . $telefone . "
                <br>
                <b>Endereço: </b>" . $endereco . "
                <br>
                <b>Email: </b>" . $email . "
                <br>
                <b>É membro da PIBVA? </b>" . $membro . "
                <br>
                <b>É membro de alguma igreja? </b>" . $visitante . "
                <br>
                <b>Qual igreja? </b>" . $visitanteQual . "
                <br>
                <b>Tem alergia a algum medicamento? </b>" . $alergia . "
                <br>
                <b>Qual medicamento? </b>" . $alergiaQual . "
                <br>
                
";
$mail->AltBody = $mail->Body;


if(!$mail->Send()) { 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}  else {
    $mail->ClearAllRecipients();
}


//ACAMPANTE RECEBENDO EMAIL
$mail2 = new PHPMailer();

//Server settings
//$mail2->SMTPDebug = SMTP::DEBUG_SERVER;                      
$mail2->isSMTP();    
$mail2->Host       = 'smtp.titan.email';                     
$mail2->SMTPAuth   = true;                                  
$mail2->Username   = 'juventudebunker@acampimersos.com.br';                     
$mail2->Password   = 'fortalecidospelafe10';                               
$mail2->SMTPSecure = 'ssl';            
$mail2->Port       = 465;
$mail2->isHTML(true);    
$mail2->CharSet    = 'UTF-8';

//remetente
$mail2->setFrom('juventudebunker@acampimersos.com.br', 'Juventude Bunker');

//E-mail do acampante
$mail2->AddAddress($email);

$mail2->Subject = "Inscrição Acampamento Imersos 😎"; // Assunto da mensagem



// Define a mensagem para o acampante
$mail2->Body = "<body style='margin: 0; padding: 0;'>
    <table border='1' cellpadding='0' cellspacing='0' width='100%'>
     <tr>
      <td  style='padding: 20px 0 30px 0;'>
        <table align='center' border='0' cellpadding='0' cellspacing='0' width='700' style='border-collapse: collapse;'>
            <tr>
             <td  bgcolor='#000000' align='center' style='padding: 40px 0 30px 0;'>
                <a href='https://acampimersos.com.br'><img src='https://acampimersos.com.br/img/logo_simples_compartilhamento1.jpg' alt='Logo Juventude bunker' width='150' style='display: block;'/></a>
             </td>
            </tr>

            <tr bgcolor='#000000'>
             <td style='color: #ffffff; font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif; padding: 40px 0 30px 0;'>
              <h2 color= '#eaeaea' align='center'>PARABÉNS PELA INSCRIÇÃO<br>NO ACAMPAMENTO IMERSOS<br></h2>
              <h2 align='center'>🥳🥳🥳</h2>
             </td>
            </tr>

            <tr bgcolor='#000000'>
             <td style='color: #ffffff; font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif; padding: 20px 20px; font-size: 15px;'>
                Estamos muito felizes em saber que você fará parte deste momento incrível que viveremos nos dias <b><u>22, 23 e 24 de outubro</u></b>.
            <br><br>
                Nossa orientação é que você pague em parcelas, <u>podendo ser em quantas você preferir!!!</u> Para não ficar apertado para ninguém😉
            <br><br>
                Valor do acampamento é R$ xx,xx
            <br><br>
                Mas não se preocupe!!! 🤯
            <br><br>
                <u>TUDO</u> o que você precisará para usufluir neste acampamento estará incluso!
            <br>
                Olha só: Transporte (ida e volta), alimentação, piscina, tirolesa, rapel, cachoeira, espaços para meditação e jogos, fogueira, futebol, vôlei... Ufaa cansei 😅
            <br><br>
             </td>
            </tr>

            <tr bgcolor='#000000'>
                <td style='color: #174ef1; font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif; padding: 40px 0 30px 0;'>
                 <h4 color= '#eaeaea' align='center'>Caso você tenha menos de 18 anos, deverá preencher, assinar o termo de responsabilidade (em anexo) e entregar nas mãos do <u>pastor Cassiano</u>.</h4><br>
                </td>
               </tr>
           </table>
      </td>
     </tr>
    </table>
   </body>



";



if(!$mail2->Send()) {
    echo 'Mailer Error: ' . $mail2->ErrorInfo;
}  else {
    echo "<script>
    location.href='index.html';
    alert('Formulário Enviado!!!');
    </script>";
    
    
}


?>