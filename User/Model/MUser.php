<?php

require_once 'DBConnection.php';

class MUser extends DBConnection
{
    private $table = "m_users";
    private $id;
    private $username;
    private $email;
    private $password;
    private $created_at;
    private $updated_at;
    private $isdeleted;

    /**
     * this function is used to construct the user object
     * @author: LK
   
     * @param string $email
     * @param string $password
     */
    public function __construct($email, $password)
    {
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
            (email, password) 
        VALUES 
            (:email, :password)";
        $stmt = $pdo->prepare($sql);
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
    public function login(){
        $db = new DBConnection();
        $pdo = $db->connection();
        
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
