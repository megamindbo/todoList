<?php
namespace Data;

class Database
{
    private static $dsn = 'mysql:host=localhost;dbname=work_db';
    private static $username = 'root';
    private static $password = '';
    private static $db;

    public static function getDB()
    {
        if (!isset(self::$db)) {
            try {
                self::$db = new \PDO(
                    self::$dsn,
                    self::$username,
                    self::$password
                );
                self::$db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('errors/errors.php');
                exit();
            }
        }
        return self::$db;
    }
}
