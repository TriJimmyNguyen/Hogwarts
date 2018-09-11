<!--
    Cette page a ete pris des demonstrations du cours de PHP

-->
<div id="loginout">
    <?php if (user_is_logged()) { ?>
        <a href="private_page.php">Private Page</a>
        <form method="post" id="logoutform">
            <input type="submit" name="logout" value="Déconnexion"/>
        </form>
    <?php } else { ?>

        <form method="post" id="loginform">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" />
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" />
            <input type="submit" name="login" value="Connexion"/>
        </form>
    <?php } ?>
</div>