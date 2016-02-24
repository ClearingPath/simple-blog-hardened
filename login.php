<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/24/16
 * Time: 8:29 AM
 */
?>
<html>
<head>
    <title>PHPRO Login</title>
</head>

<body>

<?php if( !isset( $_SESSION['id'] ) ){ ?>
<h2>Login Here</h2>
<form action="login_submit.php" method="post">
    <fieldset>
        <p>
            <label for="username">Username</label>
            <input type="email" id="username" name="username" value="" maxlength="20" />
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="" maxlength="20" />
        </p>
        <p>
            <input type="submit" value="→ Login" />
        </p>
    </fieldset>
</form>
<?php } else{ ?>
<h2>Logout Here</h2>
    <p><a href="logout.php">Log Out Link</a></p>
<?php } ?>
</body>
</html>
