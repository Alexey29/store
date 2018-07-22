<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:05
 */

namespace src\mailer;


class mailer
{
     private $mail;

     private $ST;


     function __construct(MailMessage $mail)
     {
         $this->mail = $mail;
         $this->ST = new SendTransport();
     }


    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail(MailMessage $mail)
    {
        $this->mail = $mail;
    }

    public function SendMail(){
        $this->ST->SendMailTransport($this->mail);
    }






}