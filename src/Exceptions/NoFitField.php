<?php
namespace App\Exceptions;

class NoFitField extends \Exception
{
    protected $field;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->message = $message." No contiene Archivos";
        $this->field = $message;
    }

    public function getField(): mixed
    {
        return $this->field;
    }
}