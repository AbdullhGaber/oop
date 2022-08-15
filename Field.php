<?php 
class Field {

    protected $name = "" ; 

    function __construct($name)
    {
        $this->name = $name; 
    }

    function render() : string{
        return "";
    }

}

?>