<?php

class OperacionSalgoInsuficiente extends Exception
{
    public function __construct($mensaje)
    {
        parent::__construct($mensaje);
    }
}

;
