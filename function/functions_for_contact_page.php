<?php

require_once("constant.php");

//Determine comment le champ de texte est valide ou non
function validTextField($arrayValidation, $arrayKey){
    return strlen($arrayValidation[$arrayKey][VALUE]) >= LONGUEUR_CHAMP && $arrayValidation[$arrayKey][VALUE] != $arrayValidation[$arrayKey][MESSAGE];
}

//Filtrer et determiner si le champ de texte est valide ou non
function enterValidTextField(&$arrayValidation, $arrayKey){
    if (array_key_exists($arrayKey, $_POST)) {
        $arrayValidation[$arrayKey][VALUE] = filter_input(INPUT_POST, $arrayKey, FILTER_SANITIZE_STRING);
        $arrayValidation[$arrayKey][IS_VALID] = validTextField($arrayValidation, $arrayKey) ;
    }
}

//Validation des bouttons radios pour le sexe de la perseonne
function validGender(&$arrayValidation){
    if(array_key_exists(GENDER, $_POST)){
        $arrayValidation[SEXE][VALUE] = $_POST[GENDER];
        $arrayValidation[SEXE][IS_VALID] = true;
    }
}


//Validation pour la location
function validLocation(&$arrayValidation){
    if(array_key_exists(LOCATION, $_POST))
    {
        if($_POST[LOCATION][PREMIER_VALEUR] != 'Choose' ){
            $arrayValidation[LOCATION][VALUE] = $_POST[LOCATION][PREMIER_VALEUR];
            $arrayValidation[LOCATION][IS_VALID] = true;
        }
    }
}

//Fonction utiliser pour faire apparaitre champ de texte dans le formulaire et ajouter la classe invalide si le champ a ete mal remplie
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