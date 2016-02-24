<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/24/16
 * Time: 8:46 AM
 */
// Begin the session
session_start();

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();
?>