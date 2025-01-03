<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/yumrecipe/User/Model/DBConnection.php";

class MUser extends DBConnection
{
    private $table = "m_users";
    private $id;
    private $username;
    private $password;
    private $email;
    private $status;
    private $plan_id;
    private $isdeleted;
    private $created_at;
    private $updated_at;
    

    /**
     * this function is used to construct the user object
     * @author: LK
   
     * @param string $email
     * @param string $password
     */
    public function __construct($username,$email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


    /**
     * this function is used to signup the user
     * @author: LK
     * @return void
     */
    public function signup(){
        $db = new DBConnection();
        $pdo = $db->connection();

        $sql = "
        INSERT INTO $this->table 
            (username,email, password) 
        VALUES 
            (:username,:email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":username", $this->username);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":password", password_hash($this->password,PASSWORD_DEFAULT) );
        $stmt->execute();
    }

    /**
     * this function is used to check if the email exists
     * @author: LK
     * @return bool
     */
    public function isEmailExists($email){
        $db = new DBConnection();
        $pdo = $db->connection();

        $sql = "SELECT email FROM $this->table WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return count($result) > 0;
    }

    /**
     * this function is used to login the user
     * @author: LK
     * @return void
     */
    public function signin(){
        $db = new DBConnection();
        $pdo = $db->connection();
        
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function signout() {
        // Unset all session variables
        $_SESSION = array();
        
        // Destroy the session cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600, '/');
        }
        
        // Destroy the session
        session_destroy();
    }
}