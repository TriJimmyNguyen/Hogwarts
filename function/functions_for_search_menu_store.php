<?php

function setCookieForSearchMenu(){
    if(array_key_exists('submitSearch', $_GET)){
        header('Location:store.php');

        if( ! array_key_exists('wands', $_GET)){
            setcookie('wands', 'view_no', time() + ONE_DAY_IN_SEC);
        }
        else{
            setcookie('wands', 'view_yes', time() + ONE_DAY_IN_SEC);
        }

        if( ! array_key_exists('brooms', $_GET)){
            setcookie('brooms', 'view_no', time() + ONE_DAY_IN_SEC);
        }
        else{
            setcookie('brooms', 'view_yes', time() + ONE_DAY_IN_SEC);
        }

        if( ! array_key_exists('books', $_GET)){
            setcookie('books', 'view_no', time() + ONE_DAY_IN_SEC);
        }
        else{
            setcookie('books', 'view_yes', time() + ONE_DAY_IN_SEC);

        }
    }
}

?>