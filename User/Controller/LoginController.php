<?php
// session_start();
//require_once '../Model/MUser.php';


require_once __DIR__ . '/../Model/MUser.php';

ini_set('display_errors', 1);

// if(isset($_POST['signin'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $user = new MUser($email,$password);
//     $result = $user->login();


//     // check if the email exists
//     if(count($result) > 0){
      
//       if(password_verify($password, $result[0]['password'])){
//         header("Location: ../View/resources/page/homepage.php");
//       }else{
//         $_SESSION["pwd_error"] = "Invalid password";
//         header("Location: ../View/resources/page/signIn.php");
//       }
//     }else{
//         $_SESSION["email_error"] = "Email does not exist";
//         header("Location: ../View/resources/page/signIn.php");
//     }
// }
// }else{
//     header("Location: ../View/resources/page/error/404.php");
//     exit;
// }


if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new MUser($email,$password);
    $result = $user->login();

    $_SESSION['password'] = $password;


    // check if the email exists
    if(count($result) > 0){
      if(password_verify($password, $result[0]['password'])){
        header("Location: ../View/resources/page/homepage.php");
      }else{
        $_SESSION["pwd_error"] = "Invalid password";
        header("Location: ../View/resources/page/signIn.php");
      }
    }else{
        $_SESSION["email_error"] = "Email does not exist";
        header("Location: ../View/resources/page/signIn.php");
    }
}else{
    header("Location: ../View/resources/page/error/404.php");
    exit;
}
?>