<!--La validation a ete pris des demonstration du cours de PHP-->

<?php


require_once("constant.php");
require_once("function/functions_for_contact_page.php");

$top_view = TOP_VIEW_PATH;

$pageName = CONTACT_PAGE_NAME;
require("$top_view");


$validation = array(
    'email' => array(
        'value' => '',
        'is_valid' => false,
        'message' =>'more char needed',
    )     ,
    'postalCode' => array(
        'value' => '',
        'is_valid' => false,
        'message' => 'more char needed',
    ),
    'address' => array(
        'value' => '',
        'is_valid' => false,
        'message' => 'more char needed',
    ),
    'sexe' => array(
            'value' => '',
            'is_valid' => false,
    ),
    'location' => array(
            'value' => '',
            'is_valid' => false,
    ),

);

$countries = array(
    'Choose',
    'Canada',
    'Denmark',
    'Egypt',
    'France',
    'Japan',
    'Mexico',
    'Thailand',
    'USA',

);


// Faire la validation champ par champ
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider champ par champ
    enterValidTextField($validation, EMAIL);

    enterValidTextField($validation, POSTAL_CODE);

    enterValidTextField($validation, ADDRESS);

    if ($validation[EMAIL][IS_VALID] && $validation[POSTAL_CODE][IS_VALID]
        && $validation[ADDRESS][IS_VALID]) {
        // Formulaire valide
        // enregister DB puis redirection
    }
}

validGender($validation);

validLocation($validation);

?>

<h2><?= $pageName?></h2>
<main id="contact">
    <h3>Subscription For News</h3>
    <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
        <form id="formulaire_inscription" method="post">
            <?php
                //3 champ de texte
                 displayTextField('email', $validation, EMAIL);
                 displayTextField('postalCode', $validation, POSTAL_CODE);
                 displayTextField('address', $validation, ADDRESS);
             ?>

            <!--les radio buttons           -->
            <div <?php if(!array_key_exists('gender', $_POST) && $_SERVER['REQUEST_METHOD'] === 'POST'){echo "class=invalid";}?>>
                <label for="gender" >Gender:
                    <input type="radio" name="gender" value="male" <?php if( $validation['sexe']['value']=='male'){echo CHECKED_ATTR;}?>/>Male
                    <input type="radio" name="gender" value="female" <?php if( $validation['sexe']['value']=='female'){echo CHECKED_ATTR;}?>/>Female
                    <input type="radio" name="gender" value="other" <?php if( $validation['sexe']['value']=='other'){echo CHECKED_ATTR;}?>/>Other
                </label>
            </div>

            <!--Le champ select            -->
            <div <?php if(!$validation['location']['is_valid'] && $_SERVER['REQUEST_METHOD'] === 'POST'){echo "class=invalid";}?>>
                <label for="location">Choose your country: </label>
                <select name="location[]" id="location">
                    <?php foreach($countries as $key) { ?>
                        <option value="<?= $key?>" <?php echo ($key == $validation['location']['value']? SELECTED_ATTR : " ");?>><?= $key?></option>
                    <?php }?>
                </select>

            </div>

            <!--Le boutton submit  -->
            <div>
                <input type="submit" value="subscribe"/>
            </div>
        </form>
    </form>
    <h3>Come Meet Us</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d79147.32815290352!2d-0.48693288919867683!3d51.689966615767304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4876402f2fe350ad%3A0x6944cdcc4c412ec8!2sWarner+Bros.+Studio+Tour+London%2C+Studio+Tour+Drive%2C+Watford%2C+Leavesden+WD25+7LR%2C+UK!3m2!1d51.6904131!2d-0.41758!5e0!3m2!1sfr!2sca!4v1536589957184" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</main>
<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
