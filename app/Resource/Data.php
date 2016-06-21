<?php
namespace Pentagonal\StarterApp;

class Data
{
    protected $file;

    public function __construct()
    {
        $this->file = dirname(__DIR__) . '/Data/email.ini';
    }

    public function check($email)
    {
        if ($fp = @fopen($this->file, 'a+')) {
            while (!feof($fp)) {
                $file = fgets($fp, 2048);
                if (strpos($file, $email) !== false) {
                    @fclose($fp);
                    return 1;
                }
            }

            return true;
            @fclose($fp);
        }

        return false;
    }

    public function put($email)
    {
        $email_check = $this->check($email);
        if ($email_check === true) {
            $email = filesize($this->file) < 5 ? $email : "\r\n".$email;
            return file_put_contents($this->file, $email, FILE_APPEND);
        } elseif ($email_check === 1) {
            return true;
        }
        return false;
    }
}
