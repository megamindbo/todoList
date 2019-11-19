<?php

namespace Model;
use Data\Database;

class WorkDB
{
    public static function get_work()
    {
        $db = Database::getDB();
        $query = '
        SELECT *
        FROM work ';
        try {
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $statement->closeCursor();
            return $result;
        } catch (\PDOException $e) {
            $error_message = $e->getMessage();
        }
    }

    public static function add_work($work_name,$start_date,$end_date,$status)
    {
        $db = Database::getDB();
        $query = 'INSERT INTO work
                 (work_name,start_date,end_date,status)
              VALUES
                 (:work_name,:start_date,:end_date,:status)';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':work_name', $work_name);
            $statement->bindValue(':start_date', $start_date);
            $statement->bindValue(':end_date', $end_date);
            $statement->bindValue(':status', $status);
            $statement->execute();
            $statement->closeCursor();

        } catch (PDOException $e) {
            $error_message = $e->getMessage();
        }
    }

    public static function update_work($id,$work_name,$start_date,$end_date,$status)
    {
        $db = Database::getDB();
        $query = '
        UPDATE work
        SET work_name = :work_name, start_date = :start_date, end_date = :end_date, status = :status
        WHERE id = :id';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':work_name', $work_name);
            $statement->bindValue(':start_date', $start_date);
            $statement->bindValue(':end_date', $end_date);
            $statement->bindValue(':status', $status);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        } catch (\PDOException $e) {
            $error_message = $e->getMessage();
        }

    }

    public static function delete_work($id)
    {
        $db = Database::getDB();
        $query = 'DELETE FROM work WHERE id = :id';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
        }
    }



}