<h3>Search</h3>
<div id="search">
    <p id="searchTitle">Select what kind of items you wish to view</p>
    <form method="get" action="<?= $_SERVER['PHP_SELF']?>">
        <p>
            <input type="checkbox" name="wands" value="wands"
                <?php
                if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){
                    echo CHECKED_ATTR;
                }
                ?>
            />wands<br>
        </p>
        <p>
            <input type="checkbox" name="brooms" value="brooms"
                <?php
                if(array_key_exists('brooms', $_COOKIE) && $_COOKIE['brooms'] == 'view_yes'){
                    echo CHECKED_ATTR;
                }
                ?>
            />brooms<br>
        </p>
        <p>
            <input type="checkbox" name="books" value="books"
                <?php
                if(array_key_exists('books', $_COOKIE) && $_COOKIE['books'] == 'view_yes'){
                    echo CHECKED_ATTR;
                }
                ?>
            />books<br>
        </p>

        <input type="submit" name="submitSearch"  value="view"/>
    </form>
</div>