<?php 

require_once 'StrLenValidator.php';
require_once 'DBconnect.php'; 

class ValidateLogin
{
    private $username;
    private $password;
    private $db;
    private $checkStr;
    public  $errors;

    public function __construct()
    {
        $this->checkStr = new StrLenValidator(5,100);
        $this->db = new DBconnect(); 

        $this->username = isset($_POST['loginUsrNm']) ? $_POST['loginUsrNm'] : $this->errors[] = 'username cannot be empty';
        $this->password = isset($_POST['loginPwd']) ? $_POST['loginPwd'] : $this->errors[] = 'password cannot be empty';
    }

    public function validate()
    {
        $this->checkStr->validateStr('username',$this->username);
        $this->checkStr->validateStr('password',$this->password);

        if ($this->checkStr->validationPassed()) {
            $checkCredentials = $this->db->prepare('SELECT id FROM users WHERE name=? and pass=?');
            $checkCredentials->execute([$this->username,$this->password]);
            $loginCheck = $checkCredentials->rowCount();
            if ($loginCheck === 1) {
                return true;
            } else {
                $this->errors[] = 'invalid username or password';
                return false;
            }
        } else {
            foreach ($this->checkStr->errors as $key => $value) {
               $this->errors[] = $value;
            }
            return false;
        }
    }

    public function getUsername()
    {
        return htmlspecialchars($this->username);
    }
}
