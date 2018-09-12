<!--
    Cette page a ete pris des demonstrations du cours de PHP

-->
<div id="loginout">
    <?php if (user_is_logged()) { ?>
        <div id="signin">
            <h3> Sign in succesful! </h3>
            <a href="private_page.php">Go to your private page</a>
        </div>
        <div id="signout">
             <h3>Or else sign out here </h3>
            <form method="post" id="logoutform">
                <input type="submit" name="logout" value="Sign out"/>
            </form>
        </div>
    <?php } else { ?>

        <form method="post" id="loginform">
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" />
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" />
            </p>
            <input type="submit" name="login" value="Connect"/>
        </form>
    <?php } ?>
</div>