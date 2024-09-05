<?php
    class Field
    {
        public static function input($label, $type, $id, $class, $placeholder=null, $value=null,  $required=false)
        {
            $input = "<input type='$type' id='$id' class='$class' name='$id'";
            $input .= !$placeholder ? "placeholder='$placeholder'" : "";
            $input .= !$value ? "value='$value'" :  "";
            $input .= !$required ? "required" : "";
            $input .= ">";
            
            
            echo "<label for='$id'>$label: </label>";
            echo $input;
        }

        
    }