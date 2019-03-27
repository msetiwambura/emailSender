<?php
class DBException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
        return__CLASS__.":[{$this->code}]:{$this->message}\n";
    }
    public function RecoveryFunction()
    {

    }
}
class DBSanitizeException extends DBException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
        return__CLASS__.":[{$this->code}]:{$this->message}\n";
    }
    public function RecoveryFunction()
    {

    }
}
class DBQuery extends DBException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
        return__CLASS__.":[{$this->code}]:{$this->message}\n";
    }
    public function RecoveryFunction()
    {

    }
}