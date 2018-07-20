<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:40
 */

namespace Store\mailer;


class SendTransport
{
    public function SendMailTransport(MailMessage $mail){
        \Monolog\Handler\mail($mail->getTo(),$mail->getSubject(),$mail->getStr(),$mail->getHeaders());
    }
}