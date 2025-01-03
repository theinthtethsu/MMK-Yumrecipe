<?php
require_once __DIR__ . '/../Model/MUser.php';

// Start the session if it hasn't been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize the user object with empty parameters since we don't need them for signout
$user = new MUser("", "");

// Call the signout method
$user->signout();

// Redirect to login page
header("Location: /yumrecipe/User/View/resources/page/Signin/signIn.php");
exit();