<?php

namespace Controller;

use Model\WorkDB;

class Work
{
    public function index()
    {
        $works = WorkDB::get_work();
        include 'view/home.php';
    }

    public function create()
    {
        include 'view/create.php';
    }

    public function store()
    {
        $work_name = filter_input(INPUT_POST, 'work_name');
        $start_date = filter_input(INPUT_POST, 'start_date');
        $end_date = filter_input(INPUT_POST, 'end_date');
        $status = filter_input(INPUT_POST, 'status');
        if ($work_name === '' || $work_name === null) {
            $error_message = "Work name is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($start_date === '' || $start_date === null) {
            $error_message = "start_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($end_date === '' || $end_date === null) {
            $error_message = "end_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($work_name === '' || $work_name === null) {
            $error_message = "end_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif (strtotime($start_date) > strtotime($end_date)) {
            $error_message = "start_date must less than end_date .\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } else {
            WorkDB::add_work($work_name, $start_date, $end_date, $status);
            \header('location: ?action=index');
        }
    }

    public function edit()
    {
        include 'view/edit.php';
    }

    public function update()
    {
        $id = filter_input(INPUT_POST, 'id');
        $work_name = filter_input(INPUT_POST, 'work_name');
        $start_date = filter_input(INPUT_POST, 'start_date');
        var_dump($start_date);
        $end_date = filter_input(INPUT_POST, 'end_date');
        $status = filter_input(INPUT_POST, 'status');
        if ($work_name === '' || $work_name === null) {
            $error_message = "Work name is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($start_date === '' || $start_date === null) {
            $error_message = "start_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($end_date === '' || $end_date === null) {
            $error_message = "end_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif ($work_name === '' || $work_name === null) {
            $error_message = "end_date is required.\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } elseif (strtotime($start_date) > strtotime($end_date)) {
            $error_message = "start_date must less than end_date .\nPlease try again.";
            include 'errors/errors.php';
            exit();
        } else {
            WorkDB::update_work($id, $work_name, $start_date, $end_date, $status);
            header('Location: ?action=index');
        }
    }

    public function destroy()
    {
        $id = filter_input(INPUT_POST, 'id');
        WorkDB::delete_work($id);
        header('Location: ?action=index');
    }

    public function calendar()
    {
        $works = WorkDB::get_work();
        // var_dump($works);
        include 'view/calendar.php';

    }
}
