<?php
function check_empty($fieldname,$fieldvalue)
{
    if (empty($fieldvalue)) {
        return "Please enter an ".$fieldname;
    }
}

function valid_email($field)
{
    $field_check = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (!filter_var($field_check, FILTER_VALIDATE_EMAIL)) {
        return "Please enter a valid email";
    }
}

function check_pattern($fieldname,$fieldvalue,$pattern){
    if(!preg_match($pattern,$fieldvalue)){
        return "Please enter valid ".$fieldname;
    }
}

function check_match($field1, $field2,$fieldname)
{
    if ($field1 != $field2) {
        return $fieldname." do not match";
    }
}
