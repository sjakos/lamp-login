<?php
//TODO learn proper class doc structure
/**
 * DBconnect class
 */
use PDO;

class DBconnect
{
    protected $db_host = 'localhost';
    protected $db_name = 'login_dev';
    protected $db_user = 'root';
    //TODO store the password in a secure format
    protected $db_pass = 'password';


    public function __construct( PDO $db = null)
    {
        this->$db = $db;
        if (this->$db === null)
        {
            $dsn = "mysql: host-{$this->db_host};dbname={$this->db_name}";
            $this->db = new PDO(
                $dsn,
                $this->db_user,
                $this->db_pass
            );
            $this->db->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
    }
}
