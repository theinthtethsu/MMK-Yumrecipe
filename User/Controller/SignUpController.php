<?php
require_once '../Model/MUser.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . "/User/Model/MUser.php";
//require_once $_SERVER['DOCUMENT_ROOT'] . "/User/Controller/common/mailSender.php";

ini_set('display_errors', 1);

// Check if the signup button is clicked
if (isset($_POST['signup'])) {
    // Process the signup logic here
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    //check if the email is valid
    if(!isValidateEmail($email)){
        echo "Invalid email";
        exit;
    }
    //check if the password is valid
    if(!isValidatePassword($password)){
        echo "Password must be at least 8 characters and max 20 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
        exit;
    }

    $user = new MUser($email,$password);
    if($user->isEmailExists($email)){
        echo "Email already exists";
    }else{
        $user->signup();
        // $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/User/View/mail/welcome.html");
        // $mail = new SendMail();
        // $mail->sendMail(
        //     $email,
        //     "Welcome to Yummy",
        //     $content
        // );
        header("Location: ../View/resources/page/signIn.php");
    }

} else {
    header("Location: ../View/resources/page/error/404.php");
    exit;
}


/**
 * this function is used to validate the password
 * @author: LK
 * @param string $password
 * @return bool
 */
function isValidatePassword($password){
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/";
    return preg_match($pattern, $password);
}


/**
 * this function is used to validate the email
 * @author: LK
 * @param string $email
 * @return bool
 */
function isValidateEmail($email){
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return preg_match($pattern, $email);
}

function isValidatePhone($phone){
    // Matches formats like:
    // 1234567890
    // 123-456-7890
    // (123) 456-7890
    // +1 123-456-7890
    $pattern = "/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/";
    return preg_match($pattern, $phone);
}

?>

