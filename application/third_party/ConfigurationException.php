<?php
class ConfigurationException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function __toString()
    {
        return__CLASS__.":[{$this->code}]:{$this->message}\n";
    }
    public function RecoveryFunction()
    {

    }
}