<?php 
class Checkbox extends Field{

    

    function __construct($name)
    {
        $this->name = $name; 
    }

    function render() : string{
        return "<input type='checkbox' name='{$this->name}'>";
    }

}

?>
 
