<?php

function validTextField($arrayValidation, $arrayKey){
    return strlen($arrayValidation[$arrayKey]['value']) >= LONGUEUR_CHAMP && $arrayValidation[$arrayKey]['value'] != $arrayValidation[$arrayKey]['message'];
}

function enterValidTextField(&$arrayValidation, $arrayKey){
    if (array_key_exists($arrayKey, $_POST)) {
        $arrayValidation[$arrayKey]['value'] = filter_input(INPUT_POST, $arrayKey, FILTER_SANITIZE_STRING);
        $arrayValidation[$arrayKey]['is_valid'] = validTextField($arrayValidation, $arrayKey) ;
    }
}

?>