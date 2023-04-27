<?php

$textinput_field;
$numeric_input;

class TextInput
{
    public $current_value;

    public function add($text)
    {
        $this->current_value = $text;
    }

    public function getValue()
    {
        return $this->current_value;
    }
}



$newTextInput = new TextInput();

$newTextInput->add('Current text');
echo $newTextInput->getValue();