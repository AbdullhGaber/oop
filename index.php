<?php
require 'Field.php';
require 'text.php';
require 'radio.php';
require 'checkbox.php';

$fields = [
    new Field('basefiled'),
    new Text('textfield'),
    new Checkbox('checkbox field'),
    new radio('radio field'),
];


foreach ($fields as $field){
    echo $field->render()."</br>";
}