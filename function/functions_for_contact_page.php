<?php

require_once("constant.php");

function validTextField($arrayValidation, $arrayKey){
    return strlen($arrayValidation[$arrayKey][VALUE]) >= LONGUEUR_CHAMP && $arrayValidation[$arrayKey][VALUE] != $arrayValidation[$arrayKey][MESSAGE];
}

function enterValidTextField(&$arrayValidation, $arrayKey){
    if (array_key_exists($arrayKey, $_POST)) {
        $arrayValidation[$arrayKey][VALUE] = filter_input(INPUT_POST, $arrayKey, FILTER_SANITIZE_STRING);
        $arrayValidation[$arrayKey][IS_VALID] = validTextField($arrayValidation, $arrayKey) ;
    }
}

function validGender(&$arrayValidation){
    if(array_key_exists(GENDER, $_POST)){
        $arrayValidation[SEXE][VALUE] = $_POST[GENDER];
        $arrayValidation[SEXE][IS_VALID] = true;
    }
}

function validLocation(&$arrayValidation){
    if(array_key_exists(LOCATION, $_POST))
    {
        if($_POST[LOCATION][PREMIER_VALEUR] != 'Choose' ){
            $arrayValidation[LOCATION][VALUE] = $_POST[LOCATION][PREMIER_VALEUR];
            $arrayValidation[LOCATION][IS_VALID] = true;
        }
    }
}

function displayTextField($fieldName, $arrayValidation, $arrayKey){
    $textValue = "";
    if($arrayValidation[$arrayKey][IS_VALID] || $arrayValidation[$arrayKey][VALUE] == ''){
        $textValue = $arrayValidation[$arrayKey][VALUE];
    }
    else{
        $textValue = $arrayValidation[$arrayKey][MESSAGE];
    }
    echo "<div ";
        if(!$arrayValidation[$arrayKey][IS_VALID] && $_SERVER['REQUEST_METHOD'] === 'POST' ){
            echo "class=invalid";
        }
    echo ">";
        echo '<label for="'. $fieldName .'">' . $fieldName.': </label>';
                echo '<input type="text" id ="' . $fieldName.'email" name="'. $fieldName .'" value ="' . $textValue .'"';

        echo '/>';
    echo '</div>';


}

?>