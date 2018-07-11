<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:11
 */

namespace src\mailer;


class MailMessage
{
    public $str;

    private $to;

    private $subject;

    private $headers;

    public function __construct($str,$subject,$to)
    {
        $this->str = $str;
        $this->subject = $subject;
        $this->to = $to;
        $this->headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    }


    /**
     * @return string
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }


}